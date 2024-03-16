<?php 

function validar_sesion($id_usuario, $email){
    $conexion=mysqli_connect('localhost','root','','integradora');
    if(isset($id_usuario) && isset($email)){
        $consulta = "select * FROM cliente WHERE id = '$id_usuario' AND email = '$email'";

        $resultado = mysqli_query($conexion, $consulta);
        if(mysqli_num_rows($resultado) > 0){
            header("Location: Index.php");
            exit;
        }
    }else{
        header("Location: Vista/InicioSesion.php");

        exit;
    }
}

function validar_sesion2($id_usuario, $email){
    $conexion=mysqli_connect('localhost','root','','integradora');
    if(isset($id_usuario) && isset($email)){
        $consulta = "select * FROM cliente WHERE id = '$id_usuario' AND email = '$email'";

        $resultado = mysqli_query($conexion, $consulta);
        if(mysqli_num_rows($resultado) < 0){
            header("Location: ../Vista/InicioSesion.php");
            exit;
        }
    }else{
        header("Location: ../Vista/InicioSesion.php");

        exit;
    }
}


?>