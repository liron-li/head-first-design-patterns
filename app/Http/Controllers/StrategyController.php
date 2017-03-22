<?php

namespace App\Http\Controllers;

use App\Design\Strategy\CantFly;
use App\Design\Strategy\RedDuck;

class StrategyController extends Controller
{

    protected $duck;

    /**
     * TestController constructor.
     * @param RedDuck $duck
     */
    public function __construct(RedDuck $duck)
    {
        $this->duck = $duck;
    }

    public function index()
    {
        //给红鸭子设置一个 " can't fly " 的飞行行为，并进行飞行
        $this->duck->setFlyBehavior(new CantFly())->performFly();
        //红鸭子发出叫声
        $this->duck->performQuack();
    }
}
