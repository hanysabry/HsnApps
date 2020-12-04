<?php
namespace PHPMVC\Controllers;

use PHPMVC\LIB\Helper;
use PHPMVC\LIB\InputFilter;
use PHPMVC\lib\Messenger;
use PHPMVC\Models\AccountCategory;
use PHPMVC\Models\AccountCategoryModel;
use PHPMVC\Models\AccountCategorys;
use PHPMVC\Models\AccountCategorysModel;
use PHPMVC\Models\AccountMainModel;
use PHPMVC\Models\AccounttypefinalModel;
use PHPMVC\Models\AccounttypeModel;
use PHPMVC\Models\UserModel;

class AccountMainController extends AbstractController
{
    use InputFilter;
    use Helper;

    private $_createActionRoles =
    [
        'MainaccountName'   => 'req|alpha|between(3,40)',
        ];
    private $_editActionRoles =
    [
        'MainaccountName'   => 'alpha'
    ];

    public function defaultAction()
    {
        $this->language->load('template.common');
        $this->language->load('accountmain.default');
        $this->language->load('accountmain.labels');
        $this->language->load('accountmain.messages');
        $this->language->load('validation.errors');
        $this->_data['accountmain'] = AccountMainModel::getAll();
        $this->_data['accounttype'] = AccounttypefinalModel::getAll();

        $this->_view();
    }

    public function createAction()
    {
        $this->language->load('template.common');
        $this->language->load('accountmain.labels');
        $this->language->load('accountmain.create');
        $this->language->load('validation.errors');
        $this->language->load('accountmain.messages');

//        $this->_data['accountmaincreaent'] = AccountMainModel::getAutoIcrement();
        $this->_data['Accounttypefinal'] = AccounttypefinalModel::getAll();

        if(isset($_POST['submit']) && $this->isValid($this->_createActionRoles,$_POST)) {
            $Accountcategory = new AccountMainModel();
            $Accountcategory->MainaccountName     = $this->filterString($_POST['MainaccountName']) ;
            $Accountcategory->MainaccountNameEng  = $this->filterString($_POST['MainaccountNameEng']) ;
            $Accountcategory->AccountRegisterDate = $this->filterDate($_POST['AccountRegisterDate']);
            $Accountcategory->Nots = $this->filterString($_POST['Nots']);
            $Accountcategory->CreatedBy = $this->filterInt($_POST['CreatedBy']);
            $Accountcategory->CurrencyId = $this->filterInt($_POST['CurrencyId']);
            $Accountcategory->AccountTypefinalId = $this->filterInt($_POST['AccountTypefinalId']);
            $Accountcategory->AccountStatus = $this->filterInt($_POST['AccountStatus']);
            $Accountcategory->Accountdept = $this->filterInt($_POST['Accountdept']);
            $Accountcategory->AccountCredit = $this->filterInt($_POST['AccountCredit']);
            $Accountcategory->Account1ModaResed = $this->filterInt($_POST['Account1ModaResed']);
            $Accountcategory->AccountMonthResed = $this->filterInt($_POST['AccountMonthResed']);
            $Accountcategory->AccountYearResed = $this->filterInt($_POST['AccountYearResed']);
            $Accountcategory->AccountUpLim1Resed = $this->filterInt($_POST['AccountUpLim1Resed']);
            $Accountcategory->AccountUpLim2Resed = $this->filterInt($_POST['AccountUpLim2Resed']);
            $Accountcategory->AccountUpLim3Resed = $this->filterInt($_POST['AccountUpLim3Resed']);


            // TODO:: SEND THE USER WELCOME EMAIL
            if($Accountcategory->save()) {
                $this->messenger->add($this->language->get('message_create_success'));
            } else {
                $this->messenger->add($this->language->get('message_create_failed'), Messenger::APP_MESSAGE_ERROR);
            }
            $this->redirect('/accountmain');
        }
        $this->_view();
    }


    public function editAction()
    {
        $id = $this->filterInt($this->_params[0]);
        $AccountCategory = AccountMainModel::getByPK($id);
        if($AccountCategory === false || $this->session->u->UserId == $id) {
            $this->redirect('/accountmain');
        }
        $this->language->load('template.common');
        $this->language->load('accountmain.edit');
        $this->language->load('accountmain.labels');
        $this->language->load('accountmain.messages');
        $this->language->load('validation.errors');

        $this->_data['accountmain'] = $AccountCategory;
        $this->_data['accounttype'] = AccounttypefinalModel::getAll();

        if(isset($_POST['submit']) && $this->isValid($this->_editActionRoles, $_POST)) {

            $AccountCategory->MainaccountName     = $this->filterString($_POST['MainaccountName']) ;
            $AccountCategory->MainaccountNameEng  = $this->filterString($_POST['MainaccountNameEng']) ;
            $AccountCategory->AccountRegisterDate = $this->filterDate($_POST['AccountRegisterDate']);
            $AccountCategory->AccountTypefinalId = $this->filterInt($_POST['AccountTypefinalId']);
            $AccountCategory->Nots = $this->filterString($_POST['Nots']);
            $AccountCategory->CreatedBy = $this->filterInt($_POST['CreatedBy']);
            $AccountCategory->CurrencyId = $this->filterInt($_POST['CurrencyId']);
            $AccountCategory->AccountStatus = $this->filterInt($_POST['AccountStatus']);
//            $AccountCategory->Accountdept = $this->filterInt($_POST['Accountdept']);
//            $AccountCategory->AccountCredit = $this->filterInt($_POST['AccountCredit']);
            $AccountCategory->Account1ModaResed = $this->filterInt($_POST['Account1ModaResed']);
            $AccountCategory->AccountMonthResed = $this->filterInt($_POST['AccountMonthResed']);
            $AccountCategory->AccountYearResed = $this->filterInt($_POST['AccountYearResed']);
            $AccountCategory->AccountUpLim1Resed = $this->filterInt($_POST['AccountUpLim1Resed']);
            $AccountCategory->AccountUpLim2Resed = $this->filterInt($_POST['AccountUpLim2Resed']);
            $AccountCategory->AccountUpLim3Resed = $this->filterInt($_POST['AccountUpLim3Resed']);

            if($AccountCategory->save()) {
                $this->messenger->add($this->language->get('message_create_success'));
            } else {
                $this->messenger->add($this->language->get('message_create_failed'), Messenger::APP_MESSAGE_ERROR);
            }
            $this->redirect('/accountmain');
        }
        $this->_view();
    }


        public function deleteAction()
    {
        $id = $this->filterInt($this->_params[0]);
        $Accountcategory = AccountMainModel::getByPK($id);
        if($Accountcategory === false || $this->session->u->UserId == $id ) {
            $this->redirect('/accountmain');
        }
               $this->language->load('accountmain.messages');

        if($Accountcategory->delete()) {
                  $this->messenger->add($this->language->get('message_delete_success'));
            }  else {
            $this->messenger->add($this->language->get('message_delete_failed'), Messenger::APP_MESSAGE_ERROR);
        }
        $this->redirect('/accountmain');
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