<?php 

    require 'includes/funciones.php';

    $opt = [ 'landing' => true, 'pagina' => 'inicio' ];

    incluir_template( 'header' , $opt );
?>

    <main class="container seccion">
        <h2>Mas Sobre Nosotros</h2>
        <section class="iconos-nosotros">
            <div class="icono">
                <img loading="lazy" src="/build/img/icono1.svg" alt="Icono Seguridad">
                <h3>Seguridad</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam, sed! Distinctio fugit dolorum, rerum quidem similique, molestiae sed sunt deleniti itaque consectetur reprehenderit? Aliquid repudiandae deserunt voluptatum doloribus optio esse!</p>
            </div>
            <div class="icono">
                <img loading="lazy" src="/build/img/icono2.svg" alt="Icono Precio">
                <h3>Precio</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam, sed! Distinctio fugit dolorum, rerum quidem similique, molestiae sed sunt deleniti itaque consectetur reprehenderit? Aliquid repudiandae deserunt voluptatum doloribus optio esse!</p>
            </div>
            <div class="icono">
                <img loading="lazy" src="/build/img/icono3.svg" alt="Icono Tiempo">
                <h3>Tiempo</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam, sed! Distinctio fugit dolorum, rerum quidem similique, molestiae sed sunt deleniti itaque consectetur reprehenderit? Aliquid repudiandae deserunt voluptatum doloribus optio esse!</p>
            </div>
        </section>
    </main>

    <section class="container seccion">
        <h2>Casas y Departamentos</h2>
        <div class="propiedades">
            <div class="propiedades__cards">
                <?php 
                    crear_varios_anuncios(obtener_json(),  [
                        'disponibles' => false,
                        'limitado' => true,
                        'limite' => 3
                    ]);
                ?>
            </div> <!--.propiedades__cards-->
            <div class="alinear-derecha">
                <a href="/views/anuncios.php" class="boton--verde">Ver Todas las Propiedades</a>
            </div>
        </div> <!--.propiedades-->
    </section>

    <section class="imagen-contactar">
        <h2 class="contactar__title text-white text-black">Encuentra la Casa de tus Sueños</h2>
        <p class="text-center text-white">Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
        <a href="/views/anuncios.php" class="boton--amarillo d-inline ">Contactanos</a>
    </section>
    
    <div class="container seccion inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>

            <article class="blog__entrada">
                <div class="blog__imagen">
                    <picture>
                        <source srcset="/build/img/blog1.webp" type="image/webp">
                        <source srcset="/build/img/blog1.jpg" type="image/jpeg">
                        <img loading="lazy" src="/build/img/blog1.jpg" alt="Entrada Blog 1">
                    </picture>
                </div>
                <div class="blog__text">
                    <a href="/views/entrada.php">
                        <h4 class="blog-underline">Terraza en el Techo de tu Casa</h4>
                        <p class="meta-info">Escrito el: <span>20/03/2026</span> por: <span>Admin</span>.</p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Error sapiente aperiam doloribus tempore, ut natus?
                        </p>
                    </a>
                </div>
            </article>
            <article class="blog__entrada">
                <div class="blog__imagen">
                    <picture>
                        <source srcset="/build/img/blog2.webp" type="image/webp">
                        <source srcset="/build/img/blog2.jpg" type="image/jpeg">
                        <img loading="lazy" src="/build/img/blog2.jpg" alt="Entrada Blog 2">
                    </picture>
                </div>
                <div class="blog__text">
                    <a href="/views/entrada.php">
                        <h4 class="blog-underline">Guia para la decoracion de tu Hogar</h4>
                        <p class="meta-info">Escrito el: <span>20/03/2026</span> por: <span>Admin</span>.</p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Error sapiente aperiam doloribus tempore, ut natus?
                        </p>
                    </a>
                </div>
            </article>
        </section>
        <aside class="testimoniales">
            <h3>Testimoniales</h3>

            <div class="testimonial">
                <blockquote>
                     El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas mis expectativas. 
                </blockquote>
                <p>- Juan de la Torre</p>
            </div>
        </aside>
    </div>

<?php

    incluir_template( 'footer' , $opt );
?>