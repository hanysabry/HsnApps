<?php
namespace PHPMVC\Models;

class AccounttypefinalModel extends AbstractModel
{
    public $AccountTypefinalId;
    public $AccountTypefinalName;
    public $AccountTypefinalNameEng;
    public $Nots;


    protected static $tableName = 'app_account_type_final';

    protected static $tableSchema = array(
        'AccountTypefinalName'    => self::DATA_TYPE_STR,
        'AccountTypefinalNameEng' => self::DATA_TYPE_STR,
        'Nots'               => self::DATA_TYPE_STR
    );

    protected static $primaryKey = 'AccountTypefinalId';


    public static function CountryExists($AccountTypefinalName)
    {
        return self::get('
            SELECT * FROM ' . self::$tableName . ' WHERE AccountTypefinalName = "' . $AccountTypefinalName . '"');
    }



}