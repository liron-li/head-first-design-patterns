<?php

namespace App\Design\Strategy;


class GuaGua implements QuackBehavior
{
    public function quack()
    {
        echo 'gua gua';
    }
}