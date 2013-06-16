<?php
class TeaWithHook extends CaffeineBeverageWithHook {
    public function brew () {
        echo 'Steeping the tea<br/>';
    }

    public function addCondiments () {
        echo 'Adding lemon<br/>';
    }

    public function custmoerWantsCondiments () {
        $answer = $this->getUserInput();
        if (strtolower(substr($answer, 0, 1)) == 'y') {
            return true; 
        } else {
            return false;
        }
    }

    public function getUserInput () {
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
}
