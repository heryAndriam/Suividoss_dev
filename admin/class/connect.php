<?php
/*$server = "suividoss-production.caukscxdgck1.eu-central-1.rds.amazonaws.com";
$base = "suividossdb" ;
$password = "CfeSArICSDzqwNM58R4Y";
$root = "admin" ;
$port = 3306;*/

$server = "suividoss-production.caukscxdgck1.eu-central-1.rds.amazonaws.com";
$base = "suividossdb" ;
$password = "CfeSArICSDzqwNM58R4Y";
$root = "admin" ;
$port = 3306;

try {
   //$dbo = new PDO("mysql:host=$server;dbname=$base", $root, $password);
   $dbo = new PDO('mysql:host='.$server.';port='.$port.';charset=utf8;dbname='.$base.'', $root, $password);
   //$conn = new mysqli($server,$root,$password, $base);
   //$con = new mysqli($server,$root,$password, $base);
  	$dbo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   	//echo "Connected successfully";
   }
catch(PDOException $e)
   {
   echo "Connection failed: " . $e->getMessage();
   }

?>