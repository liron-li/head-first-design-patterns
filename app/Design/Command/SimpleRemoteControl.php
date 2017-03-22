<?php

namespace App\Design\Command;


class SimpleRemoteControl
{
    protected $command;

    public function __construct()
    {
        //
    }

    public function setCommand(Command $command)
    {
        $this->command = $command;
    }

    public function buttonWasPressed()
    {
        $this->command->execute();
    }

}