<?php
namespace PHPMVC\Models;

class GovernorateModel extends AbstractModel
{

    public $GovernorateId;
    public $GovernorateName;
    public $GovernorateNameEng;
    public $CountryId ;
    public $Nots;


    protected static $tableName = 'app_country_governorate';

    protected static $tableSchema = array(
         'GovernorateName'    => self::DATA_TYPE_STR,
        'GovernorateNameEng'    => self::DATA_TYPE_STR,
        'CountryId'    => self::DATA_TYPE_INT,
        'Nots'           => self::DATA_TYPE_STR,
    );

    protected static $primaryKey = 'GovernorateId';




    public static function CountryExists($GovernorateName)
    {
        return self::get('
            SELECT * FROM ' . self::$tableName . ' WHERE GovernorateName = "' . $GovernorateName . '"');
    }



}