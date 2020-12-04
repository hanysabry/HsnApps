<?php

namespace PHPMVC\Lib;

class Registry
{

    private static $_instance;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function __get($key)
    {
        return $this->$key;
    }

    public function __set($key, $object)
    {
        $this->$key = $object;
    }

    private function __clone()
    {
    }
}