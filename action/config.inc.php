<?php

header("Cache-Control: no-cache, no-store, must-revalidate"); // limpa o cache
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=utf-8"); 

$servername = "172.31.16.209";
$username = "root";
$password = "Al0c@rioca18";
$dbname = "dbagreglog";

//$servername = "localhost";
//$username = "root";
//$password = "al0c@rioca";
//$dbname = "dbagreglog";
try {
    	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    	die("OOPs algo deu errado");
    }
 
?>
