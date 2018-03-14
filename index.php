<?php $page = isset($_GET['page']) ? strtolower($_GET['page']) : 'accueil'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, minimum-scale=1, width=device-width">
    <title>Feldis</title>
    <link href="web/css/feldis.min.css"  rel="stylesheet">
</head>
<body>
<!-- svg symbols -->
<div class="hidden"><?php include_once('web/svg/svg.svg') ?></div>

<!-- header -->
<header id="header" class="header">
    <!-- header: main menu -->
    <div class="rHeader wrap">
        <p class="rHeader-brand">
            <a href="Accueil">
                <img src="web/img/logo.jpg" height="141" width="230" alt="Feldis Leviaux" />
                <span class="sr-only">Accueil</span>
            </a>
        </p>
        <nav id="menu" class="rHeader-nav">
            <ul class="rHeader-nav-main menu">
                <li<?php if($page == 'Accueil') echo ' class="menu-active"' ?>><a href="Accueil"><svg height="18" width="18"><use xlink:href="#symbol-home"></use></svg> <span class="sr-only"> Accueil</span></a></li>
                <li<?php if($page == 'Entreprise') echo ' class="menu-active"' ?>><a href="Entreprise">L'entreprise</a></li>
                <li<?php if($page == 'Competences') echo ' class="menu-active"' ?>><a href="Competences">Compétences</a></li>
                <li<?php if($page == 'Certifications') echo ' class="menu-active"' ?>><a href="Certifications">Certifications</a></li>
                <li<?php if($page == 'Clients') echo ' class="menu-active"' ?>><a href="Clients">Cas clients</a></li>
                <li<?php if($page == 'Environnement') echo ' class="menu-active"' ?>><a href="Environnement">Environnement</a></li>
                <li<?php if($page == 'Actus') echo ' class="menu-active"' ?>><a href="Actus">Actus</a></li>
                <li<?php if($page == 'Offres') echo ' class="menu-active"' ?>><a href="Certifications">Offres</a></li>

            </ul>
            <div class="rHeader-nav-aside">
                <a href="Recherche" class="mr1 color-pink" data-modal="#modal-search"><svg height="24" width="24"><use xlink:href="#symbol-search"></use></svg></a>
                <a href="#Contact" class="cta cta-pink">Contact<svg height="24" width="24"><use xlink:href="#symbol-mail"></use></svg></a>
            </div>
            <button id="close-menu" class="rHeader-nav-close color-pink"><svg height="20" width="20"><use xlink:href="#symbol-close"></use> </svg><span class="sr-only">Fermer</span></button>
        </nav>
        <button id="open-menu" class="rHeader-triggermenu cta cta-pink"><svg height="21" width="21"><use xlink:href="#symbol-menu"></use> </svg><span class="sr-only">Menu</span></button>
    </div>

    <!-- header: sub nav -->
    <?php
//    if (in_array($page, ['identite', 'organisation', 'valeurs'])) {
        include_once('templates/_components/_submenu-presentation.php');
//    }
    ?>
</header>


<!-- page markup -->
<?php require_once('templates/_pages/_' . $page . '.php');?>


<!-- footer -->
<?php //require_once('templates/_components/_footer.php');?>


<!-- modals: search -->
<div id="modal-search" class="modal modal-search" aria-hidden="true">
    <?php include_once('templates/_pages/_recherche.php');?>
    <button class="modal-close" data-modal="#modal-search"><svg height="30" width="30"><use xlink:href="#symbol-close"></use> </svg><span class="sr-only">Fermer</span></button>
</div>


<!-- js -->
<script src="web/js/html5shiv.min.js"></script>
<script src="web/js/feldis.js"></script>

</body>
</html>
