<?php
namespace PHPMVC\Controllers;

use PHPMVC\LIB\Helper;
use PHPMVC\LIB\InputFilter;
use PHPMVC\lib\Messenger;
use PHPMVC\Models\CityModel;
use PHPMVC\Models\CountryModel;
use PHPMVC\Models\GovernorateModel;
use PHPMVC\Models\UserGroupModel;
use PHPMVC\Models\UserModel;
use PHPMVC\Models\UserProfileModel;
use PHPMVC\Models\UsersActionModel;

class GovernorateController extends AbstractController
{

    use InputFilter;
    use Helper;

    private $_createActionRoles =
    [
        'GovernorateName'    => 'alphanum',
        'GovernorateNameEng'   => 'alphanum',
        'CountryId'   => 'num',
        'Nots'        => 'alpha',
    ];

    private $_editActionRoles =
    [

    ];

    public function defaultAction()
    {
        $this->language->load('template.common');
        $this->language->load('governorate.default');
        $this->_data['Country'] = CountryModel::getAll();

        $this->_data['Governorate'] = GovernorateModel::getAll();
         $this->_view();




    }


    public function createAction()
    {

        $this->language->load('template.common');
        $this->language->load('governorate.create');
        $this->language->load('governorate.labels');
        $this->language->load('governorate.messages');
        $this->language->load('validation.errors');
        $this->_data['country'] = CountryModel::getAll();

              if(isset($_POST['submit']) && $this->isValid($this->_createActionRoles, $_POST)) {

                  $governorate= new GovernorateModel();
                  $governorate->GovernorateName = $this->filterString($_POST['GovernorateName']);
                  $governorate->GovernorateNameEng = $this->filterString($_POST['GovernorateNameEng']);
                  $governorate->CountryId = $this->filterInt($_POST['CountryId']);
                  $governorate->Nots = $this->filterString($_POST['Nots']);


            // TODO:: SEND THE USER WELCOME EMAIL
            if($governorate->save()) {
                $this->messenger->add($this->language->get('message_create_success'));
            } else {
                $this->messenger->add($this->language->get('message_create_failed'), Messenger::APP_MESSAGE_ERROR);
            }
            $this->redirect('/governorate');
        }

        $this->_view();
    }

    public function editAction()
    {

        $id = $this->filterInt($this->_params[0]);
        $governorate = GovernorateModel::getByPK($id);

        if($governorate === false || $this->session->u->UserId == $id  ) {
            $this->redirect('/governorate');
        }

        $this->language->load('template.common');
        $this->language->load('governorate.edit');
        $this->language->load('governorate.labels');
        $this->language->load('governorate.messages');
        $this->language->load('validation.errors');


        $this->_data['country'] = CountryModel::getAll();
        $this->_data['governorate'] = $governorate;


        if(isset($_POST['submit']) && $this->isValid($this->_editActionRoles, $_POST)) {
            $governorate->GovernorateName = $this->filterString($_POST['GovernorateName']);
            $governorate->GovernorateNameEng = $this->filterString($_POST['GovernorateNameEng']);
            $governorate->CountryId = $this->filterInt($_POST['CountryId']);
            $governorate->Nots = $this->filterString($_POST['Nots']);

            if($governorate->save()) {


                $this->messenger->add($this->language->get('message_create_success'));
            } else {
                $this->messenger->add($this->language->get('message_create_failed'), Messenger::APP_MESSAGE_ERROR);
            }
            $this->redirect('/governorate');
        }



        $this->_view();
    }


        public function deleteAction()
    {

        $id = $this->filterInt($this->_params[0]);
        $governorate = GovernorateModel::getByPK($id);



        if($governorate === false || $this->session->u->UserId == $id  ) {
            $this->redirect('/governorate');
        }


        $this->language->load('governorate.messages');

        if($governorate->delete()) {
                  $this->messenger->add($this->language->get('message_delete_success'));
            }  else {
            $this->messenger->add($this->language->get('message_delete_failed'), Messenger::APP_MESSAGE_ERROR);
        }
        $this->redirect('/governorate');
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