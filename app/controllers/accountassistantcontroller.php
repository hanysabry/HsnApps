<?php
namespace PHPMVC\Controllers;

use PHPMVC\Lib\Database\DatabaseHandler;
use PHPMVC\LIB\Helper;
use PHPMVC\LIB\InputFilter;
use PHPMVC\lib\Messenger;
use PHPMVC\Models\AccountantModel;
use PHPMVC\Models\AccountassistantModel;
use PHPMVC\Models\AccountGeneralModel;
use PHPMVC\Models\AccountListModel;
use PHPMVC\Models\AccountMainModel;
use PHPMVC\Models\AccounttypefinalModel;
use PHPMVC\Models\SupplierModel;

class AccountassistantController extends AbstractController
{

    use InputFilter;
    use Helper;

    private $_createActionRoles =
        [
            'AssistantaccountName' => 'alpha',
        ];

    public function defaultAction()
    {
        $this->language->load('template.common');
        $this->language->load('Accountassistant.default');
        $this->language->load('Accountassistant.labels');
        $this->language->load('Accountassistant.messages');
        $this->language->load('validation.errors');

        $this->_data['Accountmain'] = AccountMainModel::getAll();
        $this->_data['accountgeneral'] = AccountGeneralModel::getAll();
        $this->_data['accounttype'] = AccounttypefinalModel::getAll();


        $this->_data['Accountassistant'] = AccountassistantModel::getAll();
        $this->_view();
    }

    public function createAction()
    {

        $this->language->load('template.common');
        $this->language->load('Accountassistant.create');
        $this->language->load('Accountassistant.labels');
        $this->language->load('Accountassistant.messages');
        $this->language->load('validation.errors');

        $this->_data['Accountmain'] = AccountMainModel::getAll();
        $this->_data['accountgeneral'] = AccountGeneralModel::getAll();
        $this->_data['Accounttype'] = AccounttypefinalModel::getAll();


        if (isset($_POST['submit']) && $this->isValid($this->_createActionRoles, $_POST)) {
            $Accountassistant = new AccountassistantModel();
            $Accountassistant->AssistantaccountName = $this->filterString($_POST['AssistantaccountName']);
            $Accountassistant->AssistantaccountNameEng = $this->filterString($_POST['AssistantaccountNameEng']);
            $Accountassistant->MainaccountId = $this->filterInt($_POST['MainaccountId']);
            $Accountassistant->GeneralaccountId = $this->filterString($_POST['GeneralaccountId']);
            $Accountassistant->AccountTypefinalId = $this->filterInt($_POST['AccountTypefinalId']);
            $Accountassistant->AccountRegisterDate = $this->filterDate($_POST['AccountRegisterDate']);
            $Accountassistant->Nots = $this->filterString($_POST['Nots']);
            $Accountassistant->CreatedBy = $this->filterInt($_POST['CreatedBy']);
            $Accountassistant->CurrencyId = $this->filterInt($_POST['CurrencyId']);
            $Accountassistant->AccountStatus = $this->filterInt($_POST['AccountStatus']);
            $Accountassistant->Accountdept = $this->filterInt($_POST['Accountdept']);
            $Accountassistant->AccountCredit = $this->filterInt($_POST['AccountCredit']);
            $Accountassistant->Account1ModaResed = $this->filterInt($_POST['Account1ModaResed']);
            $Accountassistant->AccountMonthResed = $this->filterInt($_POST['AccountMonthResed']);
            $Accountassistant->AccountYearResed = $this->filterInt($_POST['AccountYearResed']);
            $Accountassistant->AccountUpLim1Resed = $this->filterInt($_POST['AccountUpLim1Resed']);
            $Accountassistant->AccountUpLim2Resed = $this->filterInt($_POST['AccountUpLim2Resed']);
            $Accountassistant->AccountUpLim3Resed = $this->filterInt($_POST['AccountUpLim3Resed']);

            if ($Accountassistant->save()) {
                $this->messenger->add($this->language->get('message_create_success'));
            } else {
                $this->messenger->add($this->language->get('message_create_failed'), Messenger::APP_MESSAGE_ERROR);
            }
            $this->redirect('/accountassistant');
        }

        $this->_view();
    }

    public function editAction()
    {
        $id = $this->filterInt($this->_params[0]);
        $Accountassistant = AccountassistantModel::getByPK($id);

        if ($Accountassistant === false) {
            $this->redirect('/accountassistant');
        }
        $this->_data['accountassistant'] = $Accountassistant;

        $this->language->load('template.common');
        $this->language->load('accountassistant.edit');
        $this->language->load('accountassistant.labels');
        $this->language->load('accountassistant.messages');
        $this->language->load('validation.errors');

        $this->_data['Accountmain'] = AccountMainModel::getAll();
        $this->_data['Accountgeneral'] = AccountGeneralModel::getAll();
        $this->_data['Accounttype'] = AccounttypefinalModel::getAll();

        if (isset($_POST['submit']) && $this->isValid($this->_createActionRoles, $_POST)) {
            $Accountassistant->AssistantaccountName = $this->filterString($_POST['AssistantaccountName']);
            $Accountassistant->AssistantaccountNameEng = $this->filterString($_POST['AssistantaccountNameEng']);
            $Accountassistant->MainaccountId = $this->filterInt($_POST['MainaccountId']);
            $Accountassistant->GeneralaccountId = $this->filterString($_POST['GeneralaccountId']);
            $Accountassistant->AccountTypefinalId = $this->filterInt($_POST['AccountTypefinalId']);
            $Accountassistant->AccountRegisterDate = $this->filterString($_POST['AccountRegisterDate']);
            $Accountassistant->Nots = $this->filterString($_POST['Nots']);
            $Accountassistant->CreatedBy = $this->filterInt($_POST['CreatedBy']);
            $Accountassistant->CurrencyId = $this->filterInt($_POST['CurrencyId']);
            $Accountassistant->AccountStatus = $this->filterInt($_POST['AccountStatus']);
            $Accountassistant->Accountdept = $this->filterInt($_POST['Accountdept']);
            $Accountassistant->AccountCredit = $this->filterInt($_POST['AccountCredit']);
            $Accountassistant->Account1ModaResed = $this->filterInt($_POST['Account1ModaResed']);
            $Accountassistant->AccountMonthResed = $this->filterInt($_POST['AccountMonthResed']);
            $Accountassistant->AccountYearResed = $this->filterInt($_POST['AccountYearResed']);
            $Accountassistant->AccountUpLim1Resed = $this->filterInt($_POST['AccountUpLim1Resed']);
            $Accountassistant->AccountUpLim2Resed = $this->filterInt($_POST['AccountUpLim2Resed']);
            $Accountassistant->AccountUpLim3Resed = $this->filterInt($_POST['AccountUpLim3Resed']);

            if ($Accountassistant->save()) {
                $this->messenger->add($this->language->get('message_create_success'));
            } else {
                $this->messenger->add($this->language->get('message_create_failed'), Messenger::APP_MESSAGE_ERROR);
            }
            $this->redirect('/accountassistant');
        }

        $this->_view();
    }

    public function deleteAction()
    {
        $id = $this->filterInt($this->_params[0]);
        $Accountassistant = AccountassistantModel::getByPK($id);

        if ($Accountassistant === false) {
            $this->redirect('/accountassistant');
        }
        $this->_data['accountassistant'] = $Accountassistant;

            $this->language->load('Accountassistant.messages');

            if ($Accountassistant->delete()) {
                $this->messenger->add($this->language->get('message_delete_success'));
            } else {
                $this->messenger->add($this->language->get('message_delete_failed'), Messenger::APP_MESSAGE_ERROR);
            }
            $this->redirect('/accountassistant');
        }


}