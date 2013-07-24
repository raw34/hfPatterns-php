<?php
//第二种
spl_autoload_register(function ($name) {
    $name = pathinfo($name)['filename'];
    if (file_exists($name . '.class.php')) {
        echo "want to load $name.class.php<br/>";
        require_once $name . '.class.php';
    } else {
        throw new Exception("unable to load $name.");
    }
});
