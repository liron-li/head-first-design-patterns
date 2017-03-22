<?php

namespace App\Design\Decorator;


class Whip extends CondimentDecorator
{
    protected $description = 'whip';

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
        return $this->beverage->cost() + 2;
    }
}