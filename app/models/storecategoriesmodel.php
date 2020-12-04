<?php
namespace PHPMVC\Models;

class StorecategoriesModel extends AbstractModel
{

    public $StorecategoryId;
    public $StorecategoryName;
    public $StorecategoryNameEng ;
    public $City;
    public $StorecategoryManager;
    public $PhoneNumber;
    public $Email;
    public $Nots;
    public $MainaccountId;


    protected static $tableName = 'app_store_categories';

    protected static $tableSchema = array(
        'StorecategoryName'             => self::DATA_TYPE_STR,
        'StorecategoryNameEng'          => self::DATA_TYPE_STR,
        'City'                          => self::DATA_TYPE_INT,
        'StorecategoryManager'            => self::DATA_TYPE_INT,
        'PhoneNumber'             => self::DATA_TYPE_STR,
        'Email'             => self::DATA_TYPE_STR,
        'Nots'             => self::DATA_TYPE_STR,
        'MainaccountId'             => self::DATA_TYPE_INT,


    );

    protected static $primaryKey = 'StorecategoryId';
}