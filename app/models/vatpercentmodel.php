<?php
namespace PHPMVC\Models;

class VatpercentModel extends AbstractModel
{
    public $VatId;
    public $VatPercent;
    public $Nots;

    protected static $tableName = 'app_vat_percents';

    protected static $tableSchema = array(
        'VatId'            => self::DATA_TYPE_INT,
        'VatPercent'       => self::DATA_TYPE_INT,
        'Nots'       => self::DATA_TYPE_STR,
    );

    protected static $primaryKey = 'VatId';
//
//app_country_city
//app_countrys

    // TODO:: FIX THE TABLE ALIASING
//    public static function getcountry(CityModel $cityname)
//    {
//        return self::get(
//        'SELECT  country_city.CountryId, country_city.CountryName, app_Countrys.*  FROM ' . self::$tableName . ' , app_Countrys   WHERE  self::$tableName->CountryId =    app_Countrys->CountryId '
//        );
//    }



//
//
//    public static function cityExists($CityName)
//    {
//        return self::get('
//            SELECT * FROM ' . self::$tableName . ' WHERE CityName = "' . $CityName . '"');
//    }
//
//    public static function getAll()
//    {
//        $sql = 'SELECT city.*, country.CountryName CountryName  FROM ' . self::$tableName . ' city';
//        $sql .= ' INNER JOIN ' . CountryModel::getModelTableName() . ' country';
//        $sql .= ' ON country.CountryId = city.CountryId';
//        return self::get($sql);
//    }




}