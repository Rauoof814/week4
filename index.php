<?php


// 328/hello-fat-free/pindex.php


// This is my CONTROLLER!

// Turn on error reporting

ini_set('display_errors',1);

error_reporting(E_ALL);

// Require the autoload file

require_once ('vendor/autoload.php');


// Instantiate the F3 Base class

$f3 = Base::instance();


// Define a default route
$f3->route('GET /', function ()
{
//    echo '<h1> Hello Week4</h1>';

    // Render a view page
    $view = new Template();
    echo $view->render('views/info.html');
});

// Run Fat-Free
$f3 -> run();