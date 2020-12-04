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

class CityController extends AbstractController
{

    use InputFilter;
    use Helper;

    private $_createActionRoles =
    [

        'CityName'    => 'alpha',
        'CountryId'   => 'num',
        'Nots'        => 'alpha',
    ];

    private $_editActionRoles =
    [

    ];

    public function defaultAction()
    {
        $this->language->load('template.common');
        $this->language->load('city.default');
        $this->_data['city'] = CityModel::getAll();
        $city = new CityModel();
        $id = $city->CountryId ;
        $this->_data['Country'] = CountryModel::getAll();
        $this->_data['governorate'] =GovernorateModel::getAll();

        $this->_view();




    }


    public function createAction()
    {

        $this->language->load('template.common');
        $this->language->load('city.create');
        $this->language->load('city.labels');
        $this->language->load('city.messages');
        $this->language->load('validation.errors');
        $this->_data['country'] = CountryModel::getAll();
        $this->_data['governorate'] =GovernorateModel::getAll();
        $this->_data['city'] =CityModel::getAll();

              if(isset($_POST['submit']) && $this->isValid($this->_createActionRoles, $_POST)) {
            $city = new CityModel();
            $city->CityName = $this->filterString($_POST['CityName']);
            $city->CityNameEng = $this->filterString($_POST['CityNameEng']);
            $city->CountryId = $this->filterInt($_POST['CountryId']);
            $city->GovernorateId = $this->filterString($_POST['GovernorateId']);
            $city->Nots = $this->filterString($_POST['Nots']);

           if(CityModel::cityExists($city->CityName)) {
               $this->messenger->add($this->language->get('message_city_exists'), Messenger::APP_MESSAGE_ERROR);
               $this->redirect('/city/create');
           }

            // TODO:: SEND THE USER WELCOME EMAIL
            if($city->save()) {
                $this->messenger->add($this->language->get('message_create_success'));
            } else {
                $this->messenger->add($this->language->get('message_create_failed'), Messenger::APP_MESSAGE_ERROR);
            }
            $this->redirect('/city');
        }

        $this->_view();
    }

    public function editAction()
    {

        $id = $this->filterInt($this->_params[0]);
        $city = CityModel::getByPK($id);

        if($city === false || $this->session->u->UserId == $id  ) {
            $this->redirect('/city');
        }

        $this->language->load('template.common');
        $this->language->load('city.edit');
        $this->language->load('city.labels');
        $this->language->load('city.messages');
        $this->language->load('validation.errors');


        $this->_data['country'] = CountryModel::getAll();
        $this->_data['city'] = $city;
        $this->_data['governorate'] =GovernorateModel::getAll();

        if(isset($_POST['submit']) && $this->isValid($this->_editActionRoles, $_POST)) {

            $city->CityName = $this->filterString($_POST['CityName']);
            $city->CityNameEng = $this->filterString($_POST['CityNameEng']);
            $city->CountryId = $this->filterInt($_POST['CountryId']);
            $city->GovernorateId = $this->filterString($_POST['GovernorateId']);
            $city->Nots = $this->filterString($_POST['Nots']);

            if($city->save()) {


                $this->messenger->add($this->language->get('message_create_success'));
            } else {
                $this->messenger->add($this->language->get('message_create_failed'), Messenger::APP_MESSAGE_ERROR);
            }
            $this->redirect('/city');
        }



        $this->_view();
    }


        public function deleteAction()
    {

        $id = $this->filterInt($this->_params[0]);
        $city = CityModel::getByPK($id);



        if($city === false || $this->session->u->UserId == $id  ) {
            $this->redirect('/city');
        }


        $this->language->load('city.messages');

        if($city->delete()) {
                  $this->messenger->add($this->language->get('message_delete_success'));
            }  else {
            $this->messenger->add($this->language->get('message_delete_failed'), Messenger::APP_MESSAGE_ERROR);
        }
        $this->redirect('/city');
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