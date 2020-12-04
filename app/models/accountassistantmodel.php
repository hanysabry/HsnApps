<?php

namespace PHPMVC\Models;

class AccountassistantModel extends AbstractModel
{
    public $AssistantaccountId;
    public $AssistantaccountName;
    public $AssistantaccountNameEng;
    public $GeneralaccountId;
    public $GeneralaccountName;
    public $MainaccountId;
    public $MainaccountName;
    public $AccountRegisterDate;
    public $CreatedBy;
    public $CurrencyId;
    public $Nots;
    public $Accountdept;
    public $AccountCredit;
    public $AccountTypefinalId;
    public $AccountStatus;
    public $Account1ModaResed;
    public $AccountMonthResed;
    public $AccountYearResed;
    public $AccountUpLim1Resed;
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

    protected static $tableName = 'app_accountassistant';

    protected static $tableSchema = array(
        'AssistantaccountName' => self::DATA_TYPE_STR,
        'AssistantaccountNameEng' => self::DATA_TYPE_STR,
        'MainaccountId' => self::DATA_TYPE_INT,
        'GeneralaccountId' => self::DATA_TYPE_INT,
        'AccountTypefinalId' => self::DATA_TYPE_INT,
        'AccountRegisterDate' => self::DATA_TYPE_STR,
        'Nots' => self::DATA_TYPE_STR,
        'CreatedBy' => self::DATA_TYPE_STR,
        'CurrencyId' => self::DATA_TYPE_INT,
        'AccountStatus' => self::DATA_TYPE_INT,
        'Accountdept' => self::DATA_TYPE_INT,
        'AccountCredit' => self::DATA_TYPE_INT,
        'Account1ModaResed' => self::DATA_TYPE_INT,
        'AccountMonthResed' => self::DATA_TYPE_INT,
        'AccountYearResed' => self::DATA_TYPE_INT,
        'AccountUpLim1Resed' => self::DATA_TYPE_INT,
        'AccountUpLim2Resed' => self::DATA_TYPE_INT,
        'AccountUpLim3Resed' => self::DATA_TYPE_INT,
    );

    protected static $primaryKey = 'AssistantaccountId';


    // TODO:: FIX THE TABLE ALIASING


    public static function Sub1AccountNameExists($GeneralaccountName)
    {
        return self::get('
            SELECT * FROM ' . self::$tableName . ' WHERE GeneralaccountName = "' . $GeneralaccountName . '"');
    }


}