<?php
namespace PHPMVC\Models;

class SalesinvoicesModel extends AbstractModel
{

public $InvoiceId;
public $ClientId_Group;
public $ClientId;
public $PaymentType;
public $PaymentStatus ;
public $CreatedAtTime;
public $CreatedAtDate;
public $UserId ;
public $MainaccountId;
public $GeneralaccountId;
public $CompanyId;
public $BranchesId;
public $CountryId;
public $CityId;
public $InvoicesDue;
public $Mobil;
public $Nots;
public $Barcode;




    protected static $tableName = 'app_sales_invoices_details';

    protected static $tableSchema = array(
        'ClientId'              => self::DATA_TYPE_STR,
        'ClientId_Group'       => self::DATA_TYPE_STR,
        'PaymentType'             => self::DATA_TYPE_STR,
        'PaymentStatus'           => self::DATA_TYPE_DATE,
        'CreatedAtDate'              => self::DATA_TYPE_DATE,
        'MainaccountId'       => self::DATA_TYPE_INT,
        'GeneralaccountId'             => self::DATA_TYPE_INT,
        'CompanyId'     => self::DATA_TYPE_INT,
        'BranchesId'           => self::DATA_TYPE_INT,
        'NetPriceTotal'       => self::DATA_TYPE_INT,
        'CountryId'            => self::DATA_TYPE_INT,
        'GeneralaccountId'        => self::DATA_TYPE_INT,
        'CompanyId'       => self::DATA_TYPE_INT,
        'BranchesId'           => self::DATA_TYPE_INT,
        'CountryId'          => self::DATA_TYPE_INT,
        'CityId'           => self::DATA_TYPE_INT,
        'Nots'           => self::DATA_TYPE_STR,
        'Barcode'           => self::DATA_TYPE_STR,
    );




    protected static $primaryKey = 'InvoiceId';
}