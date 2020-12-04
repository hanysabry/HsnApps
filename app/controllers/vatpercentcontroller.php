<?php
namespace PHPMVC\Controllers;

use PHPMVC\LIB\Helper;
use PHPMVC\LIB\InputFilter;
use PHPMVC\lib\Messenger;
use PHPMVC\Models\UserModel;
use PHPMVC\Models\VatpercentModel;

class VatpercentController extends AbstractController
{

    use InputFilter;
    use Helper;

    private $_createActionRoles =
    [

        'VatPercent'        =>  'num'
    ];

    private $_editActionRoles =
    [

        'VatPercent'        =>  'num'
    ];

    public function defaultAction()
    {
        $this->language->load('template.common');
        $this->language->load('vatpercent.default');
        $this->language->load('vatpercent.labels');
        $this->language->load('validation.errors');
        $this->language->load('vatpercent.messages');

        $this->_data['vatpercent'] =VatpercentModel::getAll();
         $this->_view();
    }


    public function createAction()
    {

        $this->language->load('template.common');
        $this->language->load('vatpercent.create');
        $this->language->load('vatpercent.labels');
        $this->language->load('vatpercent.messages');
        $this->language->load('validation.errors');


        if(isset($_POST['submit']) && $this->isValid($this->_createActionRoles, $_POST)) {
                  $vatpercents = new  VatpercentModel();
         $vatpercents->VatPercent = $this->filterInt($_POST['VatPercent']);
         $vatpercents->Nots = $this->filterString($_POST['Nots']);

            if($vatpercents->save()) {
                $this->messenger->add($this->language->get('message_create_success'));
            } else {
                $this->messenger->add($this->language->get('message_create_failed'), Messenger::APP_MESSAGE_ERROR);
            }
            $this->redirect('/vatpercent');
        }

        $this->_view();
    }

    public function editAction()
    {
        $this->language->load('template.common');
        $this->language->load('vatpercent.edit');
        $this->language->load('vatpercent.labels');
        $this->language->load('vatpercent.messages');
        $this->language->load('validation.errors');

        $id = $this->filterInt($this->_params[0]);
        $vatpercent = VatpercentModel::getByPK($id);

        if($vatpercent === false || $this->session->u->UserId == $id  ) {
            $this->redirect('/vatpercent');
        }
        $this->_data['vatpercent'] = $vatpercent;
        if(isset($_POST['submit']) && $this->isValid($this->_editActionRoles, $_POST)) {

            $vatpercent->VatPercent = $this->filterInt($_POST['VatPercent']);
             $vatpercent->Nots = $this->filterString($_POST['Nots']);

            if($vatpercent->save()) {

                $this->messenger->add($this->language->get('message_create_success'));
            } else {
                $this->messenger->add($this->language->get('message_create_failed'), Messenger::APP_MESSAGE_ERROR);
            }
            $this->redirect('/vatpercent');
        }
        $this->_view();
    }

        public function deleteAction()
    {
        $id = $this->filterInt($this->_params[0]);
        $vatpercent = VatpercentModel::getByPK($id);

        if($vatpercent === false || $this->session->u->UserId == $id  ) {
            $this->redirect('/vatpercent');
        }
        $this->language->load('vatpercent.messages');

        if($vatpercent->delete()) {
                  $this->messenger->add($this->language->get('message_delete_success'));
            }  else {
            $this->messenger->add($this->language->get('message_delete_failed'), Messenger::APP_MESSAGE_ERROR);
        }
        $this->redirect('/vatpercent');
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