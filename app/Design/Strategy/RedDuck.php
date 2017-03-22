<?php

namespace App\Design\Strategy;


class RedDuck extends Duck
{

    public function __construct(GuaGua $quackBehavior, CanFly $flyBehavior)
    {
        $this->quackBehavior = $quackBehavior;
        $this->flyBehavior   = $flyBehavior;
    }
}