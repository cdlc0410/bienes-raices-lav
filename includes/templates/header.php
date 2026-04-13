<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/build/css/app.css">
    <title><?= ucwords($opt['pagina']) ?></title>
</head>
<body>
    <header class="header <?= $opt['landing'] ? "landing" : "" ?>">
        <div class="header__content container">
            <div class="container--bar">
                <div class="menu">

                    <a href="/">
                        <img class="menu__logo" loading="lazy" src="/build/img/logo.svg" alt="Logotipo de Bienes Raices">
                    </a>
    
                    <div class="menu__bar">
                        <img src="/build/img/barras.svg" alt="menu responsive">
                    </div>
                </div>

                <nav class="navbar">
                    <?php include 'nav.php'; ?>
                    <div class="dark-mode-boton">
                        <img src="/build/img/dark-mode.svg" alt="darkmode">
                    </div>
                </nav>

            </div> <!--.container--bar-->

            <?php if($opt['landing']) { ?>
                <h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>
            <?php } ?>
            
        </div>
    </header>