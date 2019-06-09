<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leo D.</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" type= "image/png" href="img/l.png"/>
    
</head>
<body>
    <header class="header"> 

    <div>
      <figure class ="logo">
        <img src="" alt="logo.jpeg">
      </figure>
    </div>
        <nav class="menu">
          <ul>
              <li>
                <a class="link" href="#principal">Quien soy?</a>
              </li>
              <li>
                <a class="link" href="#portafolio">Experiencia</a>
              </li>
              <li>
                <a class="link" href="#contacto">Contacto</a>
              </li>
          </ul>              
        </nav>
    </header>
    <section id="hero" class="hero"><!--seccion principal-->
        <h1><spam>Leonardo Daniel</spam>, Desarrollador FullStack y Animador por diversion.</h1>
        <!--<img src="img/hero.jpg" alt="hero.jpg" width=500px/>  -->  
    </section>
    <section id="portafolio"class="portfolio"><!--seccion portafolio-->
      <h2>Proyectos en Programacion</h2>
      <article class="project">
        <div class="project-details">
            <h3 class="project-title">Blog anime</h3>
            <h6 class="project-stack">WAMP STACK</h6>
            <p class="project-date"><small><strong>Fecha: </strong> 08/06/19</small></p>
            <p class="project-url"><small><strong>Mirar </strong> www.github.com</small></p>
            <p class="project-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione odio ex et delectus, blanditiis quos exercitationem doloribus reprehenderit numquam hic quaerat enim molestiae architecto at quod, voluptate veritatis incidunt impedit?</p>
        </div>
        <figure class="project-imageContainer"><img class="project-image" src="img/blog.jpg" alt="blog.jpg" width= 500px></figure>
      </article>
      <article class="project">
        
        <div class="project-details">
            <h3 class="project-title">Red social</h3>
            <h6 class="project-stack">MEAN STACK</h6>
            <p class="project-date"><small><strong>Fecha: </strong>10/06/19</small></p>
            <p class="project-url"><small><strong>Mirar: </strong> https://www.github.com</small></p>
            <p class="project-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam rem dolorum iure beatae laudantium voluptatem aspernatur optio temporibus non eaque sequi impedit, dolores adipisci numquam inventore ratione vero facere delectus!</p>
        </div>
        <figure class="project-imageContainer"><img class="project-image" src="img/blog.jpg" alt="red.jpg" width=500px></figure>
      </article>
    </section>
    <section id="contacto" class="contact"><!--seccion de contacto-->
      <form action="suscription.php" class="form-email">
          <h3><strong>Contactame</strong></h3>
          <input type="text" placeholder ="correo@contacto.com"> 
          <h4>Asunto</h4>
          <textarea name="asunto" id="Asunto" cols="40" rows="5"></textarea>
          <input type="submit" value="Enviar">    
      </form>
    </section>
    <footer><p><small><strong>Todos los derechos reservados &copy Leonardo D. Gtz Medellin.</strong></small></p></footer>
    
</body>
</html>