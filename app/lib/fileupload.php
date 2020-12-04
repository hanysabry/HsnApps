<?php

namespace PHPMVC\lib;


class FileUpload
{
    private $name;
    private $type;
    private $size;
    private $error;
    private $tmpPath;

    private $fileExtension;

    private $allowedExtensions = [
        'jpg', 'png', 'gif', 'pdf', 'doc', 'docx', 'xls'
    ];

    public function __construct(array $file)
    {
        $this->name = $file['name'];
        $this->type = $file['type'];
        $this->size = $file['size'];
        $this->error = $file['error'];
        $this->tmpPath = $file['tmp_name'];
        $this->name();
    }

    private function name()
    {
        preg_match_all('/([a-z]{1,4})$/i', $this->name, $m);
        $this->fileExtension = $m[0][0];
        $name = substr(strtolower(base64_encode($this->name . APP_SALT)), 0, 30);
        $name = preg_replace('/(\w{6})/i', '$1_', $name);
        $name = rtrim($name, '_');
        $this->name = $name;
        return $name;
    }

    public function upload()
    {


        if ($this->error != 0) {
            trigger_error(phpFileUploadErrors());
            throw new \Exception('Sorry file didn\'t upload successfully');
        } elseif (!$this->isAllowedType()) {
            throw new \Exception('Sorry files of type ' . $this->fileExtension . ' are not allowed');
        } elseif ($this->isSizeNotAcceptable()) {
            throw new \Exception('Sorry the file size exceeds the maximum allowed size');
        } else {

            $storageFolder = $this->isImage() ? IMAGES_UPLOAD_STORAGE : DOCUMENTS_UPLOAD_STORAGE;

            if (is_writable($storageFolder)) {

                move_uploaded_file($this->tmpPath, $storageFolder . DS . $this->getFileName());
            } else {
                throw new \Exception('Sorry the destination folder is not writable');
            }
        }

        return $this;
    }

//
//$phpFileUploadErrors = array(
//0 => 'There is no error, the file uploaded with success',
//1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
//2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
//3 => 'The uploaded file was only partially uploaded',
//4 => 'No file was uploaded',
//6 => 'Missing a temporary folder',
//7 => 'Failed to write file to disk.',
//8 => 'A PHP extension stopped the file upload.',
//);

    private function isAllowedType()
    {
        return in_array($this->fileExtension, $this->allowedExtensions);
    }

    private function isSizeNotAcceptable()
    {
        preg_match_all('/(\d+)([MG])$/i', MAX_FILE_SIZE_ALLOWED, $matches);
        $maxFileSizeToUpload = $matches[1][0];
        $sizeUnit = $matches[2][0];
        $currentFileSize = ($sizeUnit == 'M') ? ($this->size / 1024 / 1024) : ($this->size / 1024 / 1024 / 1024);
        $currentFileSize = ceil($currentFileSize);
        return (int)$currentFileSize > (int)$maxFileSizeToUpload;
    }

    private function isImage()
    {
        return preg_match('/image/i', $this->type);
    }

    public function getFileName()
    {
        return $this->name . '.' . $this->fileExtension;
    }

}