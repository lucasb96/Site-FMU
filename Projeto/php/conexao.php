<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bdnome = "projeto";

$conn = mysqli_connect($servidor, $usuario, $senha);
$banco = mysqli_select_db($conn, $bdnome);
?>