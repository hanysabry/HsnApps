<?php
namespace PHPMVC\Controllers;

use PHPMVC\LIB\Helper;
use PHPMVC\LIB\InputFilter;
use PHPMVC\lib\Messenger;

use PHPMVC\Models\ClientModel;
use PHPMVC\Models\CountryModel;
use PHPMVC\Models\UserGroupModel;
use PHPMVC\Models\UserModel;
use PHPMVC\Models\UserProfileModel;
use PHPMVC\Models\UsersActionModel;

class CountrysController extends AbstractController
{

    use InputFilter;
    use Helper;

    private $_createActionRoles =
    [
        'CountryName'     => 'req|alphanum|between(3,12)',
        'Nots'      => 'alpha|between(3,10)',
           ];

//    private $_editActionRoles =
//    [
//        'PhoneNumber'   => 'alphanum|max(15)',
//        'GroupId'       => 'req|int'
//    ];

    public function defaultAction()
    {
        $this->language->load('template.common');
        $this->language->load('countrys.default');
        $this->language->load('countrys.messages');
        $this->language->load('validation.errors');

        $this->_data['country'] = CountryModel::getAll();

        $this->_view();
    }

    public function createAction()
    {

        $this->language->load('template.common');
        $this->language->load('countrys.create');
        $this->language->load('countrys.labels');
        $this->language->load('countrys.messages');
        $this->language->load('validation.errors');

        $this->_data['country'] = CountryModel::getAll();


        if(isset($_POST['submit']) && $this->isValid($this->_createActionRoles, $_POST)) {

            $Country = new CountryModel();
            $Country->CountryName = $this->filterString($_POST['CountryName']);
            $Country->Nots = $this->filterString($_POST['Nots']);

           if(CountryModel::CountryExists($Country->CountryName)) {
               $this->messenger->add($this->language->get('message_Country_exists'), Messenger::APP_MESSAGE_ERROR);
               $this->redirect('/countrys/create');
           }


            // TODO:: SEND THE USER WELCOME EMAIL
            if($Country->save()) {

                $this->messenger->add($this->language->get('message_create_success'));
            } else {
                $this->messenger->add($this->language->get('message_create_failed'), Messenger::APP_MESSAGE_ERROR);
            }
            $this->redirect('/countrys');
        }

        $this->_view();
    }




    public function editAction()
    {
        $id = $this->filterInt($this->_params[0]);
        $country = CountryModel::getByPK($id);
        if($country === false || $this->session->u->UserId == $id ) {
            $this->redirect('/countrys');
        }
        $this->_data['country'] = $country;
        $this->language->load('template.common');
        $this->language->load('countrys.edit');
        $this->language->load('countrys.labels');
        $this->language->load('countrys.messages');
        $this->language->load('validation.errors');
        if(isset($_POST['submit']) && $this->isValid($this->_editActionRoles, $_POST)) {
      $country->CountryName = $this->filterString($_POST['CountryName']);
      $country->Nots = $this->filterString($_POST['Nots']);
            if($country->save()) {
                $this->messenger->add($this->language->get('message_create_success'));
            } else {
                $this->messenger->add($this->language->get('message_create_failed'), Messenger::APP_MESSAGE_ERROR);
            }
            $this->redirect('/countrys');
        }

        $this->_view();
    }


        public function deleteAction()
    {

        $id = $this->filterInt($this->_params[0]);
        $country = CountryModel::getByPK($id);

        if($country === false || $this->session->u->UserId == $id ) {
            $this->redirect('/countrys');
        }
               $this->language->load('countrys.messages');

        if($country->delete()) {
                  $this->messenger->add($this->language->get('message_delete_success'));
            }  else {
            $this->messenger->add($this->language->get('message_delete_failed'), Messenger::APP_MESSAGE_ERROR);
        }
        $this->redirect('/countrys');
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