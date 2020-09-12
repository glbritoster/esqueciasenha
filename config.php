<?php
try {
	$pdo = new PDO("mysql:dbname=esqueciasenha;host=localhost", "root", "brito");
} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}
