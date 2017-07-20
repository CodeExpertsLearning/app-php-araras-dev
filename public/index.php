<?php

require __DIR__ . '/../vendor/autoload.php';

use Silex\Application;
use CodeExperts\App\Show;

$app = new Application();

$app->get('/', function(){
    $show = new Show();
    $show->setMessage('Hello World');

    return $show->getMessage();
});

$app->run();
