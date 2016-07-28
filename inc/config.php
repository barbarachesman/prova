<?php

	$host = 'localhost';
	$user = 'sisanalise';
	$pass = '123456';
	$dbname = 'analise';
	//mengubung ke host
	$connect = mysql_connect($host, $user, $pass) or die(mysql_error());

	//memilih database yang akan digunakan
	$dbselect = mysql_select_db($dbname);

?>
