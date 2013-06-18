<?php
class TeaWithHook extends CaffeineBeverageWithHook {
    protected $answer;

    public function brew () {
        echo 'Steeping the tea<br/>';
    }

    public function addCondiments () {
        if ($this->custmoerWantsCondiments()) {
            echo 'Adding lemon<br/>';
        }
    }

    public function custmoerWantsCondiments () {
        if ($this->answer == NULL) {
            $this->answer = $this->getUserInput();
        } else {
            if (strtolower(substr($this->answer, 0, 1)) == 'y') {
                return true; 
            } else {
                return false;
            }
        }
    }

    public function getUserInput () {
        $obj = serialize(array("answer"));
        $form = "<div>Would you like lemon with your test(y/n)?</div>"
              . "<form id='order'>"
              . "    <input type='text' name='answer'/>"
              . "    <input type='hidden' name='obj' value='{$obj}' />"
              . "    <input type='button' value='submit' onclick='subit()'/>"
              . "</form>" 
              . "<script src='http://localhost/patterns/hfPatterns-php/template/TeaWithHook.class.php?'></script>"
        echo $form;
        /*
        $answer =  $_GET['answer'];
        if (!isset($answer) || $answer == NULL) {
            echo "Would you like lemon with your tea (y/n)?<br/>";
            echo '<form action="BeverageTestDrive.class.php" method="get"><input name="answer" type="text"></form>';
            return 'no'; 
        } else {
            return $answer;
        }
         */
    }

    public function dealRequst () {
        $answer = $_GET['answer'] != NULL ? $_GET['answer'] : 'no';
        $obj = $_GET['obj'];
        $obj = unserialize($obj);
        $this->answer = $answer;
        $this->custmoerWantsCondiments();
    }

    public function __sleep () {
        
    }

    public function __wakeup () {
        $this->addCondiments();        
    }
}

if (isset($_GET['obj'])) {
    TeaWithHook::dealRequst();
}
