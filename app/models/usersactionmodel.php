<?php
namespace PHPMVC\Models;

class UsersActionModel extends AbstractModel
{

//
//    public $UserId;
//    public $User_login;
//    public $User_log_out;
//    public $TableName;
//    public $ActionColumn;
//    public $ActionTitle;
//    public $TimeAt;
//    public $Nots;



    public $ActionId  ;
    public $UserId;
    public $User_login;
    public $User_log_out;
    public $TableName;
    public $ActionColumn;
    public $ActionTitle;
    public $TimeAt;
    public $Nots;

    protected static $tableName = 'app_users_action';

    protected static $tableSchema = array(
        'ActionId'         => self::DATA_TYPE_INT ,
        'UserId'           => self::DATA_TYPE_INT,
        'User_login'       => self::DEFAULT_DateTimeInterface,
        'User_log_out'     => self::DEFAULT_DateTimeInterface,
        '$TableName'       => self::DATA_TYPE_STR,
        'ActionTitle'      => self::DATA_TYPE_STR,
        'ActionColumn'     => self::DATA_TYPE_STR,
        'TimeAt'           => self::DEFAULT_DateTimeInterface,
        'Nots'             => self::DATA_TYPE_STR

    );

    protected static $primaryKey = 'ActionId';
}