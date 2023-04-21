<?php
include("conexion.php");
//Funciones para obtener datos
function send_category(){
    global $pdo;
    $sql = "SELECT * FROM categorias";
    
    $statement = $pdo->prepare($sql);

    $statement->execute();
    $results=$statement->fetchAll();
    return $results;
}

function send_products(){
    global $pdo;
    $sql = "SELECT productos.codigo, productos.nombre, productos.descripcion, productos.precio_venta, productos.precio_compra, categorias.nombre as nombre_categoria FROM productos INNER JOIN categorias ON productos.id_categoria=categorias.id;
    ";
    $statement = $pdo->prepare($sql);

    $statement->execute();
    $results=$statement->fetchAll();
    return $results;
}
?>