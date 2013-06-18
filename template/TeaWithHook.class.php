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
        echo '<br/>The answer is ', $answer, '<br/>';
        if (strtolower(substr($answer, 0, 1)) == 'y') {
            return true; 
        } else {
            return false;
        }
    }

    public function getUserInput () {
        $answer = NULL;
        echo 'Would you like lemon with your tea (y/n)?';
        if (isset($_GET['answer'])) {
            $answer = $_GET['answer'];
        }
        $answer = $answer == NULL ? 'no' : $answer;
        return $answer;
    }
}
