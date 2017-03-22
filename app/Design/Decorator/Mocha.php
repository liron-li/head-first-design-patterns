<?php

namespace App\Design\Decorator;


class Mocha extends CondimentDecorator
{
    protected $description = 'mocha';

    protected $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description . ' ' . $this->beverage->getDescription();
    }

    public function cost()
    {
        return $this->beverage->cost() + 1;
    }
}