<?php

session_start();
ob_start();

function loadClasses($className)
{
    require __DIR__ . '/classes/' .strtolower($className).'.php';
}
spl_autoload_register('loadClasses');

$config = require __DIR__ . '/config.php';

$db_config = $config['db'];
try {
    $db = new PDO('mysql:host='.$db_config['host'].';dbname='.$db_config['name'].';charset=UTF8',$db_config['user'],$db_config['pass']);
}catch (PDOException $exception){
    die($exception->getMessage());
}

foreach (glob(__DIR__.'/helper/*.php') as $helperFile) {
    require $helperFile;
}