<?php
$db_host = 'localhost';
$db_user= 'root';
$db_pwd='';
$db= 'test';

$con = mysql_connect($db_host, $db_user, $db_pwd);
mysql_select_db($db,$con);

if(!$con){

die('Could not connect: ' .mysql_error());}

?>