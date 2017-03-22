<?php

namespace App\Design\Decorator;


abstract class Beverage
{
    protected $description = 'un know beverage type';

    public abstract function getDescription();

    public abstract function cost();

}