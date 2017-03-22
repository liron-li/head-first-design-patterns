<?php

namespace App\Design\Strategy;


class CanFly implements FlyBehavior
{
    public function fly()
    {
        echo 'i am fly';
    }
}