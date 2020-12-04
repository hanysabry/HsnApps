<?php
namespace PHPMVC\Models;

class UserProfileModel extends AbstractModel
{
    public $UserId;
    public $FirstName;
    public $LastName;
    public $Address;
    public $DOB;
    public $Image;
    public $CountryId;
    public $CityId;

    protected static $tableName = 'app_users_profiles';

    protected static $tableSchema = array(
        'UserId'            => self::DATA_TYPE_INT,
        'FirstName'         => self::DATA_TYPE_STR,
        'LastName'          => self::DATA_TYPE_STR,
        'Address'           => self::DATA_TYPE_STR,
        'DOB'               => self::DATA_TYPE_DATE,
        'Image'             => self::DATA_TYPE_STR,
        'CountryId'       => self::DATA_TYPE_INT,
        'CityId'          => self::DATA_TYPE_INT
    );

    protected static $primaryKey = 'UserId';
}