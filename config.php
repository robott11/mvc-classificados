<?php
define("BASE_URL", "localhost/mvc-classificados");

$config = array(
	"dbname" => "mvc_classificados",
	"host" => "localhost",
	"dbuser" => "root",
	"dbpass" => "root"
);

global $db;

try {
	$db = new PDO("mysql:dbname=".$config["dbname"].";host=".$config["host"], $config["dbuser"], $config["dbpass"]);
} catch(PDOException $e) {
	echo "ERRO: ".$e;
	exit();
}