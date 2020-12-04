<?php

namespace PHPMVC\Models;

class AccountGeneralModel extends AbstractModel
{
    public $GeneralaccountId;
    public $GeneralaccountName;
    public $GeneralaccountNameEng;
    public $MainaccountId;
    public $MainaccountName;
    public $AccountRegisterDate;
    public $CreatedBy ;
    public $CurrencyId ;
    public $Nots ;
    public $Accountdept ;
    public $AccountCredit ;
    public $AccountTypefinalId;
    public $AccountStatus;
    public $Account1ModaResed   ;
    public $AccountMonthResed   ;
    public $AccountYearResed  ;
    public $AccountUpLim1Resed   ;
    public $InvoiceIdpurchases;
    public $InvoiceIdsales;
    public $UserId;
    public $SecurityCod;
    public $AccountUpLim2Resed;
    public $AccountUpLim3Resed;
    public $AccountCalc;
    public $AccountReverse;
    public $CompanyId;
    public $BranchesId;

    /**
     * @var UserProfileModel
     */
    public $profile;
    public $privileges;

    protected static $tableName = 'app_accountgeneral';

    protected static $tableSchema = array(
        'GeneralaccountName'  => self::DATA_TYPE_STR,
        'GeneralaccountNameEng'  => self::DATA_TYPE_STR,
        'MainaccountId'       => self::DATA_TYPE_INT,
        'AccountTypefinalId'  => self::DATA_TYPE_INT,
        'AccountRegisterDate' => self::DATA_TYPE_STR,
        'Nots'                => self::DATA_TYPE_STR,
        'CreatedBy'           => self::DATA_TYPE_STR,
        'CurrencyId'          => self::DATA_TYPE_INT,
        'AccountStatus'       =>self::DATA_TYPE_INT,
        'Accountdept'         =>self::DATA_TYPE_INT,
        'AccountCredit'        =>self::DATA_TYPE_INT,
        'Account1ModaResed'   => self::DATA_TYPE_INT,
        'AccountMonthResed'  => self::DATA_TYPE_INT,
        'AccountYearResed'       => self::DATA_TYPE_INT,
        'AccountUpLim1Resed'     => self::DATA_TYPE_INT,
        'AccountUpLim2Resed'     => self::DATA_TYPE_INT,
        'AccountUpLim3Resed'     => self::DATA_TYPE_INT
    );





    protected static $primaryKey = 'GeneralaccountId';


    // TODO:: FIX THE TABLE ALIASING


    public static function Sub1AccountNameExists($GeneralaccountName)
    {
        return self::get('
            SELECT * FROM ' . self::$tableName . ' WHERE GeneralaccountName = "' . $GeneralaccountName . '"');
    }




    public static function getAll()
    {
        $sql = 'SELECT accountgeneral.* , accountmain.MainaccountName MainaccountName  FROM ' . self::$tableName . ' accountgeneral';
        $sql .= ' INNER JOIN ' . AccountMainModel::getModelTableName() . ' accountmain';
         $sql .= ' ON accountmain.MainaccountId = accountgeneral.MainaccountId ';
        return self::get($sql);
    }

//
//    public static function getAll()
//    {
//        $sql = 'SELECT apl.*, apc.Name categoryName FROM ' . self::$tableName . ' apl';
//        $sql .= ' INNER JOIN ' . ProductCategoryModel::getModelTableName() . ' apc';
//        $sql .= ' ON apc.CategoryId = apl.CategoryId';
//        return self::get($sql);
//    }
//



}