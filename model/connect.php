<?php
$Host_db ='127.0.0.1';
$User_db ='root';
$Pass_db ='';
$Name_db ='test';

$db_connect=mysql_connect($Host_db, $User_db, $Pass_db);
if(!$db_connect) die('Error connect: '. mysql_error());

$db_select=mysql_select_db($Name_db);
if(!$db_select) die('Error select: '. mysql_error());