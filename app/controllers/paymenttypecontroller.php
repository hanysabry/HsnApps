<?php
namespace PHPMVC\Controllers;

use PHPMVC\LIB\Helper;
use PHPMVC\LIB\InputFilter;
use PHPMVC\lib\Messenger;
use PHPMVC\Models\ClientModel;
use PHPMVC\Models\PaymenttypeModel;

class PaymenttypeController extends AbstractController
{

    use InputFilter;
    use Helper;

    private $_createActionRoles =
    [
        'Name'         => 'req|alpha',
        'Nots'                => 'alphanum|max(45)',

    ];

    public function defaultAction()
    {
        $this->language->load('template.common');
        $this->language->load('paymenttype.default');

        $this->_data['paymenttype'] =PaymenttypeModel::getAll();

        $this->_view();
    }

    public function createAction()
    {

        $this->language->load('template.common');
        $this->language->load('paymenttype.create');
        $this->language->load('paymenttype.labels');
        $this->language->load('paymenttype.messages');
        $this->language->load('validation.errors');


        if(isset($_POST['submit']) && $this->isValid($this->_createActionRoles, $_POST)) {

            $paymenttype = new PaymenttypeModel();

            $paymenttype->Name = $this->filterString($_POST['Name']);
            $paymenttype->Nots = $this->filterString($_POST['Nots']);

            if($paymenttype->save()) {
                $this->messenger->add($this->language->get('message_create_success'));
            } else {
                $this->messenger->add($this->language->get('message_create_failed'), Messenger::APP_MESSAGE_ERROR);
            }
            $this->redirect('/paymenttype');
        }

        $this->_view();
    }

    public function editAction()
    {
         $id = $this->filterInt($this->_params[0]);
        $paymenttype = PaymenttypeModel::getByPK($id);

        if($paymenttype === false) {
            $this->redirect('/paymenttype');
        }

        $this->_data['paymenttype'] = $paymenttype;

        $this->language->load('template.common');
        $this->language->load('paymenttype.edit');
        $this->language->load('paymenttype.labels');
        $this->language->load('paymenttype.messages');
        $this->language->load('validation.errors');

        if(isset($_POST['submit']) && $this->isValid($this->_createActionRoles, $_POST)) {
            $paymenttype->Name = $this->filterString($_POST['Name']);
            $paymenttype->Nots = $this->filterString($_POST['Nots']);

            if($paymenttype->save()) {
                $this->messenger->add($this->language->get('message_create_success'));
            } else {
                $this->messenger->add($this->language->get('message_create_failed'), Messenger::APP_MESSAGE_ERROR);
            }
            $this->redirect('/paymenttype');
        }

        $this->_view();
    }

    public function deleteAction()
    {
        $id = $this->filterInt($this->_params[0]);
        $paymenttype = PaymenttypeModel::getByPK($id);

        if($paymenttype === false) {
            $this->redirect('/paymenttype');
        }

        $this->language->load('paymenttype.messages');

        if($paymenttype->delete()) {
            $this->messenger->add($this->language->get('message_delete_success'));
        } else {
            $this->messenger->add($this->language->get('message_delete_failed'), Messenger::APP_MESSAGE_ERROR);
        }
        $this->redirect('/paymenttype');
    }
}