<?php
	
	//These variables define the connection information for your MySQL database
	$username = "user";
	$password = "pass";
	$host = "localhost";
	$dbname = "YoseCapstone";

	$options = array(PDO:: MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
	try { $db = new PDO("mysql:host={host}; dbname={$dbname}; charset=utf8", $username, $password, $options);}
	catch(PDOException $ex){ die("Failed to connect to the database " . $ex->getMessage());}
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	HEADER('Content-Type: text/html; charset=utf8');
	session_starts();

?>