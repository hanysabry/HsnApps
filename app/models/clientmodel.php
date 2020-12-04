<?php
namespace PHPMVC\Models;

class ClientModel extends AbstractModel
{
    public $ClientId;
    public $ClientName;
    public $ClientNameEng;
    public $ClientNameCompany;
    public $AssistantaccountId;
    public $AssistantaccountName;
    public $CountryId;
    public $GovernorateId;
    public $CityId;
    public $Address;
    public $PhoneNumber1;
    public $PhoneNumber2;
    public $LandNumber;
    public $FaxNumber;
    public $Email;
    public $SiteCompany;
    public $GroupId;
    public $GroupName;
    public $VatNo;
    public $Segl;
    public $ReferenceId;
    public $StoreId;
    public $StoreIdSub;
    public $ClintBarcode;
    public $ClintOfCompany;
    public $DiscountClint;
    public $MaxOfCredit;
    public $MinOfCredit;
    public $MaxOfDept;
    public $MinOfDept;
    public $DaysDue;
    public $UserId;


    protected static $tableName = 'app_clients';

    protected static $tableSchema = array(
        'ClientName'              => self::DATA_TYPE_STR,
        'ClientNameEng'              => self::DATA_TYPE_STR,
        'ClientNameCompany'              => self::DATA_TYPE_STR,
        'AssistantaccountId'           => self::DATA_TYPE_INT,
        'CountryId'           => self::DATA_TYPE_INT,
        'GovernorateId'           => self::DATA_TYPE_INT,
        'CityId'              => self::DATA_TYPE_INT,
        'Address'              => self::DATA_TYPE_STR,
        'PhoneNumber1'              => self::DATA_TYPE_STR,
        'PhoneNumber2'              => self::DATA_TYPE_STR,
        'LandNumber'              => self::DATA_TYPE_STR,
        'FaxNumber'              => self::DATA_TYPE_STR,
        'Email'              => self::DATA_TYPE_STR,
        'SiteCompany'              => self::DATA_TYPE_STR,
        'GroupId'     => self::DATA_TYPE_INT,
         'VatNo'           => self::DATA_TYPE_INT,
        'Segl'               => self::DATA_TYPE_INT,
        'ReferenceId'          => self::DATA_TYPE_INT,
        'StoreId'          => self::DATA_TYPE_INT,
        'StoreIdSub'          => self::DATA_TYPE_INT,
        'ClintBarcode'         => self::DATA_TYPE_STR,
        'ClintOfCompany'         => self::DATA_TYPE_STR,
        'DiscountClint'          => self::DATA_TYPE_INT,
        'MaxOfCredit'          => self::DATA_TYPE_INT,
        'MinOfCredit'          => self::DATA_TYPE_INT,
        'MaxOfDept'          => self::DATA_TYPE_INT,
        'MinOfDept'          => self::DATA_TYPE_INT,
        'DaysDue'          => self::DATA_TYPE_INT,
        'UserId'          => self::DATA_TYPE_INT,

    );

    protected static $primaryKey = 'ClientId';
}