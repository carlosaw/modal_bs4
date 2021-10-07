<?php
try {
$pdo = new PDO("mysql:dbname=aula_modal;host=localhost", "root", "");
    $sql = $pdo->query("SELECT * FROM usuarios");
    $usuarios = $sql->fetchAll();
} catch(PDOException $e) {
	echo "FALHOU ".$e->getMessage();
	exit;
}
?>