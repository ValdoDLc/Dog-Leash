<?php
$email=$_POST['email'];
$password=$_POST['password'];
session_start();
global $passwordHash;
global $id;
include('validar_sesion.php');

$conexion=mysqli_connect('localhost','root','','integradora');

$consulta="SELECT password, id FROM cliente where email='$email'";
$resultado=mysqli_query($conexion,$consulta);

//$filas=mysqli_num_rows($resultado);
if($resultado->num_rows > 0){
    $fila = $resultado->fetch_assoc();
    $passwordHash = $fila["password"];
    $id = $fila["id"];
    if(password_verify($password, $passwordHash)){
        $_SESSION['email'] = $email;
        $_SESSION['id'] = $id;
        validar_sesion($id, $email);
        //Vista/Numero.php*//
    }else{
        //header("location:../Vista/InicioSesion.php");
        ?>
        <script>
            alert('Error al iniciar sesion. Verifica la información.');
        </script>
        <?php
    }
}else{
    ?>
    <script>alert('Error al iniciar sesion. Verifica la información.');</script>
    <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);