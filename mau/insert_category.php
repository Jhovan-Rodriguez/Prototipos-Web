<?php
    include("conexion.php");
    global $pdo;
    $codeCategory=$_REQUEST['codeCategory'];
    $nameCategory=$_REQUEST['nameCategory'];
	$sql = "INSERT INTO categorias(codigo,nombre) VALUES('$codeCategory','$nameCategory')";
	$statement = $pdo->prepare($sql);
	$statement->execute();
    header("location: category.php");

	return $statement;
?>