<?php
namespace PHPMVC\Models;

class CityModel extends AbstractModel
{
    public $CityId;
    public $CityName;
    public $CountryId;
    public $CountryName;
    public $CityNameEng;
    public $GovernorateId;
    public $Nots;


    /**
     * @var UserProfileModel
     */
    public $profile;
    public $privileges;

    protected static $tableName = 'app_country_city';

    protected static $tableSchema = array(
        'CityId'            => self::DATA_TYPE_INT,
        'CityName'          => self::DATA_TYPE_STR,
        'CityNameEng'         => self::DATA_TYPE_STR,
        'CountryId'          => self::DATA_TYPE_INT,
        'GovernorateId'          => self::DATA_TYPE_INT,
        'Nots'       => self::DATA_TYPE_STR,
    );

    protected static $primaryKey = 'CityId';
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





    public static function cityExists($CityName)
    {
        return self::get('
            SELECT * FROM ' . self::$tableName . ' WHERE CityName = "' . $CityName . '"');
    }

    public static function getAll()
    {
        $sql = 'SELECT city.*, country.CountryName CountryName  FROM ' . self::$tableName . ' city';
        $sql .= ' INNER JOIN ' . CountryModel::getModelTableName() . ' country';
        $sql .= ' ON country.CountryId = city.CountryId';
        return self::get($sql);
    }




}