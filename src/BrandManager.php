<?php
namespace Jankx\ProductBrands;

class BrandManager {
    protected static $instance;

    public static function getInstance() {
        if (is_null(static::$instance)) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    private function __construct() {
    }
}
