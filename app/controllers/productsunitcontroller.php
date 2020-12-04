<?php
namespace PHPMVC\Controllers;


use PHPMVC\LIB\Helper;
use PHPMVC\LIB\InputFilter;
use PHPMVC\lib\Messenger;
use PHPMVC\Models\AccountListModel;
use PHPMVC\Models\CityModel;
use PHPMVC\Models\CountryModel;
use PHPMVC\Models\ProductlistModel;
use PHPMVC\Models\ProductsunitModel;
use PHPMVC\Models\UserGroupModel;
use PHPMVC\Models\UserModel;
use PHPMVC\Models\UserProfileModel;

use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Html2Pdf;

//use  PHPMVC\tcpdf\tcpdf;
//require_once TCPDF_PATH . '/config/tcpdf_config.php';


class ProductsunitController extends AbstractController
{

    use InputFilter;
    use Helper;

    private $_createActionRoles =
    [
        'UnitName'     => 'req|alpha|between(2,15)',
        'ProductId'     => 'req|int'
    ];

    private $_editActionRoles =
    [
        'UnitName'        => 'alph|max(15)',
        'ProductId'       => 'req|int'
    ];

    public function defaultAction()
    {
        $this->language->load('template.common');
        $this->language->load('productsunit.default');
        $this->_data['productsunit'] = UserModel::getUsers($this->session->u);
        $this->_data['productsunit'] = ProductsunitModel::getAll();
        $this->_view();

    }




    public function printAction()
    {
//        require_once TCPDF_PATH . 'tcpdf.php';
//        require_once TCPDF_PATH . '/config/tcpdf_config.php';

        $this->language->load('template.common');
        $this->language->load('users.default');
        $this->_data['users'] = UserModel::getAll();
        $this->_view();
    }


    public function createAction()
    {

        $this->language->load('template.common');
        $this->language->load('productsunit.create');
        $this->language->load('productsunit.labels');
        $this->language->load('productsunit.messages');
        $this->language->load('validation.errors');

        $this->_data['product'] = ProductlistModel::getAll();


        if(isset($_POST['submit']) && $this->isValid($this->_createActionRoles,$_POST)) {
            $productsunit = new ProductsunitModel();
            $productsunit->UnitId = $this->filterInt($_POST['UnitId']);
            $productsunit->UnitName = $this->filterString($_POST['UnitName']);
            $productsunit->ProductId= $this->filterInt($_POST['ProductId']);
            $productsunit->Quantity= $this->filterInt($_POST['Quantity']);
            $productsunit->QuantityOfNo= $this->filterInt($_POST['QuantityOfNo']);
            $productsunit->QuantityMin= $this->filterInt($_POST['QuantityMin']);
            $productsunit->QuantityMax= $this->filterInt($_POST['QuantityMax']);
            $productsunit->VatPercent= $this->filterInt($_POST['VatPercent']);
            $productsunit->Nots= $this->filterString($_POST['Nots']);
            // TODO:: SEND THE USER WELCOME EMAIL
            if($productsunit->save()&& $this->isValid($this->_createActionRoles,$_POST)) {
                $this->messenger->add($this->language->get('message_create_success'));
            } else {
                $this->messenger->add($this->language->get('message_create_failed'), Messenger::APP_MESSAGE_ERROR);
            }
            $this->redirect('/productsunit');
        }
        $this->_view();
    }

    public function editAction()
    {

        $id = $this->filterInt($this->_params[0]);
        $productsunits = ProductsunitModel::getByPK($id);


        if($productsunits === false || $this->session->u->UserId == $id)   {
            $this->redirect('/productsunit');
        }

        $this->_data['productsunits'] = $productsunits;


        $this->language->load('template.common');
        $this->language->load('productsunit.edit');
        $this->language->load('productsunit.labels');
        $this->language->load('productsunit.messages');
        $this->language->load('validation.errors');



        if(isset($_POST['submit'])){
         $productsunits->UnitName = $this->filterString($_POST['UnitName']);
        $productsunits->ProductId = $this->filterInt($_POST['ProductId']);
        $productsunits->Quantity = $this->filterInt($_POST['Quantity']);
        $productsunits->QuantityOfNo = $this->filterInt($_POST['QuantityOfNo']);
        $productsunits->QuantityMin = $this->filterInt($_POST['QuantityMin']);
        $productsunits->QuantityMax = $this->filterInt($_POST['QuantityMax']);
        $productsunits->VatPercent = $this->filterInt($_POST['VatPercent']);
        $productsunits->Nots = $this->filterString($_POST['Nots']);

        if ($productsunits->save()) {

            $this->messenger->add($this->language->get('message_create_success'));
        } else {
            $this->messenger->add($this->language->get('message_create_failed'), Messenger::APP_MESSAGE_ERROR);

            $this->redirect('/productsunit');
        }
    }

        $this->_view();
    }




        public function deleteAction()
    {

        $id = $this->filterInt($this->_params[0]);
        $productsunits = ProductsunitModel::getByPK($id);


        if($productsunits === false || $this->session->u->UserId == $id)   {
            $this->redirect('/productsunit');
        }

        $this->_data['productsunits'] = $productsunits;

        $this->language->load('productsunit.messages');

        if($productsunits->delete()) {
                  $this->messenger->add($this->language->get('message_delete_success'));
            }  else {
            $this->messenger->add($this->language->get('message_delete_failed'), Messenger::APP_MESSAGE_ERROR);
        }
        $this->redirect('/productsunit');
    }


    // TODO:: make sure this is a AJAX Request
    // TODO:: explain the different types of headers used in this course
    public function checkUserExistsAjaxAction()
    {
        if(isset($_POST['Username']) && !empty($_POST['Username'])) {
            header('Content-type: text/plain');
            if(UserModel::userExists($this->filterString($_POST['Username'])) !== false) {
                echo 1;
            } else {
                echo 2;
            }
        }
    }


}