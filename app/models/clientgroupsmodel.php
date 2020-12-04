<?php
namespace PHPMVC\Models;

class ClientgroupsModel extends AbstractModel
{

    public $GroupIdaccount;
    public $GroupNameaccount ;
    public $GroupName;
    public $Nots;

    protected static $tableName = 'app_client_group';

    protected static $tableSchema = array(

        'GroupName'             => self::DATA_TYPE_STR,
        'GroupIdaccount'             => self::DATA_TYPE_INT,
        'GroupNameaccount'           => self::DATA_TYPE_STR,
        'Nots'           => self::DATA_TYPE_STR,
    );

    protected static $primaryKey = 'GroupId';
}