<?php
require_once 'autoload.php';

class RemoteLoader {
    public function __construct () {
        $remoteControl = new RemoteControl();
        $light = new Light('Living Room');
        $tv = new TV('Living Room');
        $lightOn = new LightOnCommand($light);
        $lightOff = new LightOffCommand($light);
        $tvOn = new TVOnCommand($tv);
        $tvOff = new TVOffCommand($tv);

        $partyOn = array($lightOn, $tvOn);
        $partyOff = array($lightOff, $tvOff);

        $partyOnMacro = new MacroCommand($partyOn);
        $partyOffMacro = new MacroCommand($partyOff);

        //$remoteControl->setCommand(0, $lightOn, $lightOff);
        $remoteControl->setCommand(0, $partyOnMacro, $partyOffMacro);
        echo $remoteControl;
        echo '<br/>--- Pushing Macro On ---<br/>';
        $remoteControl->onButtonWasPushed(0);
        echo '<br/>--- Pushing Macro Off ---<br/>';
        $remoteControl->offButtonWasPushed(0);
        echo '<br/>--- Pushing Macro undo ---<br/>';
        $remoteControl->undoButtonWasPushed(0);
    }
}

$obj = new RemoteLoader();
