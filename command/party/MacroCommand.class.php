<?php
class MacroCommand implements Command {
    private $commands;

    public function __construct ($commands) {
        $this->commands = $commands;
    }

    public function execute () {
        foreach ($this->commands as $k => $v) {
           $v->execute(); 
        }
    }

    public function undo () {
        $commands = array_reverse($this->commands);
        foreach ($commands as $k => $v) {
            $v->undo(); 
        }
    }
}
