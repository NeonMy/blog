<?php
header('Content-Type: text/html; charset=utf-8111111');
session_start();
include '/model/connect.php';
$request = $_GET['controller'];
$array = explode('/', $request);
$param = $array[1];

if (!empty($array[0])){
	include '/controlers/'.$array[0].'.php';
	}
	else
	echo "Главная страница";
?>

strapon