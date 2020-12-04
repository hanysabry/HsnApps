<?php
namespace PHPMVC\Models;

class AccountMainModel extends AbstractModel
{
public $MainaccountId;
public $MainaccountName;
public $MainaccountNameEng;
public $AccountRegisterDate;
public $CreatedBy ;
public $CurrencyId ;
public $Nots ;
public $Accountdept ;
public $AccountCredit ;
public $AccountTypefinalId ;
public $AccountStatus;
public $Account1ModaResed   ;
public $AccountMonthResed   ;
public $AccountYearResed  ;
public $AccountUpLim1Resed   ;
public $AccountUpLim2Resed   ;
public $AccountUpLim3Resed   ;



    protected static $tableName = 'app_account_main';

    protected static $tableSchema = array(
        'MainaccountName'         => self::DATA_TYPE_STR,
        'MainaccountNameEng'      => self::DATA_TYPE_STR,
        'AccountRegisterDate'     => self::DATA_TYPE_DATE,
        'AccountTypefinalId'  => self::DATA_TYPE_INT,
        'Nots'                => self::DATA_TYPE_STR,
        'CreatedBy'           => self::DATA_TYPE_STR,
        'CurrencyId'          => self::DATA_TYPE_INT,
        'AccountStatus'       =>self::DATA_TYPE_INT,
//      'Accountdept'       =>self::DATA_TYPE_INT,
//      'AccountCredit'     =>self::DATA_TYPE_INT,
        'Account1ModaResed'   => self::DATA_TYPE_INT,
        'AccountMonthResed'   => self::DATA_TYPE_INT,
        'AccountYearResed'       => self::DATA_TYPE_INT,
        'AccountUpLim1Resed'     => self::DATA_TYPE_INT,
        'AccountUpLim2Resed'     => self::DATA_TYPE_INT,
        'AccountUpLim3Resed'     => self::DATA_TYPE_INT,
    );
    protected static $primaryKey = 'MainaccountId';

    public static function MainAccountNameExists($MainaccountName)
    {
        return self::get('
            SELECT * FROM ' . self::$tableName . ' WHERE MainaccountName = "' . $MainaccountName . '"');
    }

}