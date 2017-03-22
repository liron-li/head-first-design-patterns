<?php

namespace App\Http\Controllers;

use App\Design\Command\Light;
use App\Design\Command\LightOnCommand;
use App\Design\Command\SimpleRemoteControl;

class CommandController extends Controller
{

    public function index(SimpleRemoteControl $simpleRemoteControl)
    {
        //初始化一个"light"
        $light          = new Light();
        //给light设置一个打开的命令
        $lightOnCommand = new LightOnCommand($light);
        //将命令对象传给“遥控器”
        $simpleRemoteControl->setCommand($lightOnCommand);
        //遥控器调用自身的按钮按下方法触发“light”的开关命令
        $simpleRemoteControl->buttonWasPressed();
    }
}
