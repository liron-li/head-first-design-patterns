<?php

namespace App\Design\Singleton;


class Singleton
{

    protected static $singleton;
    /**
     * Singleton constructor.
     */
    private function __construct()
    {

    }

    public static function getInstance()
    {
        if (is_null(self::$singleton)) {
            return new static();
        } else {
            return static::$singleton;
        }
    }

    public function __clone()
    {
        throw new \Exception('can not clone');
    }
}