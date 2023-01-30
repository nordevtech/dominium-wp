<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
    </head>
    <body>
    <header>
            <div class="container">
                <div class="logo">
                    <img src="<?php echo theme_image('logo-dominium.svg') ?>" alt="Logo Colégio Dominium">
                </div>
                <nav>
                    <input type="checkbox" id="click">
                    <label for="click" class="menu-btn">
                    <i class="fas fa-bars"></i>
                    </label>
                    <ul>
                        <li><a href="index.html" id="atual" class="active">Página Inicial</a></li>
                        <li><a href="sobre-nos.html">Sobre nós</a></li>
                        <li><a href="ensino.html">Ensino</a></li>
                        <li><a href="calendario.html">Calendário</a></li>
                        <li><a href="noticias.html">Notícias</a></li>
                        <li><a href="galeria.html">Galeria</a></li>
                        <li><a href="acervo.html" class="nav-border">Acervo</a></li>
                        <li><a href="livraria.html" class="nav-border">Livraria</a></li>
                        <li><a href="matricula.html" class="nav-border">Matrícula</a></li>
                    </ul>
                </nav>
            </div>
        </header>