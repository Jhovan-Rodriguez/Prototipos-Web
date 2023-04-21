<?php
    include("conexion.php");
    global $pdo;
    $codeProduct=$_REQUEST['codeProduct'];
    $nameProduct=$_REQUEST['nameProduct'];
    $description=$_REQUEST['description'];
    $category=$_REQUEST['category'];
    $sale_price=$_REQUEST['sale_price'];
    $purchase_price=$_REQUEST['purchase_price'];
	$sql = "INSERT INTO productos(codigo,nombre,descripcion,precio_venta,precio_compra,id_categoria) VALUES('$codeProduct','$nameProduct','$description','$sale_price','$purchase_price','$category')";
	$statement = $pdo->prepare($sql);
	$statement->execute();
    header("location: products.php");

?>