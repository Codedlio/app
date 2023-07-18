<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RedCoN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">
                <img src="images/logo.PNG" style="height: 50px; width: 100%; " alt="">
            </a>
            <input type="checkbox" name="checkbox" id="menu"/>
            <label for="menu">
                <img src="images/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#home">Inicio</a></li>
                    <li><a href="#we">Nosotros</a></li>
                    <li><a href="#servicios">Servicios</a></li>
                    <li><a href="#contact">Contacto</a></li>
                </ul>
            </nav>
        </div>
        <div id="home" class="header-content container">
            <div class="header-text">
                <h1>RedCoN</h1>
                <p>
                Somos una empresa orientada, comprometida y certificada en la integración, diseño y mantenimiento de sus proyectos en las áreas de voz y datos, CCTV, sistemas de tierras, controles de acceso, alarmas y más, con la finalidad de brindarle a usted siempre la seguridad de un servicio eficaz y eficiente. 
                </p>
                <p>
                Diagnosticamos y definimos las necesidades de interconexión, la aplicación de los estándares de tecnología a utilizarse y la selección final de la mejor opción; considerando las necesidades presentes y futuras.
                </p>
                <a href="#contact" class="btn-1">informacion</a>
            </div>
            <div class="header-img">
                <img src="images/redes.jpg"  alt="img_header">
            </div>
        </div>

    </header>
    <section id="we" class="about container">
        <div class="about.png">
            <img src="images/red.jpg" alt="about">
        </div>
        <div class="about-text">
            <h2>Nosotros</h2>
            <p>Somos profesionales comprometidos con tus proyectos de tecnología. Para nosotros no son simplemente proyectos aislados, para nosotros es una relación ganar-ganar contigo como cliente a muy largo plazo
            </p>
            <br/>
            <p>Hoy en día es de primordial importancia el poder contar con integradores de productos y servicios con una sola compañía que se responsabilice del proyecto total de manera profesional y con prontitud “integrando productos y servicios de alta calidad y prestigio” esto redundará en un resguardo de la inversión ahorrando desde el inicio tiempo y dinero.
            </p>
        </div>

    </section>
    <main id="servicios" class="servicios">

        <h2>Servicios</h2>
        <div class="servicios-content container">
            <div class="servicio-1">
                <img src="images/datacenter.png" alt="datacenter" style="height: 120px; width: 100%; ">
                <h3>DataCenters</h3>
                <p>Diseño, implementación y mantenimiento para TIER I, II, III y IV.</p>
            </div>
            <div class="servicio-1">
                <img src="images/cableado.png" alt="datacenter" style="max-height: 120px; width: 100%; ">
                <h3>Cableado Estructurado</h3>
                <p>Diseño e implementación de proyectos de cableado estructurado de la marca Panduit y Siemon</p>
            </div>
            <div class="servicio-1">
                <img src="images/cctv.png" alt="datacenter" style="max-height: 120px; width: 100%; ">
                <h3>CCTV</h3>
                <p>Diseño e implementación de videovigilancia para empresas, industria y gobierno.</p>

            </div>
            <div class="servicio-1">
                <img src="images/carri.png" alt="datacenter" style="max-height: 120px; width: 100%; ">
                <h3>Carriers</h3>
                <p>Implementación de proyectos de tecnología en enlaces de microondas, estudios de línea de vista fibra óptica planta externa, radiobases</p>

            </div>
            
            <div class="servicio-1">
                <img src="images/intrusion.png" alt="datacenter" style="max-height: 120px; width: 100%; " />
                <h3>Intrusion y control</h3>
                <p>Proyectos de control de acceso, detección de incendio, alarmas especiales</p>
            </div>
            

        </div>
    </main>
    <section id="contact" class="formulario container">
        <form  method="post" autocomplete="off">
            <h2>Informes</h2>
            <div class="input-group">
                <div class="input-container">
                    <input type="text" name="name" placeholder="Nombre">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input-container">
                    <input type="tel" name="phone" placeholder="Telefono">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="input-container">
                    <input type="email" name="email" placeholder="Correo Electronico">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="input-container">
                    <textarea name="message" placeholder="Comentarios"></textarea>
                    
                </div>

                <input type="submit" name="send" class="btn" onclick="myFunction()">
            </div>
        </form>
    </section>

    <footer class="footer">
        <div class="footer-content container">
            <div class="link">
                <a href="#" class="logo">
                <img src="images/log1.PNG" style="height: 50px; width: 100%; " alt="">
                </a>
            </div>
            <div class="link">
                <ul>
                    <li><a href="#home">Inicio</a></li>
                    <li><a href="#we">Nosotros</a></li>
                    <li><a href="#servicios">Servicios</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                
                </ul>

            </div>
        </div>
        

    </footer>
    <?php
        include("send.php")
    ?>
    <script>
        function myFunction() {
            window.location.href="http://localhost/app"
            
        }
    </script>
</body>
</html>