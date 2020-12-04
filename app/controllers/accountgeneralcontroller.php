<?php
namespace PHPMVC\Controllers;

use PHPMVC\Lib\Database\DatabaseHandler;
use PHPMVC\LIB\Helper;
use PHPMVC\LIB\InputFilter;
use PHPMVC\lib\Messenger;
use PHPMVC\Models\AccountantModel;
use PHPMVC\Models\AccountGeneralModel;
use PHPMVC\Models\AccountListModel;
use PHPMVC\Models\AccountMainModel;
use PHPMVC\Models\AccounttypefinalModel;



class AccountGeneralController extends AbstractController
{

    use InputFilter;
    use Helper;

    private $_createActionRoles =
    [
        'GeneralaccountName'      => 'req|alphanum|between(3,40)',
        'GeneralaccountNameEng'      => 'req|alphanum|between(3,40)',
    ];

    public function defaultAction()
    {
        $this->language->load('template.common');
        $this->language->load('accountgeneral.default');
        $this->language->load('accountgeneral.labels');
        $this->language->load('accountgeneral.messages');
        $this->language->load('validation.errors');

        $this->_data['Accountmain'] = AccountMainModel::getAll();
        $this->_data['accountgeneral'] = AccountGeneralModel::getAll();
        $this->_data['accounttype'] = AccounttypefinalModel::getAll();



        $this->_view();
    }

    public function createAction()
    {
        $this->language->load('template.common');
        $this->language->load('accountgeneral.create');
        $this->language->load('accountgeneral.labels');
        $this->language->load('accountgeneral.messages');
        $this->language->load('validation.errors');

        $this->_data['Accounttype'] = AccounttypefinalModel::getAll();
        $this->_data['Accountmain'] = AccountMainModel::getAll();


        if(isset($_POST['submit']) && $this->isValid($this->_createActionRoles,$_POST)) {
            $AccountGeneral = new AccountGeneralModel();
            $AccountGeneral->GeneralaccountName = $this->filterString($_POST['GeneralaccountName']);
            $AccountGeneral->GeneralaccountNameEng = $this->filterString($_POST['GeneralaccountNameEng']);
            $AccountGeneral->MainaccountId = $this->filterInt($_POST['MainaccountId']);
            $AccountGeneral->AccountRegisterDate = $this->filterDate($_POST['AccountRegisterDate']);
            $AccountGeneral->Nots = $this->filterString($_POST['Nots']);
            $AccountGeneral->CreatedBy = $this->filterInt($_POST['CreatedBy']);
            $AccountGeneral->CurrencyId = $this->filterInt($_POST['CurrencyId']);
            $AccountGeneral->AccountTypefinalId = $this->filterInt($_POST['AccountTypefinalId']);
            $AccountGeneral->AccountStatus = $this->filterInt($_POST['AccountStatus']);
            $AccountGeneral->Accountdept = $this->filterInt($_POST['Accountdept']);
            $AccountGeneral->AccountCredit = $this->filterInt($_POST['AccountCredit']);
            $AccountGeneral->Account1ModaResed = $this->filterInt($_POST['Account1ModaResed']);
            $AccountGeneral->AccountMonthResed = $this->filterInt($_POST['AccountMonthResed']);
            $AccountGeneral->AccountYearResed = $this->filterInt($_POST['AccountYearResed']);
            $AccountGeneral->AccountUpLim1Resed = $this->filterInt($_POST['AccountUpLim1Resed']);
            $AccountGeneral->AccountUpLim2Resed = $this->filterInt($_POST['AccountUpLim2Resed']);
            $AccountGeneral->AccountUpLim3Resed = $this->filterInt($_POST['AccountUpLim3Resed']);


            if($AccountGeneral->save()) {
                $this->messenger->add($this->language->get('message_create_success'));
            } else {
                $this->messenger->add($this->language->get('message_create_failed'), Messenger::APP_MESSAGE_ERROR);
            }
            $this->redirect('/accountgeneral');
        }

        $this->_view();
    }

    public function editAction()
    {
        $id = $this->filterInt($this->_params[0]);
        $AccountGeneral = AccountGeneralModel::getByPK($id);

        if($AccountGeneral === false) {
            $this->redirect('/accountgeneral');
        }
        $this->_data['accountgeneral'] = $AccountGeneral;

        $this->language->load('template.common');
        $this->language->load('accountgeneral.edit');
        $this->language->load('accountgeneral.labels');
        $this->language->load('accountgeneral.messages');
        $this->language->load('validation.errors');


        $this->_data['Accounttype'] = AccounttypefinalModel::getAll();
        $this->_data['Accountmain'] = AccountMainModel::getAll();

        if(isset($_POST['submit']) && $this->isValid($this->_createActionRoles, $_POST)) {
            $AccountGeneral->GeneralaccountName = $this->filterString($_POST['GeneralaccountName']);
            $AccountGeneral->GeneralaccountNameEng = $this->filterString($_POST['GeneralaccountNameEng']);
            $AccountGeneral->MainaccountId = $this->filterInt($_POST['MainaccountId']);
            $AccountGeneral->AccountRegisterDate = $this->filterDate($_POST['AccountRegisterDate']);
            $AccountGeneral->Nots = $this->filterString($_POST['Nots']);
            $AccountGeneral->CreatedBy = $this->filterInt($_POST['CreatedBy']);
            $AccountGeneral->CurrencyId = $this->filterInt($_POST['CurrencyId']);
            $AccountGeneral->AccountTypefinalId = $this->filterInt($_POST['AccountTypefinalId']);
            $AccountGeneral->AccountStatus = $this->filterInt($_POST['AccountStatus']);
            $AccountGeneral->Accountdept = $this->filterInt($_POST['Accountdept']);
            $AccountGeneral->AccountCredit = $this->filterInt($_POST['AccountCredit']);
            $AccountGeneral->Account1ModaResed = $this->filterInt($_POST['Account1ModaResed']);
            $AccountGeneral->AccountMonthResed = $this->filterInt($_POST['AccountMonthResed']);
            $AccountGeneral->AccountYearResed = $this->filterInt($_POST['AccountYearResed']);
            $AccountGeneral->AccountUpLim1Resed = $this->filterInt($_POST['AccountUpLim1Resed']);
            $AccountGeneral->AccountUpLim2Resed = $this->filterInt($_POST['AccountUpLim2Resed']);
            $AccountGeneral->AccountUpLim3Resed = $this->filterInt($_POST['AccountUpLim3Resed']);

            if($AccountGeneral->save()) {
                $this->messenger->add($this->language->get('message_create_success'));
            } else {
                $this->messenger->add($this->language->get('message_create_failed'), Messenger::APP_MESSAGE_ERROR);
            }
            $this->redirect('/accountgeneral');
        }

        $this->_view();
    }

    public function deleteAction()
    {

        $id = $this->filterInt($this->_params[0]);
        $accountlist = AccountGeneralModel::getByPK($id);

        if($accountlist === false) {
            $this->redirect('/accountgeneral');
        }

        $this->language->load('accountgeneral.messages');

        if($accountlist->delete()) {
            $this->messenger->add($this->language->get('message_delete_success'));
        } else {
            $this->messenger->add($this->language->get('message_delete_failed'), Messenger::APP_MESSAGE_ERROR);
        }
        $this->redirect('/accountgeneral');
    }
}