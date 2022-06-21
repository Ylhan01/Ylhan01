<?php
$host_name = 'Localhost';
$database = 'Smart Impact';
$user_name = 'root';
$password = 'L3PDIA';
$dbh = null;

	try {
        $dbh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
	} catch (PDOException $e) {
        echo "Erreur!: " . $e->getMessage() . "<br/>";
	die();
    }
    
?>