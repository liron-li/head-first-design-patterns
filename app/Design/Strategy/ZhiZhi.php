<?php

namespace App\Design\Strategy;


class ZhiZhi implements QuackBehavior
{
    public function quack()
    {
        echo 'zhi zhi';
    }
}