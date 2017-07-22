<?php
	$host = 'localhost';
	$db_name = 'bus_ticket';
	$user = 'root';
	$password = '';


	try{
		$db = new PDO("mysql:dbname={$db_name};host:{$host}", $user, $password);
	} catch(PDOException $e){
			echo "Connection Error ". $e->getMessage();
	}
?>