<?php
require 'config.php';

$id = $_POST['id'];

//$pdo = new PDO("mysql:dbname=aula_modal;host=localhost", "root", "");
$sql = $pdo->query("DELETE FROM usuarios WHERE id = '$id'");
?>