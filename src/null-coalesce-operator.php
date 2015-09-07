<?php
//nowadays

// just try to uncomment this and se how it works
//$_GET['name'] = 'Pepo';
$name = isset($_GET['name'])?$_GET['name']:'nothing there';
var_dump($name);

// Null Coalesce Operator

$name = $_GET['name'] ?? 'nothing there';
var_dump($name);
echo $firstName ?? 'nothing there';
