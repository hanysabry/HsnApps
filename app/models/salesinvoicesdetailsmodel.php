<?php
namespace PHPMVC\Models;

class SalesinvoicesdetailsModel extends AbstractModel
{

public $InvoiceId;
public $ProductName;
public $ProductId;
public $Quantity;
public $CreatedAt ;
public $UnitName;
public $Discount;
public $PercentDiscount;
public $AmountDiscount;
public $NetPriceTotal ;
public $NetPriceUnit ;
public $MainaccountId;
public $GeneralaccountId;
public $CompanyId;
public $BranchesId;
public $CountryId;
public $StoreId;
public $StoreIdSub;
    public $Nots;
    public $InvoicetypepayedId;



    protected static $tableName = 'app_sales_invoices_details';

    protected static $tableSchema = array(
        'ProductId'       => self::DATA_TYPE_STR,
        'ProductName'              => self::DATA_TYPE_STR,
        'ProductNameEng'              => self::DATA_TYPE_STR,
        'Quantity'             => self::DATA_TYPE_STR,
        'CreatedAt'           => self::DATA_TYPE_DATE,
        'UnitName'              => self::DATA_TYPE_INT,
        'Discount'              => self::DATA_TYPE_INT,
//        'PhoneNumber'       => self::DATA_TYPE_STR,
        'PercentDiscount'             => self::DATA_TYPE_INT,
        'AmountDiscount'          => self::DATA_TYPE_INT,
        'NetPriceTotal'            => self::DATA_TYPE_INT,
        'NetPriceUnit'        => self::DATA_TYPE_INT,
        'MainaccountId'             => self::DATA_TYPE_INT,
        'GeneralaccountId'           => self::DATA_TYPE_INT,
        'AssistantaccountId'          => self::DATA_TYPE_INT,
        'CompanyId'       => self::DATA_TYPE_INT,
        'BranchesId'            => self::DATA_TYPE_INT,
        'CountryId'        => self::DATA_TYPE_INT,
        'StoreId'         => self::DATA_TYPE_INT,
        'StoreIdSub'        => self::DATA_TYPE_INT,
        'Nots'           => self::DATA_TYPE_STR,

    );

    protected static $primaryKey = 'InvoiceId';
}