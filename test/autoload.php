<?php
//第一种
function __autoload($name)
{
    echo 'first way';
    $name = pathinfo($name)['filename'];
    //echo "want to load $name.class.php\n<br/>";
    if (file_exists($name . '.class.php')) {
        require_once $name . '.class.php';
    } else {
        throw new Exception("unable to load $name.");
    }
}

//第二种
spl_autoload_register(function ($name) {
    echo 'second way';
    $name = pathinfo($name)['filename'];
    if (file_exists($name . '.class.php')) {
        require_once $name . '.class.php';
    } else {
        throw new Exception("unable to load $name.");
    }
});

//第三种
class myAutoload
{
    public function __construct ()
    {
        echo '1111111';
        //
    }
    public static function loader ($name)
    {
        echo 'third way';
        $name = pathinfo($name)['filename'];
        if (file_exists($name . '.class.php')) {
            require_once $name . '.class.php';
        } else {
            throw new Exception("unable to load $name.");
        }
    }
}

//spl_autoload_register('myAutoload::loader');
spl_autoload_register(array('myAutoload', 'loader'));

