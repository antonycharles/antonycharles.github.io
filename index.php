<?php
    include 'functions/langs.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?= langs('title.title'); ?></title>
    <link type="text/css" rel="stylesheet" href="css/reset.css"/>
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <link href="https://fonts.googleapis.com/css?family=Audiowide&display=swap" rel="stylesheet"/><!--font-family: 'Audiowide', sans-serif;-->
    <script src="https://kit.fontawesome.com/3e96037d7e.js" crossorigin="anonymous"></script>
    <link rel="icon" href="images/favicons/android-chrome-192x192.png" sizes="192x192" type="image/png">
    <link rel="icon" href="images/favicons/android-chrome-512x512.png" sizes="512x512" type="image/png">
    <link rel="icon" href="images/favicons/apple-touch-icon.png" sizes="180x180" type="image/png">
    <link rel="icon" href="images/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="icon" href="images/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
</head>
<body id="body-topo">
    <header id="header-top" class="header-top">
        <div class="grid">
            <div class="row">
                <div class="cl-m-3 cl-g-2">
                    
                    <figure class="header-logo">
                        <a href="#body-topo" onclick="header.scrollLink(this,event)" data-logo="true">
                            <h1><img src="images/logo-antony-charles.png" alt="Antony Charles"/></h1>
                        </a>
                    </figure>
                    <div id="header-button" class="header-button" onclick="header.changeMenuMobile()">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </div>
                <div class="cl-m-9 cl-g-10 header-mobile-show" style="display:none">
                    <nav class="header-nav">
                        <ul class="header-nav-ul">
                            <li>
                                <a href="#quem-sou" onclick="header.scrollLink(this,event)"><?= langs('links.Sobre'); ?></a>
                            </li>
                            <li>
                                <a href="#formacao-academica" onclick="header.scrollLink(this,event)"><?= langs('links.Formacao'); ?></a>
                            </li>
                            <li>
                                <a href="#experiencia-profissional" onclick="header.scrollLink(this,event)"><?= langs('links.Experiencia'); ?></a>
                            </li>
                            <li>
                                <a href="#projetos" onclick="header.scrollLink(this,event)"><?= langs('links.Projetos'); ?></a>
                            </li>
                            <li>
                                <a href="#cursos-extras" onclick="header.scrollLink(this,event)"><?= langs('links.Outros'); ?></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <main>
        <aside id="banner" class="banner">
            <div class="banner-text">
                <h2><?= langs('title.DesenvolvimentoWeb'); ?></h2>
                <h4>Criando soluções para o amanhã!</h4>
            </div>
            <canvas id="animacao"></canvas>
        </aside>
        <?php include 'quem-sou.php'; ?>
        <?php include 'formacao-academica.php'; ?>
        <?php include 'experiencia-profissional.php'; ?>
        <?php include 'projetos.php'; ?>
        <?php include 'outros.php'; ?>
    </main>
    <footer>
        <div class="grid-fluid box-contatos text-center">
            <div class="grid">
                <div class="row">
                    <div class="cl-12 cl-m-12">
                        <ul>
                            <li>
                                <a href="mailto:<?= langs('links.MeuEmail'); ?>" title="<?= langs('links.MeuEmail'); ?>" target="_blank">
                                    <i class="far fa-envelope"></i>
                                    <?= langs('links.MeuEmail'); ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?= langs('links.MeuGitHub'); ?>" target="_blank">
                                    <i class="fab fa-github" target="_blank" aria-hidden="true"></i>GitHub
                                </a>
                            </li>
                            <li>
                                <a href="<?= langs('links.MeuLinkedin'); ?>" target="_blank">
                                    <i class="fab fa-linkedin" aria-hidden="true"></i>Linkedin
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid-fluid box-contatos-rodape">
            <div class="grid">
                <div class="row">
                    <div class="cl-12">
                        <h6>2019 - <?= date('Y'); ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="script/script.js"></script>
</body>
</html>