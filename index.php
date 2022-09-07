<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Josué Romero | Wilmar Aldana</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="icon" href="img/favicon.ico">
</head>

<body>
    <header class="hero">
        <div class="textos-hero">
            <h1>Bienvenido a nuestro Sitio Web</h1>
            <p>Hemos trabajado para diseñar la mejor página web de la clase, solo con HTML y CSS</p>
            <a href="#contacto">Contactanos</a>
        </div>
        <div class="svg-hero" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>


    <section class="wave-contenedor website">
        <img src="img/ilustracion1.svg" alt="">
        <div class="contenedor-textos-main">
            <h2 class="titulo left">Programación Web</h2>
            <p class="parrafo">Esta página web se diseño debido a que el profesor <strong>Helmer Julian Romero</strong> que nos imparte el curso de programación web NRC: 21624 nos dejo como tarea.
                Posteriormente, nuestra Landing Page se construyó sin realizar uso de PHP y JavaScript!</p>
            <a href="" class="cta">Inicio</a>
        </div>
    </section>

    <section class="info">
        <div class="contenedor">
            <h2 class="titulo left">Juntos podemos ayudarte</h2>
            <p>¿Quieres aprender a realizar páginas como ésta?  ¿Quieres ganar habilidades para construir tu propia página web?</p>
        </div>
    </section>

    <section class="cards contenedor">
        <h2 class="titulo">Nuestros Cursos</h2>
        <div class="content-cards">
            <article class="card">
                <i class="far fa-clone"></i>
                <h3>Curso de HTML</h3>
                <p>Debes aprender ya el lenguaje de marcado de etiquetas que permite construir los esqueletos de las páginas web.</p>
                <a href="" class="cta">Más información</a>
            </article>
            <article class="card">
                <i class="fas fa-database"></i>
                <h3>Curso de SQLServer</h3>
                <p>SQL es un lenguaje de consulta que permite construir bases de datos relacionales y no relacionales.</p>
                <a href="" class="cta">Más información</a>
            </article>
            <article class="card">
                <i class="far fa-object-group"></i>
                <h3>Curso de CSS</h3>
                <p>Si aprendes CSS podrás estilar tus propias páginas web como un profesional.</p>
                <a href="" class="cta">Más información</a>
            </article>
        </div>
    </section>

    <section class="galeria">
        <div class="contenedor">
            <h2 class="titulo">Nuestros Trabajos</h2>
            <article class="galeria-cont">
                <img src="img/uno.jpg" alt="">
                <img src="img/dos.jpg" alt="">
                <img src="img/tres.jpg" alt="">
                <img src="img/cuatro.jpg" alt="">
                <img src="img/cinco.jpg" alt="">
                <img src="img/seis.jpg" alt="">
            </article>
        </div>
    </section>

    <section class="info-last">

        <div class="contenedor last-section">
            <div class="contenedor-textos-main">
                <h2 class="titulo left">Acerca de nosotros</h2>
                <p class="parrafo">Somos Josué Romero - Wilmar Aldana. Dos estudiantes de quinto (V Semestre) de Ingeniería de Sistemas de la <strong>Corporación Universitaria Minuto de Dios</strong>. Si quieres saber un poco más sobre nosotros, te invitamos a que veas nuestros demás trabajos, buscanos en las redes sociales.</p>
                <a href="" class="cta">Redes sociales</a>
            </div>
            <img src="img/ilustracion.svg" alt="">
        </div>
        
        <div class="svg-wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
            style="height: 100%; width: 100%;">
            <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                style="stroke: none; fill: #f5576c;"></path>
        </svg></div>
    </section>

    <footer id="contacto">
        <div class="contenedor">
            <h2 class="titulo">Compartenos tu opinion</h2>
            <form class="form" method="post">
                <input class="input"  type="text" name="nombre" id="" placeholder="Nombre y apellido" required="">
                <input class="input"  type="email" name="correo" id="" placeholder="Correo electronico" required="">
                <textarea  class="input" name="mensaje" id="" cols="30" rows="10" placeholder="Ingrese su mensaje..." required=""></textarea>
                <input class="input"  type="submit" name="enviar" value="Enviar">
            </form>
                <?php
                    include("correo.php");
                ?>
        </div>
    </footer>
    <script src="https://kit.fontawesome.com/c15b744a04.js" crossorigin="anonymous"></script>
</body>

</html>
