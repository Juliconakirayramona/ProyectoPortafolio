<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CrearC.css">
    <link rel="icon" href="imagenes/icono1.ico">
    <title>Inicio de sección</title>
</head>
<body>
<section class="formulario">
        <form id= "form1" action="../ProyectoPortafolio/Controller/Controladoru.php" method="POST">
            <h2>Regístrarse</h2>
            <input class="email" type="email" name="de_correo" id ="de_correo"
            placeholder="Correo Electronico" required>
            <input class= "contraseña" type="password" name= "de_clave" id= "de_correo"
            placeholder="Contraseña" requires>
            <p>
            <a href= "#"><input class="boton" type="submit" value="Iniciar"></a>
            </p>
        </form>
</section>
</body>
</html>