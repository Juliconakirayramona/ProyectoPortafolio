<section id = "banner">
        <div class = "contenido-banner">
            <h3><span>PHPulse: </span>DiseñoWeb <br> y aplicaciones. </h3>
            <a href ="#" class = "boton-empezar">Empezar</a>
        </div>
    </section>

    <section id="personas">
        <div>
            <img src="imagenes/Yo.jpg">
            <h4>JuliánGarcía García</h4>
            <p>Estudiante de desarrolo de software de la universidad ITM</p>
            <a href="Yo.php" class="boton-saber-mas">Saber más</a>
        </div>
    </section>

    <section id="iconos">
        <div class="contenido-iconos">
            <div>
                <i class="fa-brands fa-discord fa-3x"></i>
                <h4>Discord</h4>
                <p>Acá está mi discord personal</p>
            </div>
            <div>
                <i class="fa-solid fa-gear fa-3x"></i>
                <h4>Configuraciones</h4>
                <p>En este apartado están las configuraciones</p>
            </div>
            <div id="icono-comments">
                <i class="fa-solid fa-comments fa-3x"></i>
                <h4>Comentarios</h4>
                <p>Comentarios de la página</p>
            </div>
        </div>
        <div class="boton-iconos">
            <a href="#" class="boton-saber-mas">Saber más</a>
        </div>
    </section>
    <section id="contacto">
        <h4>Contacta con nosotros</h4>
        <form id="form1" action= "../ProyectoPortafolio/Controller/ControllerUsuario.php"  method="POST">
            <div class = "datos-form">
                <div class="nombre">
                    <label for="nombre">Nombre</label>
                    <input typer="text" name="de_nombre" id="de_nombre" placeholder="nombre" required>
                </div>
                <div class="email">
                    <label for="email">Correo</label>
                    <input type="email" name="de_email" id="de_email" placeholder="email" required>
                </div>
                <div class ="mensaje">
                    <label for ="mensaje">Mensaje</label>
                    <textarea name="de_mensaje" id="de_mensaje" cols="40" rows="10"
                    placeholder="mensaje" required></textarea>
                </div>
                <div class = "boton-formulario">
                <input type = "submit" id = "button" value= "Guardar informacion">
                </div>
            </div>
        </form>
    </section>