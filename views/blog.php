<?php 

    require '../includes/app.php';
    require FUNCIONES_URL;

    $opt = [ 'pagina' => 'blog' ];

    incluir_template( 'header' , $opt );
?>

    <main class="container seccion blog contenido-centrado">
        <h1>Nuestro Blog</h1>
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
        <article class="blog__entrada">
            <div class="blog__imagen">
                <picture>
                    <source srcset="/build/img/blog3.webp" type="image/webp">
                    <source srcset="/build/img/blog3.jpg" type="image/jpeg">
                    <img loading="lazy" src="/build/img/blog3.jpg" alt="Entrada Blog 3">
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
                    <source srcset="/build/img/blog4.webp" type="image/webp">
                    <source srcset="/build/img/blog4.jpg" type="image/jpeg">
                    <img loading="lazy" src="/build/img/blog4.jpg" alt="Entrada Blog 4">
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
    </main>

<?php

    incluir_template( 'footer' , $opt );
?>