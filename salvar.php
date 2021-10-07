<?php
require 'config.php';
$id = $_POST['id'];
$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$senha = $_POST['senha'];

$pdo->query("UPDATE usuarios SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = '$id'");

?>