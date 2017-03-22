<?php

namespace App\Design\Strategy;


class CantFly implements FlyBehavior
{
    public function fly()
    {
        echo 'i can not fly';
    }
}