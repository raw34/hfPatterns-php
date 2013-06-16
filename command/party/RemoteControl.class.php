<?php
class RemoteControl {
    private $onCommands;
    private $offCommands;
    private $undoCommand;

    public function __construct () {
        $this->onCommands = array();
        $this->offCommands = array();

        $noCommand = new NoCommand();
        /*
        for ($i = 0; $i < 7; $i++) {
            $this->onCommands[] = $noCommand;
            $this->offCommands[] = $noCommand;
        }
         */
        $this->undoCommand = $noCommand;
    }

    public function setCommand ($slot, $onCommand, $offCommand) {
        $this->onCommands[$slot] = $onCommand;
        $this->offCommands[$slot] = $offCommand; 
    }

    public function onButtonWasPushed ($slot) {
       $this->onCommands[$slot]->execute(); 
       $this->undoCommand = $this->onCommands[$slot];
    }

    public function offButtonWasPushed ($slot) {
       $this->offCommands[$slot]->execute(); 
       $this->undoCommand = $this->offCommands[$slot];
    }

    public function undoButtonWasPushed ($slot) {
        $this->undoCommand->undo();
    }

    public function __toString () {
        $result = '<br/>---- Remote Control ----<br/>';
        foreach ($this->onCommands as $k => $v) {
            $result .= "[slot {$k}] " . get_class($v) 
                    . "  " . get_class($this->offCommands[$k]) .'<br/>'; 
        }
        $result .= '[undo]' . get_class($this->undoCommand) . '<br/>';
        return $result;
    }
}
