<?php

namespace App\Design\Command;


class LightOnCommand implements Command
{

    protected $light;

    /**
     * LightOnCommand constructor.
     * @param Light $light
     */
    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->on();
    }
}