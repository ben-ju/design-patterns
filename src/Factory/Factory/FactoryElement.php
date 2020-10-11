<?php


namespace App\Factory\Factory;
use App\Factory\Factory\FactoryInterface;


class FactoryElement implements FactoryInterface
{
    private static ?FactoryElement $_instance = null;

    private function __construct()
    {
    }

    public static function getInstance() :self
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    public function create(string $className)
    {
        $className =  "App\\Factory\\Element\\" . ucfirst(strtolower($className)) . "Element";

        return new $className();
    }

};
