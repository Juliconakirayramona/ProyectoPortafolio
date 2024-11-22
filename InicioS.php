<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inicioS.css">
    <link rel="icon" href="imagenes/icono1.ico">
    <title>Inicio de sección</title>
</head>
<body>
<section class="formulario">
        <form action="/index.php?action=registrer" method="POST">
            <h2 class="seccion">Iniciar Sección</h2>
            <input class="email" type="email" name="correo" size="30" placeholder="Correo" required>
            <input class="clave" type="password" name="clave" placeholder="Contraseña" required>
            <p>
            <a href="Validar.php">Ingresar</a>
            </p>
            <a href="Crearcuenta.php">Crear una cuenta</a>
        </form>
</section>
</body>
</html>