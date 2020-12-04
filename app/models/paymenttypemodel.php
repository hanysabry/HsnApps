<?php
namespace PHPMVC\Models;

class PaymenttypeModel extends AbstractModel
{

    public $Id;
    public $Name;
    public $Nots;


    protected static $tableName = 'app_payment_type';

    protected static $tableSchema = array(
        'Id'       => self::DATA_TYPE_INT,
        'Name'     => self::DATA_TYPE_STR,
        'Nots'     => self::DATA_TYPE_STR


    );

    protected static $primaryKey = 'Id';
}