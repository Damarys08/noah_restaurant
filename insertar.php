<?php 
include("conexion.php");

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];
    
$insertar = "INSERT INTO critica (nombre, email, mensaje)
VALUES ('$nombre','$email','$mensaje')";

$resultado = mysqli_query($conexion , $insertar);

if($resultado){
    echo "<script>alert('Se ha registrado con éxito'); 
    window.location='/noah_restaurant'</script>;";
    } else {
        echo "<script>alert('No se pudo registrar');
        window.history.go(-1);</script>";
    }
?>