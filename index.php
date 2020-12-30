<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!------- CSS -------->
    <link rel="stylesheet" href="CV.css">

    <!------- BOX ICONS -------->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <title>Mi CV</title>

</head>

<body>

    <!------- HEADER -------->

    <header class="header-1">
        <nav class="nav bd-grid">
            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>

            <div class="div-menu-superior">
                <a href="#" class="nav__logo">José David</a>
            </div>


            <div class="nav__menu" id="nav-menu">
                <div class="nav__close" id="nav-close">
                    <i class='bx bx-x'></i>
                </div>

                <ul class="nav__list">
                    <li class="nav__item"><a href="#principal" class="nav__link active">Principal</a></li>
                    <li class="nav__item"><a href="#experiencia" class="nav__link">Experiencia laboral</a></li>
                    <li class="nav__item"><a href="#educacion" class="nav__link">Formación y certificaciones</a></li>
                    <li class="nav__item"><a href="#proyectos" class="nav__link">Proyectos</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="1-main">


        <!------- HOME -------->
        <section class="home" id="principal"></section>
        <div class="home__container bd-grid">
            <div class="home__data">
                <div class="home__img">
                    <img src="Imágenes de prueba/foto-perfil.jpg" alt="Foto de perfil José David">
                </div>

                <h1 class="home__title">José David Frías Jiménez</h1>

                <span class="home__profession">Consultor SEO - Desarrollo de negocios digitales</span>

                <div class="home__social">

                    <div class="sobre-mi__informacion">


                        <div class="sobre-mi__telefono">
                            <i class='bx bxs-phone'></i>
                            <span>+34 633 93 09 94</span>
                        </div>

                        <div class="sobre-mi__email">
                            <i class='bx bx-mail-send'></i>
                            <span>josedavidfriasjimenez@gmail.com</span>
                        </div>

                        <div>
                            <a href="https://www.linkedin.com/in/jose-david-frias-jimenez/" target="blank"
                                class="home__social-link"><i class='bx bxl-linkedin'></i></a>
                            <a href="https://github.com/jdfj94?tab=repositories" target="blank"
                                class="home__social-link"><i class='bx bxl-github'></i></a>
                        </div>
                    </div>

                    <a download="" target="blank" href="Imágenes de prueba/CV_Jose_David_Frias_Jimenez_Enero_2021.pdf"
                        class="button home__button">Descargar CV</a>

                </div>
            </div>
        </div>

        <!------- EXPERIENCIA -------->
        <section class="experiencia section" id="experiencia">
            <h2 class="section-title">Experiencia laboral</h2>

            <div class="experiencia__container bd-grid">

                <div class="experiencia__1">
                    <img class="experiencia__1-1-imagen" src="Imágenes de prueba/1mib.png" alt="logo 1mib">
                    <span>
                        <h3 class="experiencia__1-titulo">Desarrollo de negocios digitales en una incubadora de
                            proyectos</h3>
                    </span>
                </div>
                <p class="experiencia__1-fecha">Marzo 2019 - Actualidad</p>
                <ul class="experiencia__1-parrafo">
                    <li>SEO (Inbound, analítica y CRO) y SEM (en buscadores y RRSS).</li>
                    <li>CRM para la gestión de leads y cciones comerciales. </li>
                    <li>CRO en posts de Inbound y landings de captación.</li>
                    <li>Herramientas de Google. GA, GSC, GTM, DataStudio.</li>
                    <li>Herramientas externas de analítica de KWs y SEO: Ubersuggest, Keyword Surfer...</li>
                    <li>Linkbuilding. Colaboración con periódicos, blogs temáticos de cada sector...</li>
                    <li>Venta de leads y productos de afiliación. Gestión con plataformas de terceros.</li>
                    <li>Integración de herramientas de terceros. Chatbots, popups...</li>
                </ul>
            </div>


            <div class="experiencia__container bd-grid">

                <div class="experiencia__1 experiencia__2">
                    <img class="experiencia__1-imagen" src="Imágenes de prueba/cajasiete.png" alt="logo cajasiete">
                    <span>
                        <h3 class="experiencia__1-titulo">Desarrollo de negocios digitales en una incubadora de
                            proyectos</h3>
                    </span>
                </div>
                <p class="experiencia__1-fecha">Enero 2018 - Diciembre 2018</p>
                <ul class="experiencia__1-parrafo">
                    <li>Gestión de productos comerciales de la sucursal bancaria.</li>
                    <li>Funciones de caja y atención al cliente </li>
                </ul>
            </div>
        </section>

        <!------- EDUCACION -------->
        <section class="section educacion" id="educacion">
            <h2 class="section-title ">Estudios y formación</h2>

            <div class="educacion__container bd-grid">
                <div class="educacion__contenido">
                    <div>
                        <h3 class="educacion__año">2012 - 2017</h3>
                        <span class="educacion__universidad">Universidad de La Laguna</span>
                    </div>

                    <div>
                        <span class="educacion__redondo"></span>
                        <span class="educacion__linea"></span>
                    </div>

                    <div>
                        <h3 class="educacion__carrera">Administración y Dirección de Empresas</h3>
                    </div>

                </div>

                <div class="educacion__contenido">
                    <div class="educacion__bloque-1">
                        <h3 class="educacion__año">2017 - 2018</h3>
                        <span class="educacion__universidad">GADE Business School</span>
                    </div>

                    <div class="educacion__tiempo">
                        <span class="educacion__redondo"></span>
                        <span class="educacion__linea"></span>
                    </div>

                    <div>
                        <h3 class="educacion__carrera">MBA</h3>
                    </div>
                </div>

                <div class="licencias">
                    <h2 class="licencias-titulo">Licencias y certificaciones</h2>

                    <div class="licencias__pack">
                        <div class="licencias__bloque">
                            <img class="logo__licencias" src="Imágenes de prueba/semrush.png" alt="logo semrush">
                            <div class="licencias_div">
                                <p class="licencia-titulo">Certificado de la herramienta SEMRush</p>
                                <p class="p-licencias">Fecha de expedición: noviembre 2020</p>
                            </div>
                        </div>

                        <div class="licencias__bloque">
                            <img class="logo__licencias" src="Imágenes de prueba/logo-google.png" alt="logo Google">
                            <div class="licencias_div">
                                <p class="licencia-titulo">Certificación en Search Ads de Google</p>
                                <p class="p-licencias">Fecha de expedición: junio 2020</p>
                            </div>
                        </div>

                        <div class="licencias__bloque">
                            <img class="logo__licencias" src="Imágenes de prueba/logo-google.png" alt="logo Google">
                            <div class="licencias_div">
                                <p class="licencia-titulo">Certificación en Display Ads de Google</p>
                                <p class="p-licencias">Fecha de expedición: junio 2020</p>
                            </div>
                        </div>

                        <div class="licencias__bloque">
                            <img class="logo__licencias" src="Imágenes de prueba/udemy.png" alt="logo Udemy">
                            <div class="licencias_div">
                                <p class="licencia-titulo">Curso avanzado de HTML y CSS Udemy</p>
                                <p class="p-licencias">Fecha de expedición: junio 2020</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>

        <!------- PROYECTOS -------->

        <section class="section proyectos" id="proyectos">
            <h2 class="section-title">Proyectos recientes</h2>

            <div class="trabajos__container bd-grid">

                <div class="trabajos__img">
                    <img src="Imágenes de prueba/proyecto-alex.jpg" alt="Proyecto alex photographer">

                    <a href="https://www.alxphotographer.com/" target="blank">
                        <div class="trabajos__data">
                            <span class="trabajos__titulo">Web de fotografía</span>
                            <span class="trabajos__descripcion">Creación de sitio web para un fotógrafo. Web de 8
                                páginas + blog autogestionable. </span>
                            <i class='bx bx-link-alt trabajos__link'></i>
                        </div>
                    </a>
                </div>

            <div class="trabajos__img">
                <img src="Imágenes de prueba/proyecto-legado.jpg" alt="Proyecto Legado Nazarí">

                <a href="https://legadonazari.com/" target="blank"><div class="trabajos__data">
                    <span class="trabajos__titulo">Tienda de botellas de aceite</span>
                    <span class="trabajos__descripcion">Creación de tienda online con Woocommerce. </span>
                    <i class='bx bx-link-alt trabajos__link'></i>
                    </div>
                </a>
            </div>

            <div class="trabajos__img">
                <img src="Imágenes de prueba/proyecto-reconocimientos.jpg" alt="Proyecto Reconocimientos Tegueste">

                <a href="https://www.reconocimientostegueste.com/" target="blank"><div class="trabajos__data">
                    <span class="trabajos__titulo">Centro de reconocimientos</span>
                    <span class="trabajos__descripcion">Rediseño de sitio web, alta de Google my
                        Business y creación de campañas de Ads con altos retornos. </span>
                    <i class='bx bx-link-alt trabajos__link'></i>
                    </div>
                </a>
            </div>

            <div class="trabajos__img">
                <img src="Imágenes de prueba/proyecto-afiliacion.jpg" alt="Proyecto Tienda  de afiliación">

                <a href="https://helpycare.com/tienda/" target="blank"><div class="trabajos__data">
                    <span class="trabajos__titulo">Tienda de afiliación</span>
                    <span class="trabajos__descripcion">Montaje del diseño, estructura y redacción de una tienda de
                    afiliación para una startup digital. </span>
                    <i class='bx bx-link-alt trabajos__link'></i>
                    </div>
                </a>
            </div>
            </div>

        </section>

        <!------- CONTACTO -------->

        <section class="section contacto" id="contacto">
            <h2 class="section-title">Contacta conmigo</h2>

            <div class="bloque__contacto">

                <div class="contacto__container">
                    <form action="" class="formulario__contacto">
                        <div class="inputs__contacto">
                            <input type="text" placeholder="Nombre" class=input__contacto>
                            <input type="mail" placeholder="Email" class=input__contacto>
                        </div>

                        <input type="text" placeholder="Proyecto" class="input__contacto">

                        <textarea name="" id="" cols="30" rows="10" placeholder="Mensaje"
                            class="input__contacto"></textarea>

                        <input type="submit" value="Enviar mensaje" class="button boton__contacto">
                    </form>
                </div>

                <div class="div__info">
                    <div class="info__contacto">
                        <h3 class="contacto__subtitulo">Número de teléfono</h3>
                        <span class="texto__contacto">+34 633 93 09 94</span>
                    </div>

                    <div class="info__contacto">
                        <h3 class="contacto__subtitulo">E-mail</h3>
                        <span class="texto__contacto">josedavidfriasjimenez@gmail.com</span>
                    </div>

                    <div class="info__contacto">
                        <h3 class="contacto__subtitulo">Localización</h3>
                        <span class="texto__contacto">Madrid - España</span>
                    </div>
                </div>
            </div>
        </section>



    </main>

    <footer class="footer" id="footer">
        <div class="footer__container bd-grid">
            <h1 class="footer__titulo">José David Frías Jiménez</h1>
            <p class="footer__descripcion">Curriculum Vitae actualizado en enero de 2021.</p>

            <div class="footer__social">
                <a href="https://www.linkedin.com/in/jose-david-frias-jimenez/" target="blank" class="footer__link"><i
                        class='bx bxl-linkedin-square'></i></a>
            </div>
        </div>
    </footer>


    <!------- JS PRINCIPAL -------->
    <script src="CV.js"></script>


</body>

</html>