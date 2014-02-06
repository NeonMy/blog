<?php
function setDb($db_array){
	if(!$db_connect) 
		include '/model/connect.php';
	$result=mysql_query("INSERT INTO users VALUES('','".$db_array['name']. "','" .$db_array['secontName']. "','" .$db_array['email']. "','" .$db_array['password']. "','" .$db_array['role']. "')");
	if($result==FALSE)
		 die('Error: '. mysql_error());
	}
////////////////////////////////////////////////////////////////
function getDb(){
	if(!$db_connect) 
		include '/model/connect.php';
	$result=mysql_query('SELECT * FROM users');
	if($result==FALSE)
		 die('Error: '. mysql_error());
	
	while($row=mysql_fetch_array($result)){
		$check=$row['id']-$mode['id'];
		$mode = next($row);
			if($check > 1){
				reCount();
				$db_array['bool']='1';
			break;
			}
		$db_array[]=$row;
		}
	return $db_array;
	}
////////////////////////////////////////////////////////////////
function del($param){
	if(!$db_connect) 
		include '/model/connect.php';
	$result=mysql_query("DELETE FROM users WHERE id='$param'");
	if($result==FALSE) 
		die('Error: '.mysql_error());
	}
////////////////////////////////////////////////////////////////
function edit($db_array,$param){
	if(!$db_connect) 
		include '/model/connect.php';
		//var_dump($db_array);
//	$result=mysql_query("INSERT INTO users VALUES('','".$db_array['name']. "','" .$db_array['secontName']. "','" .$db_array['email']. "','" .$db_array['password']. "','" .$db_array['role']. "')");
	
	$result=mysql_query("UPDATE users SET name='".$db_array['name']. "',second_name='" .$db_array['secontName']. "',email='" .$db_array['email']. "',password='" .$db_array['password']. "',role='" .$db_array['role']. "' WHERE id=" .$db_array.$db_array['role']."");// РАЗОРАТЬ ДОМА

	if($result==FALSE) 
		die('Error: '.mysql_error());
	}
////////////////////////////////////////////////////////////////	
function reCount(){
	$result=mysql_query('
	ALTER TABLE users MODIFY id INT(11)');
	$result=mysql_query('
	ALTER TABLE users DROP PRIMARY KEY');
	$result=mysql_query('
	UPDATE users SET id=0');
	$result=mysql_query('
	ALTER TABLE users AUTO_INCREMENT=0');
	$result=mysql_query('
	ALTER TABLE users MODIFY id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY');
	if($result==FALSE) 
		die('Error: '.mysql_error());
	}
////////////////////////////////////////////////////////////////
function login($db_array){
	if(!$db_connect) 
		include '/model/connect.php';
	$result=mysql_query("SELECT name, second_name FROM users WHERE name=$db_array[name]");
	$data=mysql_fetch_array($result);
	if($result==FALSE) 
		die('Error: '.mysql_error());
	var_dump($db_array);	
	}