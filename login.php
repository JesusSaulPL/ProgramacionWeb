<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Login.css">
    <title>Login</title>
    <link rel="icon" type="image/png" href="Imagenes/incognito-1.svg">
</head>

<body>
    <div class="EN">
        <button id="inicioToggle">Inicio de sesión</button>
        <button id="registroToggle">Registro</button>
    </div>

    <form class="inicioSesion" id="inicioForm" action="php/inicio.php" method="POST">
        <h2>Inicio de Sesión</h2>
        <div class="form-group">
            <input type="text" id="usuario" name="usuario" placeholder="Usuario" required>
        </div>
        <div class="form-group">
            <input type="password" id="password" name="password" required placeholder="Contraseña">
        </div>
        <button type="submit">Enviar</button>
    </form>

    <form class="registroForm" id="registroForm" action="php/registros.php" method="POST">
        <h2>Registro</h2>
        <div class="form-group">
            <input type="text" id="username" name="username" required placeholder="Usuario">
        </div>
        <div class="form-group">
            <input type="email" id="email" name="email" required placeholder="Correo">
        </div>
        <div class="form-group">
            <input type="password" id="passwordRegistro" name="password" required placeholder="Contraseña">
        </div>
        <div class="form-group">
            <select id="Sexo" name="Sexo" required>
                <option value="">Selecciona sexo</option>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
                <option value="Otro">Otro</option>
            </select>
        </div>
        <button type="submit">Registrar</button>
    </form>


    <script src="javacript/loginF.js"></script>


</body>

</html>