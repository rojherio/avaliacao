<?php
session_start();
require_once("../util/config.php");

// $oConnection = new Connection();

$conn = Connection::getInstance();

// $conn->beginTransaction();

try{

	// $stmt = $conn->prepare("INSERT INTO teste (nome) VALUES (:nome)");
	// $stmt->bindValue(":nome", "Testando 06");
	// $stmt->execute();

	// $conn->commit();
echo "foi";
}catch(Exception $e){
	$conn->rollback();
	echo "erro";
}

echo "php";



?>