<?php
namespace PHPMVC\Controllers;

use PHPMVC\LIB\Helper;
use PHPMVC\LIB\InputFilter;
use PHPMVC\lib\Messenger;
use PHPMVC\Models\ClientgroupsModel;
use PHPMVC\Models\ClientModel;

class ClientgroupsController extends AbstractController
{

    use InputFilter;
    use Helper;

    private $_createActionRoles =
    [
        'GroupIdaccount'    => 'req|num',
        'GroupNameaccount'  => 'req|alphanum',
        'GroupName'         => 'req|alphanum',
        'Nots'              => 'alphanum|max(75)',

    ];

    public function defaultAction()
    {
        $this->language->load('template.common');
        $this->language->load('clientgroups.default');

        $this->_data['clientgroups'] =ClientgroupsModel::getAll();

        $this->_view();
    }

    public function createAction()
    {

        $this->language->load('template.common');
        $this->language->load('clientgroups.create');
        $this->language->load('clientgroups.labels');
        $this->language->load('clientgroups.messages');
        $this->language->load('validation.errors');

        if(isset($_POST['submit']) && $this->isValid($this->_createActionRoles, $_POST)) {

            $clientgroups = new ClientgroupsModel();
            $clientgroups->GroupName = $this->filterString($_POST['GroupName']);
            $clientgroups->GroupIdaccount = $this->filterInt($_POST['GroupIdaccount']);
            $clientgroups->GroupNameaccount = $this->filterString($_POST['GroupNameaccount']);
            $clientgroups->Nots = $this->filterString($_POST['Nots']);
//var_dump($clientgroups) ;
//exit();
            if($clientgroups->save()) {
                $this->messenger->add($this->language->get('message_create_success'));
            } else {
                $this->messenger->add($this->language->get('message_create_failed'), Messenger::APP_MESSAGE_ERROR);
            }
            $this->redirect('/clientgroups');
        }

        $this->_view();
    }

    public function editAction()
    {

        $id = $this->filterInt($this->_params[0]);
        $clientgroups = ClientgroupsModel::getByPK($id);

        if($clientgroups === false) {
            $this->redirect('/clientgroups');
        }

        $this->_data['clientgroups'] = $clientgroups;

        $this->language->load('template.common');
        $this->language->load('clientgroups.edit');
        $this->language->load('clientgroups.labels');
        $this->language->load('clientgroups.messages');
        $this->language->load('validation.errors');

        if(isset($_POST['submit']) && $this->isValid($this->_createActionRoles, $_POST)) {


            $clientgroups->GroupName = $this->filterString($_POST['GroupName']);
            $clientgroups->GroupIdaccount = $this->filterInt($_POST['GroupIdaccount']);
            $clientgroups->GroupNameaccount = $this->filterString($_POST['GroupNameaccount']);
            $clientgroups->Nots = $this->filterString($_POST['Nots']);

            if($clientgroups->save()) {
                $this->messenger->add($this->language->get('message_create_success'));
            } else {
                $this->messenger->add($this->language->get('message_create_failed'), Messenger::APP_MESSAGE_ERROR);
            }
            $this->redirect('/clientgroups');
        }

        $this->_view();
    }

    public function deleteAction()
    {

        $id = $this->filterInt($this->_params[0]);
        $client = ClientModel::getByPK($id);

        if($client === false) {
            $this->redirect('/clientgroups');
        }

        $this->language->load('clientgroups.messages');

        if($client->delete()) {
            $this->messenger->add($this->language->get('message_delete_success'));
        } else {
            $this->messenger->add($this->language->get('message_delete_failed'), Messenger::APP_MESSAGE_ERROR);
        }
        $this->redirect('/clientgroups');
    }
}