<?php

namespace App\Design\Observer;


class OtherDisplay implements Observer, Display
{
    protected $temperature;
    protected $humidity;
    protected $pressure;

    /**
     * MainDisplay constructor.
     * @param Subject $subject
     */
    public function __construct(Subject $subject)
    {
        $subject->register($this);
    }

    public function update($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity    = $humidity;
        $this->pressure    = $pressure;
        $this->display();
    }

    public function display()
    {
        echo __CLASS__ . '<br>';
        echo 'temperature' . $this->temperature . '<br>';
        echo 'humidity' . $this->humidity . '<br>';
        echo 'pressure' . $this->pressure . '<br>';
    }
}