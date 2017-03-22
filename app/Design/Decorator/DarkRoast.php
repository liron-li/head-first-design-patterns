<?php

namespace App\Design\Decorator;


class DarkRoast extends Beverage
{
    protected $description = 'Dark Roast';

    public function getDescription()
    {
        return $this->description;
    }

    public function cost()
    {
        return 10;
    }
}