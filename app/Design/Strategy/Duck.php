<?php

namespace App\Design\Strategy;


abstract class Duck
{

    /**
     * @var FlyBehavior
     */
    protected $flyBehavior;

    /**
     * @var QuackBehavior
     */
    protected $quackBehavior;

    /**
     * Duck constructor.
     * @param FlyBehavior $flyBehavior
     * @param QuackBehavior $quackBehavior
     */
    public function __construct(FlyBehavior $flyBehavior, QuackBehavior $quackBehavior)
    {
        $this->quackBehavior = $quackBehavior;
        $this->flyBehavior   = $flyBehavior;
    }

    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    public function setFlyBehavior(FlyBehavior $flyBehavior)
    {
        $this->flyBehavior = $flyBehavior;
        return $this;
    }

    public function setQuackBehavior(QuackBehavior $quackBehavior)
    {
        $this->quackBehavior = $quackBehavior;
        return $this;
    }
}