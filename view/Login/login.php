<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Inicio Sesión</title>
<link href="librerias/css/bootstrap2.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="librerias/css/estilo_login.css">
<script src="librerias/js/jquery-3.3.1.min.js" type="text/javascript"></script>
</head>
<body>
<div class="login-form">
<form id="frm-login" action="model/login_model.php" method="POST">
        <img src="img/6.png" alt="">
        <h1> INICIAR SESION</h1>
            <label><b><i>Usuario</i></b>
                <input type="text" placeholder="Nombre de usuario" name="usuario" require><br>   
            <label><b><i>Contraseña:</i></b>
                <input type="password" placeholder="Contrasena" name="contrasena" require><br><br>
            <label><b><i>Tipo:</i></b>
                <select name="tipo" id="categoria">
                    <option value="">Selecione una cargo</option>
                    <option value="1">Cordinador Administrativo</option>
                    <option value="2">Cordinador Rutas </option>
                    <option value="3">Conductor</option>
                </select><br><br>

            <button type="submit" class="btn btn-danger">Ingresar</button>    
    </form>
</div>
