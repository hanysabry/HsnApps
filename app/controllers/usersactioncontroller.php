<?php
namespace PHPMVC\Controllers;

use PHPMVC\LIB\Helper;
use PHPMVC\LIB\InputFilter;
use PHPMVC\lib\Messenger;
use PHPMVC\Models\SupplierModel;
use PHPMVC\Models\UserGroupPrivilegeModel;
use PHPMVC\Models\UserModel;
use PHPMVC\Models\UsersActionModel;

class UsersActionController extends AbstractController
{

    use InputFilter;
    use Helper;

    private $_createActionRoles =
    [
//        'UserId'          => 'alphanum|between(3,40)' ,
//        'User_login'         => 'da',
//        'User_log_out'   => 'alphanum|max(15)',
//        'TableName'       => 'req|alphanum|max(50)' ,
//        'ActionTitle'        => 'req|alphanum|max(50)' ,
//        'ActionColumn'        => 'req|alphanum|max(50)' ,
//        'TimeAt'        => 'req|alphanum|max(50)' ,


    ];


    public function defaultAction()
    {
        $this->language->load('template.common');
        $this->language->load('usersaction.default');
        $this->_data['usersactions'] = UsersActionModel::getAll();
        $this->_view();
    }





    public function createAction()
    {
        $this->language->load('template.common');
//        $this->language->load('suppliers.create');
//        $this->language->load('suppliers.labels');
//        $this->language->load('suppliers.messages');
        $this->language->load('validation.errors');

        if(isset($_POST['submit']) && $this->isValid($this->_createActionRoles, $_POST)) {
            $this->_data['users'] = UserModel::getUsers($this->session->u);
            $usersaction = new UsersActionModel();
            $usersaction->UserId=$this->$this->session->u->profile->UserId;
//            $usersaction->UserId =  $this->_data['users'] = UserModel::getUsers($this->session->u);
//            $usersaction->User_login = $this->filterString($_POST['Email']);
//            $usersaction->User_log_out = $this->filterString($_POST['PhoneNumber']);
//            $usersaction->TableName = $this->filterString($_POST['Address']);
//            $usersaction->ActionTitle = $this->filterString($_POST['Address']);
//            $usersaction->ActionColumn = $this->filterString($_POST['Address']);
//            $usersaction->TimeAt = $this->filterString($_POST['Address']);

            if($usersaction->save()) {
                $this->messenger->add($this->language->get('message_create_success'));
            } else {
                $this->messenger->add($this->language->get('message_create_failed'), Messenger::APP_MESSAGE_ERROR);
            }
            $this->redirect('/suppliers');
        }

        $this->_view();
    }

    public function editAction()
    {

        $id = $this->filterInt($this->_params[0]);
        $usersaction = SupplierModel::getByPK($id);

        if(usersaction === false) {
            $this->redirect('/suppliers');
        }

        $this->_data['usersaction'] = $usersaction;

        $this->language->load('template.common');
        $this->language->load('suppliers.edit');
        $this->language->load('suppliers.labels');
        $this->language->load('suppliers.messages');
        $this->language->load('validation.errors');



        if(isset($_POST['submit']) && $this->isValid($this->_createActionRoles, $_POST)) {

            $usersaction->UserId = $this->filterString($_POST['Name']);
            $usersaction->User_login = $this->filterString($_POST['Email']);
            $usersaction->User_log_out = $this->filterString($_POST['PhoneNumber']);
            $usersaction->TableName = $this->filterString($_POST['Address']);
            $usersaction->ActionTitle = $this->filterString($_POST['Address']);
            $usersaction->ActionColumn = $this->filterString($_POST['Address']);
            $usersaction->TimeAt = $this->filterString($_POST['Address']);

            if($usersaction->save()) {
                $this->messenger->add($this->language->get('message_create_success'));
            } else {
                $this->messenger->add($this->language->get('message_create_failed'), Messenger::APP_MESSAGE_ERROR);
            }
            $this->redirect('/suppliers');
        }

        $this->_view();
    }

    public function deleteAction()
    {

        $id = $this->filterInt($this->_params[0]);
        $supplier = SupplierModel::getByPK($id);

        if($supplier === false) {
            $this->redirect('/suppliers');
        }

        $this->language->load('suppliers.messages');

        if($supplier->delete()) {
            $this->messenger->add($this->language->get('message_delete_success'));
        } else {
            $this->messenger->add($this->language->get('message_delete_failed'), Messenger::APP_MESSAGE_ERROR);
        }
        $this->redirect('/suppliers');
    }

    public function diff($now = 'NOW') {
        if(!($now instanceOf DateTime)) {
            $now = new DateTime($now);
        }
        return parent::diff($now);
    }
}