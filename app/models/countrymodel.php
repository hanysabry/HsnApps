<?php
namespace PHPMVC\Models;

class CountryModel extends AbstractModel
{

    public $CountryId;
    public $CountryName;
    public $Nots;


    protected static $tableName = 'app_countrys';

    protected static $tableSchema = array(
        'CountryId'    => self::DATA_TYPE_INT,
        'CountryName'    => self::DATA_TYPE_STR,
        'Nots'           => self::DATA_TYPE_STR,
    );

    protected static $primaryKey = 'CountryId';




    public static function CountryExists($countryname)
    {
        return self::get('
            SELECT * FROM ' . self::$tableName . ' WHERE CountryName = "' . $countryname . '"');
    }



}