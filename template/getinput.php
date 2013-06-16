<?php
class getinput {
    private $input;
    private $description;

    public function __construct ($description = NULL) {
        if ($description != NULL) {
            $this->setForm(); 
        }
        if (isset($_GET['input'])) {
            $this->input = $_GET['input'];
            return $this->input;
        }
    }

    public function setForm () {
        $form = '<form id="myForm" action ="getinput.php" method="get">'
              . '<input type="text" name="answer" />'
              . '<input type="button" onclick="document.getElementById(\'myForm\').submit" />'
              . '</form>'
    }
}


