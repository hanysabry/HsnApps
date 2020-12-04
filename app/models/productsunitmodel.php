<?php
namespace PHPMVC\Models;

class ProductsunitModel extends AbstractModel
{
    public $UnitId;
    public $UnitName;
    public $ProductId;
    public $Quantity;
    public $QuantityOfNo;
    public $QuantityMin;
    public $QuantityMax;
    public $VatPercent;
    public $Nots;

    protected static $tableName = 'app_products_unit';

    protected static $tableSchema = array(
        'UnitId'            => self::DATA_TYPE_INT,
        'UnitName'          => self::DATA_TYPE_STR ,
        'ProductId'         => self::DATA_TYPE_INT
    );
    protected static $primaryKey = 'UnitId';
}