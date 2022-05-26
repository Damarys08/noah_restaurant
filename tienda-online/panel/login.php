<style>
.bad {
	text-align: center;
	width: 100%;
	padding: 12px;
	background-color: #a22;
	color: #fff;
}
</style>


<?php
if($_SERVER['REQUEST_METHOD'] ==='POST'){

    $nombre_usuario = $_POST['nombre_usuario'];
    $clave = $_POST['clave'];
    require '../vendor/autoload.php';
    $usuario = new Kawschool\Usuario;
    $resultado = $usuario->login($nombre_usuario, $clave);

    if($resultado){
        header('Location: dashboard.php');

    }else{
        exit(json_encode(array('estado'=>FALSE,'mensaje'=>'Error al iniciar sesion')));
    }

    $consulta="SELECT*FROM usuarios where nombre_usuario='$nombre_usuario' and clave='$clave'";

    $conexion=mysqli_connect("localhost","root","","noah_bd");

    $resultado=mysqli_query($conexion,$consulta);
    
    $filas=mysqli_fetch_array($resultado);
    
    if($filas['id_cargo']==1){ //administrador
        header("location:dashboard.php");
    
    }else
    if($filas['id_cargo']==2){ //administrador sin voto
    header("location:roles.php");
    }
    else{
        ?>
        <?php
        include("http://localhost/noah/noah_restaurant/tienda-online/panel/");
        ?>
        <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
        <?php
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
    
}
