<?php

namespace App\Http\Controllers;


use App\Design\Observer\MainDisplay;
use App\Design\Observer\OtherDisplay;
use App\Design\Observer\WeatherData;

class ObserverController extends Controller
{
    protected $weatherData;

    /**
     * ObserverController constructor.
     * @param WeatherData $weatherData
     */
    public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
    }

    public function index()
    {
        //主显示器订阅天气信息
        $mainDisplay  = new MainDisplay($this->weatherData);
        //其他显示器订阅天气信息
        $otherDisplay = new OtherDisplay($this->weatherData);
        //取消主显示器的订阅
        $this->weatherData->remove($mainDisplay);
        //发送消息
        $this->weatherData->setMeasurements(1, 2, 3);
    }
}
