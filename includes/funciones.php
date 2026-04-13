<?php

require 'app.php';

function incluir_template( string $nombre , array $opt = ['landing' => false, 'pagina' => 'Bienes Raices'] ) : void {

    include TEMPLATE_URL . "/{$nombre}.php";

};

function crear_anuncio( array $anuncio = [
    'titulo' => null,
    'img_ruta' => null,
    'descripcion_corta' => 'Lorem ipsum',
    'precio' => 0,
    'wc' => 0,
    'estacionamientos' => 0,
    'habitaciones' => 0

]) : void { ?>

    <div class="propiedades__card">

        <picture>
            <source srcset="<?= $anuncio['img_ruta'] ?>.webp" type="image/webp">
            <source srcset="<?= $anuncio['img_ruta'] ?>.jpg" type="image/jpeg">
            <img loading="lazy" src="<?= $anuncio['img_ruta'] ?>.jpg" alt="<?= $anuncio['titulo'] ?>">
        </picture>

        <div class="propiedades__content">
            <h3 class="propiedades__title"><?= $anuncio['titulo'] ?></h3>
            <p class="propiedades__text"><?= $anuncio['descripcion_corta'] ?></p>
            <p class="propiedades__price">$<?= number_format($anuncio['precio'], 2) ?></p>

            <ul class="iconos-propiedades">
                <li class="iconos-propiedades__content">
                    <img src="/build/img/icono_wc.svg" alt="Baños">
                    <p><?= $anuncio['wc'] ?></p>
                </li>
                <li class="iconos-propiedades__content">
                    <img src="/build/img/icono_estacionamiento.svg" alt="Estacionamientos">
                    <p><?= $anuncio['estacionamientos'] ?></p>
                </li>
                <li class="iconos-propiedades__content">
                    <img src="/build/img/icono_dormitorio.svg" alt="Dormitorios">
                    <p><?= $anuncio['habitaciones'] ?></p>
                </li>
                
            </ul>
            <a href="/views/anuncio.php" class="boton--amarillo d-block text-uppercase">ver propiedad</a>
        </div> <!--.propiedades__content-->
    </div> <!--.propiedades__card-->

<?php }

function crear_varios_anuncios( array $anuncios, array $opt = [
    'disponibles' => true,
    'limitado' => false,
    'limite' => 3
]) : void {

    if (empty($anuncios)) return;

    // 1. FILTRAR: Primero solo nos quedamos con los que se pueden mostrar
    if ($opt['disponibles']) {
        $anuncios = array_filter($anuncios, function($anuncio) {
            // Solo pasan los que tienen disponible = true
            return isset($anuncio['disponible']) && $anuncio['disponible'] === true;
        });
    }

    $anuncios = array_filter($anuncios, function($anuncio) {
        // Solo pasan los que tienen titulo
        return isset($anuncio['titulo']) && $anuncio['titulo'] ==! null;
    });

    // 2. LIMITAR: cortamos al tamaño deseado
    if ($opt['limitado']) {
        $anuncios = array_slice($anuncios, 0, $opt['limite']);
    }

    // 3. MOSTRAR: ahora siempre recibirá anuncios listos para imprimir
    foreach ($anuncios as $anuncio) {
        crear_anuncio($anuncio);
    }
}

function obtener_json( string $ruta_archivo = '/config/anuncios.json' ) : array|null {
    
    try {

        $json_string = file_get_contents( __DIR__ . $ruta_archivo );

        if ($json_string === false) return null;

        $datos = json_decode($json_string, true);

        return $datos;

    } catch (\Throwable $th) {
        return null;
    }
}