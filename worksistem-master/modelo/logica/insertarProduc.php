<?php
 require_once 'conexion.php';
  
$id  = $_POST['idproducto'];
$idprove= $_POST['idproveedor'];
$nombre = $_POST['nombre'];
$precio  = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$descrip = $_POST['descripcion'];


$insertar = $pdo->prepare('INSERT INTO producto (id_producto, id_proveedor, nombre_producto, precio_producto, cantidad_producto, descripcion )VALUES(:idproducto,:idproveedor,:nombre,:precio,:cantidad,:descripcion)');

$insertar->bindParam(':idproducto',$id);
$insertar->bindParam(':idproveedor',$idprove);
$insertar->bindParam(':nombre',$nombre);
$insertar->bindParam(':precio',$precio);
$insertar->bindParam(':cantidad',$cantidad);
$insertar->bindParam(':descripcion',$descrip);

if($insertar->execute()){
   echo "<script> alert('el Producto de guardo correctamente');
   location.href = '../../vista/formularios/formulario_ingreso_producto.php';
  </script>";

}else{
    echo "<script> alert('Error No se guardo el Producto ');
    location.href = '../../modelo/logica/insertarProduc.php';  
    </script>";
}
   

?>
