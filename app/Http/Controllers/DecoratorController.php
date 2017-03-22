<?php

namespace App\Http\Controllers;

use App\Design\Decorator\DarkRoast;
use App\Design\Decorator\Mocha;
use App\Design\Decorator\Whip;

class DecoratorController extends Controller
{
    public function index(DarkRoast $darkRoast)
    {
        //在黑咖啡中加入摩卡
        $beverage = new Mocha($darkRoast);
        //再加上奶油
        $beverage = new Whip($beverage);
        //最后计算总价
        echo $beverage->cost();
    }
}
