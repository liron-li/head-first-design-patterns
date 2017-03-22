<?php

namespace App\Design\Observer;


class WeatherData implements Subject
{
    private $temperature;
    private $humidity;
    private $pressure;
    private $observers = [];

    public function register(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function remove(Observer $observer)
    {
        $key = array_search($observer, $this->observers);
        unset($this->observers[$key]);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    public function changed()
    {
        $this->notify();
    }

    public function setMeasurements($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity    = $humidity;
        $this->pressure    = $pressure;
        $this->changed();
    }
}