<?php

namespace App\Design\Observer;


interface Observer
{
    public function update($temperature, $humidity, $pressure);
}