<?php
ob_start();

include'/model/model.php';
$users=getDb();
$user =$users[$param-1];
include'/view/edit.php';
	if($_POST['hide']){
		del($param);
		var_dump($param);
		edit($_POST,$param);
	}



$a=ob_get_contents(); // Данные буфера -> $a
ob_clean(); // Конец "в буфер"
	if($_POST['hide']==NULL){
		echo $a; 
		unset($a);} 
	else{
		Header('Location: /list');
		}