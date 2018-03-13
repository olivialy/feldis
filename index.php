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
        <a href="Accueil" class="rHeader-brand">
            <span class="sr-only">Accueil</span>
        </a>
        <nav id="menu" class="rHeader-nav">
            <ul class="rHeader-nav-main menu">
                <li<?php if($page == 'accueil') echo ' class="menu-active"' ?>><a href="Accueil">Accueil</a></li>
            </ul>
            <p class="rHeader-nav-aside">
                <a href="#Contact">Contact<svg height="24" width="24"><use xlink:href="#symbol-mail"></use></svg></a>
            </p>
            <button id="close-menu"><svg height="30" width="30"><use xlink:href="#symbol-close"></use> </svg><span class="sr-only">Fermer</span></button>
        </nav>
        <button id="open-menu"><svg height="21" width="21"><use xlink:href="#symbol-menu"></use> </svg><span class="sr-only">Menu</span></button>
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
<?php require_once('templates/_components/_footer.php');?>

<!-- js -->
<script src="web/js/html5shiv.min.js"></script>
<script src="web/js/feldis.js"></script>

</body>
</html>
