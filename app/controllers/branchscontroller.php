<?php


namespace PHPMVC\Controllers;


use MongoDB\Driver\Session;
use PHPMVC\LIB\Helper;
use PHPMVC\LIB\InputFilter;
use PHPMVC\lib\Messenger;
use PHPMVC\Models\BranchsModel;
use PHPMVC\Models\CompanyModel;
use PHPMVC\Models\UserGroupPrivilegeModel;
use PHPMVC\Models\UserModel;
use PHPMVC\Models\UsersActionModel;

class BranchsController extends AbstractController
{

    use InputFilter;
    use Helper;

    private $_createActionRoles =

        [
           'NameBranch'    => 'req||alphanum|between(3,40)',
            'CompanyId'    => 'req||int',
            'UserId'         =>'int',
            'Email1'         => 'email',
            'PhoneNumber1'   => 'alphanum|max(15)',
            'Address1'       => 'alphanum|max(50)',
            'Facebook'       => 'alphanum|max(50)',
            'Twitter'       => 'alphanum|max(50)',
            'snap'       => 'alphanum|max(50)',
            'Barcode'       => 'alphanum|max(50)',


        ];



    public function defaultAction()
    {
        $this->language->load('template.common');
        $this->language->load('branchs.default');
        $this->_data['branchs'] = BranchsModel::getAll();
    $this->_view();

    }




    public function createAction()
    {
        $this->language->load('template.common');
        $this->language->load('branchs.create');
        $this->language->load('branchs.labels');
        $this->language->load('branchs.messages');
        $this->language->load('validation.errors');
        $this->_data['branchs'] = BranchsModel::getAll();
        $this->_data['Company'] = CompanyModel::getAll();
        $this->_data['users'] = UserModel::getAll();


        if(isset($_POST['submit']) && $this->isValid($this->_createActionRoles,$_POST)) {
            $branchs = new BranchsModel();
            $branchs->NameBranch = $this->filterString($_POST['NameBranch']);
            $branchs->CompanyId = $this->filterString($_POST['CompanyId']);
            $branchs->UserId = $this->filterInt($_POST['UserId']);
            $branchs->Address1 = $this->filterString($_POST['Address1']);
            $branchs->Email1 = $this->filterString($_POST['Email1']);
            $branchs->PhoneNumber1 = $this->filterString($_POST['PhoneNumber1']);
            $branchs->Facebook = $this->filterString($_POST['Facebook']);
            $branchs->Twitter = $this->filterString($_POST['Twitter']);
            $branchs->Instgram = $this->filterString($_POST['Instgram']);
            $branchs->snap = $this->filterString($_POST['snap']);
            $branchs->Barcode = $this->filterString($_POST['Barcode']);
            $branchs->CreatedAt = $this->filterString($_POST['now()']);
        
            if( $branchs->save() ) {
                $this->messenger->add($this->language->get('message_create_success'));
            } else {
                $this->messenger->add($this->language->get('message_create_failed'), Messenger::APP_MESSAGE_ERROR);
            }
            $this->redirect('/branchs');
        }

        $this->_view();
    }

    public function editAction()
    {
        $id = $this->filterInt($this->_params[0]);
        $company = CompanyModel::getByPK($id);
        if($company === false) {
            $this->redirect('/company');
        }
        $this->_data['company'] = $company;
        $this->language->load('template.common');
        $this->language->load('company.edit');
        $this->language->load('company.labels');
        $this->language->load('company.messages');
        $this->language->load('validation.errors');
        if(isset($_POST['submit']) && $this->isValid($this->_createActionRoles,$_POST)) {
            $company->NameCompany= $this->filterString($_POST['NameCompany']);
            $company->UserId = $this->filterInt($_POST['UserId']);
            $company->Address1 = $this->filterString($_POST['Address1']);
            $company->Address2 = $this->filterString($_POST['Address2']);
            $company->Address3 = $this->filterString($_POST['Address3']);
            $company->PhoneNumber1 = $this->filterString($_POST['PhoneNumber1']);
            $company->PhoneNumber2 = $this->filterString($_POST['PhoneNumber2']);
            $company->PhoneNumber3 = $this->filterString($_POST['PhoneNumber3']);
            $company->Email1 = $this->filterString($_POST['Email1']);
            $company->Email2 = $this->filterString($_POST['Email2']);
            $company->Email3 = $this->filterString($_POST['Email3']);
            $company->SEGEL = $this->filterString($_POST['SEGEL']);
            $company->VatNo = $this->filterString($_POST['VatNo']);
            $company->Facebook = $this->filterString($_POST['Facebook']);
            $company->Twitter = $this->filterString($_POST['Twitter']);
            $company->Instgram = $this->filterString($_POST['Instgram']);
            $company->Snap = $this->filterString($_POST['Snap']);
//            $company->Barcode = $this->filterString($_POST['Barcode']);
//            $company->CreatedAt = $this->filterString($_POST['$date']);

            if($company->save()) {

                $this->messenger->add($this->language->get('message_create_success'));
            } else {
                $this->messenger->add($this->language->get('message_create_failed'), Messenger::APP_MESSAGE_ERROR);
            }
            $this->redirect('/company');
        }

        $this->_view();
    }


    public function deleteAction()
    {
        $id = $this->filterInt($this->_params[0]);
        $company = CompanyModel::getByPK($id);

        if($company === false) {
            $this->redirect('/company');
        }

        $this->language->load('company.messages');

        if($company->delete()) {
            $this->messenger->add($this->language->get('message_delete_success'));
        } else {
            $this->messenger->add($this->language->get('message_delete_failed'), Messenger::APP_MESSAGE_ERROR);
        }
        $this->redirect('/company');
    }
}