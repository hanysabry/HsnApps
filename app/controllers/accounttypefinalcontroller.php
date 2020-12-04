<?php
namespace PHPMVC\Controllers;

use PHPMVC\LIB\Helper;
use PHPMVC\LIB\InputFilter;
use PHPMVC\lib\Messenger;

use PHPMVC\Models\AccountassistantModel;
use PHPMVC\Models\AccounttypefinalModel;
use PHPMVC\Models\AccounttypeModel;
use PHPMVC\Models\ClientModel;
use PHPMVC\Models\CountryModel;
use PHPMVC\Models\UserGroupModel;
use PHPMVC\Models\UserModel;
use PHPMVC\Models\UserProfileModel;
use PHPMVC\Models\UsersActionModel;

class AccounttypefinalController extends AbstractController
{

    use InputFilter;
    use Helper;

    private $_createActionRoles =
    [

        'AccountTypefinalName'        => 'req|alphanum'

    ];

    private $_editActionRoles =
    [
        'AccountTypefinalName'      => 'req|alphanum'


    ];

    public function defaultAction()
    {
        $this->language->load('template.common');
        $this->language->load('accounttypefinal.default');
        $this->language->load('accounttypefinal.messages');
        $this->language->load('validation.errors');

        $this->_data['accounttypefinal'] = AccounttypefinalModel::getAll();

        $this->_view();
    }

    public function createAction()
    {

        $this->language->load('template.common');
        $this->language->load('accounttypefinal.create');
        $this->language->load('accounttypefinal.labels');
        $this->language->load('accounttypefinal.messages');
        $this->language->load('validation.errors');


        if(isset($_POST['submit']) && $this->isValid($this->_createActionRoles, $_POST)) {

            $accounttype = new AccounttypefinalModel();
            $accounttype->AccountTypefinalName= $this->filterString($_POST['AccountTypefinalName']);
            $accounttype->AccountTypefinalNameEng= $this->filterString($_POST['AccountTypefinalNameEng']);
            $accounttype->Nots = $this->filterString($_POST['Nots']);
            // TODO:: SEND THE USER WELCOME EMAIL
            if($accounttype->save()) {

                $this->messenger->add($this->language->get('message_create_success'));
            } else {
                $this->messenger->add($this->language->get('message_create_failed'), Messenger::APP_MESSAGE_ERROR);
            }
            $this->redirect('/accounttypefinal');
        }

        $this->_view();
    }




    public function editAction()
    {
        $id = $this->filterInt($this->_params[0]);
        $accounttype = AccounttypefinalModel::getByPK($id);
        if($accounttype === false || $this->session->u->UserId == $id ) {
            $this->redirect('/accounttypefinal');
        }
        $this->_data['accounttype'] = $accounttype;
        $this->language->load('template.common');
        $this->language->load('accounttypefinal.edit');
        $this->language->load('accounttypefinal.labels');
        $this->language->load('accounttypefinal.messages');
        $this->language->load('validation.errors');
        if(isset($_POST['submit']) && $this->isValid($this->_editActionRoles, $_POST)) {
            $accounttype->AccountTypefinalName= $this->filterString($_POST['AccountTypefinalName']);
            $accounttype->AccountTypefinalNameEng= $this->filterString($_POST['AccountTypefinalNameEng']);
            $accounttype->Nots = $this->filterString($_POST['Nots']);
            if($accounttype->save()) {
                $this->messenger->add($this->language->get('message_create_success'));
            } else {
                $this->messenger->add($this->language->get('message_create_failed'), Messenger::APP_MESSAGE_ERROR);
            }
            $this->redirect('/accounttypefinal');
        }

        $this->_view();
    }


        public function deleteAction()
    {

        $id = $this->filterInt($this->_params[0]);
        $accounttype = AccounttypefinalModel::getByPK($id);
        if($accounttype === false || $this->session->u->UserId == $id ) {
            $this->redirect('/accounttypefinal');
        }

               $this->language->load('accounttypefinal.messages');

        if($accounttype->delete()) {
                  $this->messenger->add($this->language->get('message_delete_success'));
            }  else {
            $this->messenger->add($this->language->get('message_delete_failed'), Messenger::APP_MESSAGE_ERROR);
        }
        $this->redirect('/accounttypefinal');
    }


    // TODO:: make sure this is a AJAX Request
    // TODO:: explain the different types of headers used in this course
//    public function checkUserExistsAjaxAction()
//    {
//        if(isset($_POST['Username']) && !empty($_POST['Username'])) {
//            header('Content-type: text/plain');
//            if(UserModel::userExists($this->filterString($_POST['Username'])) !== false) {
//                echo 1;
//            } else {
//                echo 2;
//            }
//        }
//    }
}