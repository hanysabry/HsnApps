<?php
namespace PHPMVC\Controllers;
use PHPMVC\lib\FileUpload;
use PHPMVC\LIB\Helper;
use PHPMVC\LIB\InputFilter;
use PHPMVC\lib\Messenger;
use PHPMVC\Lib\Validate;
use PHPMVC\Models\PrivilegeModel;
use PHPMVC\Models\ProductCategoryModel;
use PHPMVC\Models\StorecategoriesModel;
use PHPMVC\Models\UserGroupModel;
use PHPMVC\Models\UserGroupPrivilegeModel;

class StorecategoriesController extends AbstractController
{

    use InputFilter;
    use Helper;
    use Validate;

    private $_createActionRoles =
    [
        'StorecategoryName'          => 'req|alphanum|between(3,30)',
        'StorecategoryNameEng'          => 'alphanum',
        'City'          => 'num',
        'StorecategoryManager'          => 'num',
        'PhoneNumber'          => 'alphanum ',
        'Email'          => 'alphanum',
        'Nots'          => 'alphanum',
        'MainaccountId'          => 'num'

    ];


    public function defaultAction()
    {
        $this->language->load('template.common');
        $this->language->load('storecategories.default');

        $this->_data['storecategories'] = StorecategoriesModel::getAll();

        $this->_view();
    }

    public function createAction()
    {
        $this->language->load('template.common');
        $this->language->load('storecategories.create');
        $this->language->load('storecategories.labels');
        $this->language->load('storecategories.messages');
        $this->language->load('validation.errors');

        $uploadError = false;

        // TODO:: explain a better solution to check against file type
        // TODO:: explain a better soution to secure the upload folder
        if(isset($_POST['submit']) && $this->isValid($this->_createActionRoles, $_POST)) {
            $category = new ProductCategoryModel();
            $category->Name = $this->filterString($_POST['Name']);
            if(!empty($_FILES['image']['name'])) {
                $uploader = new FileUpload($_FILES['image']);
                try {
                    $uploader->upload();
                    $category->Image = $uploader->getFileName();
                } catch (\Exception $e) {
                    $this->messenger->add($e->getMessage(), Messenger::APP_MESSAGE_ERROR);
                    $uploadError = true;
                }
            }
            if($uploadError === false && $category->save())
            {
                $this->messenger->add($this->language->get('message_create_success'));
                $this->redirect('/productcategories');
            } else {
                $this->messenger->add($this->language->get('message_create_failed'), Messenger::APP_MESSAGE_ERROR);
            }
        }

        $this->_view();
    }

    public function editAction()
    {

        $id = $this->filterInt($this->_params[0]);
        $category = ProductCategoryModel::getByPK($id);

        if($category === false) {
            $this->redirect('/productcategories');
        }

        $this->language->load('template.common');
        $this->language->load('productcategories.edit');
        $this->language->load('productcategories.labels');
        $this->language->load('productcategories.messages');
        $this->language->load('validation.errors');


        $this->_data['category'] = $category;
        $uploadError = false;

        if(isset($_POST['submit'])) {
            $category->Name = $this->filterString($_POST['Name']);
            if(!empty($_FILES['image']['name'])) {
                // Remove the old image
                if($category->Image !== '' && file_exists(IMAGES_UPLOAD_STORAGE.DS.$category->Image) && is_writable(IMAGES_UPLOAD_STORAGE)) {
                    unlink(IMAGES_UPLOAD_STORAGE.DS.$category->Image);
                }
                // Create a new image
                $uploader = new FileUpload($_FILES['image']);
                try {
                    $uploader->upload();
                    $category->Image = $uploader->getFileName();
                } catch (\Exception $e) {
                    $this->messenger->add($e->getMessage(), Messenger::APP_MESSAGE_ERROR);
                    $uploadError = true;
                }
            }
            if($uploadError === false && $category->save())
            {
                $this->messenger->add($this->language->get('message_create_success'));
                $this->redirect('/productcategories');
            } else {
                $this->messenger->add($this->language->get('message_create_failed'), Messenger::APP_MESSAGE_ERROR);
            }
        }

        $this->_view();
    }

    public function deleteAction()
    {

        $id = $this->filterInt($this->_params[0]);
        $category = ProductCategoryModel::getByPK($id);

        if($category === false) {
            $this->redirect('/productcategories');
        }

        $this->language->load('productcategories.messages');

        if($category->delete())
        {
            // Remove the old image
            if($category->Image !== '' && file_exists(IMAGES_UPLOAD_STORAGE.DS.$category->Image)) {
                unlink(IMAGES_UPLOAD_STORAGE.DS.$category->Image);
            }
            $this->messenger->add($this->language->get('message_delete_success'));
        } else {
            $this->messenger->add($this->language->get('message_delete_failed'));
        }
        $this->redirect('/productcategories');
    }
}