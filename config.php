<?php

$host= 'MySQL-5.6';
$db= 'my_first_db';
$user= 'root' ;
$pass='';
$charset='utf8';

$dsn="mysql:host=$host;dbname=$db;charset=$charset";
$options=[ PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION];

try
{
    $pdo=new PDO($dsn,$user,$pass,$options);
    echo 'подключено';
}
catch(\PDOException $e)
{
    die('ошибка подключения к бд'.$e->getMessage());
}
