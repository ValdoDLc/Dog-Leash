<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" text="text/css" href="../Css/Styles.css">
    <script type="text/javascript" src="../JavaScript/Functions.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="../Img/Logo.png" type="image/x-icon"/>
    <title>Login</title>
</head>
<body>
    <!-- Menu XD -->
    <nav class="Menu">
        <label class="Logo">Dog Leash</label>
    </nav>
    <header>
        <div class="Banner">
            <div class="Login">
                <h2>Login</h2><br>
                <form action="../Modelo/Validar.php" method="post" onsubmit="return validateForm()">
                    <div class="Usuario">
                        <input type="text" name="email" id="email" required="">
                        <label>Email</label>
                    </div>
                    <div class="Usuario">
                        <input type="password" name="password" id="password" required="">
                        <label>Contraseña</label>
                    </div>
                    <div class="ButtonLogin">
                        <input type="submit" class="ButtonAlta" value="Ingresar" onclick="Alerta()">
                        <div id="Registro">
                            No Tienes Cuenta ?
                            <a href="Registro.php">Registrarse</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </header>
</body>
</html> 