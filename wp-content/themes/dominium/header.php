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
        <section id="header-superior">
                <div class="container">
                    <div class="plataformas">
                        <ul>
                            <li><img src="<?php echo theme_image('logo-pitagoras.svg') ?>" alt="Logo rede Pitágoras"></li>
                            <li><img src="<?php echo theme_image('logo-escola-da-inteligencia.svg') ?>" alt="Logo Escola da Inteligência"></li>
                        </ul>
                    </div>
                    
                    <div class="links-externos">
                        <ul>
                            <li><a href="https://dominiumteofilandia.eduxego.com.br/login" target="_blank">Área do aluno</a></li>
                            <li><a href="https://dominiumteofilandia.eduxe.com.br/login" target="_blank">Área do professor</a></li>
                            <li><a href="https://email.uolhost.com.br/colegiodominium.com.br/" target="_blank">Email institucional</a></li>
                            <li><a href="https://wa.me/5575992054298?text=Ol%C3%A1%21+Vim+pelo+website+do+Col%C3%A9gio+Dominium" target="_blank"><img src="<?php echo theme_image('whatsapp.svg') ?>" alt="Botão Whatsapp"></a></li>
                            <li><a href="https://www.instagram.com/dominium.teof/?hl=pt-br"  target="_blank"><img src="<?php echo theme_image('instagram.svg') ?>" alt="Botão Instagram"></a></li>
                        </ul>
                    </div>
                </div>
            </section>
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