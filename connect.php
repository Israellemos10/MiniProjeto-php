<?php
$dbhost = 'localhost';
$dbname = 'banco_do_pepu';
$dbuser = 'root';
$dbpass = '';

$connect = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass)or print (mysql_error());
?>