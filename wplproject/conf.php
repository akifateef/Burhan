<?php
$db_host = 'localhost';
$db_user= 'root';
$db_pwd='';
$db= 'feedback';

$con = mysql_connect($db_host, $db_user, $db_pwd);

if(!$con){

die('Could not connect: ' .mysql_error());}

mysql_select_db($db,$con);
?>