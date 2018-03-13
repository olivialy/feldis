<?php $material = strtolower($_GET['material']) ?>
<div class="rCover rCover-<?php echo $material ?>">
    <div class="sectionhead sectionhead-black">
        <div class="sectionhead-content wrap">
            <h1><?php echo $material ?></h1>
            <p class="sectionhead-subheading wrap-small">La glace est la matière de prédilection de Crystal Group. <strong>Depuis plus de 20 ans</strong>, nous utilisons cette glace ainsi que le givre pour rendre vos événements élégants et uniques. Nous sculptons, créons et imaginons vos décors intérieurs, extérieurs et vos animations. <strong>Un peu de magie surgit autour de vous et un parfum de pureté accompagne votre image.</strong></p>
        </div>
    </div>
</div>

<section class="tMaterial tMaterial-<?php echo $material?> wrap pt2 pb2">
    <div class="r2cols wrap-medium align-center">
        <div class="r2cols-child r2cols-first">
            <h2>La matière</h2>
            <p>La glace et le givre, deux matières qui subliment et mettent en valeur votre événement ou votre décor. Par le caractère éphémère de la glace, chaque pièce produite devient unique. <strong>Bars en glace, ice bars, décors de buffets, de tables , performance live, pistes de luge, patinoires</strong>, la glace se décline dans des réalisations simples ou des œuvres plus monumentales.</p>
            <p><span>Une matière pour sublimer</span></p>
        </div>
        <div class="r2cols-child">
            <img src="web/img/empty.jpg" height="320" width="600" alt="lorem ipsum" />
        </div>
    </div>
</section>

<section class="tMaterial tMaterial-<?php echo $material?> bg-grey pt2 pb2">
    <div class="wrap">
        <div class="r2cols wrap-medium align-center">
            <div class="r2cols-child">
                <img src="web/img/empty.jpg" height="320" width="600" alt="lorem ipsum" />
            </div>
            <div class="r2cols-child r2cols-first">
                <h2>Nos artistes</h2>
                <p>Dans l’atelier de Crystal Group, ce sont <strong>plus d’une dizaine de sculpteurs</strong> qui œuvrent à la création de sculptures et de décors en glace et/ou en givre. Nos professionnels se déplacent également lors de vos événements afin de sculpter en direct, une animation toujours très appréciée. Tous passionnés, nos <strong>sculpteurs sont des artistes reconnus mais également des techniciens de la glace</strong> qui se remettent sans cesse en question afin d’innover et de se perfectionner. </p>
                <p><span>L’art et l’innovation</span></p>
            </div>
        </div>
    </div>
</section>

<section class="tMaterial tMaterial-<?php echo $material?> r2cols wrap pt2 pb4">
    <div class="r2cols wrap-medium align-center">
        <div class="r2cols-child r2cols-first">
            <h2>Nos métiers</h2>
            <p>Autour de la glace et du givre, nos équipes de techniciens créent une glace particulièrement transparente et de qualité, issue d’<strong>un procédé breveté (1989) par Crystal Group</strong>. Nous nous occupons ensuite de tout livrer et d’installer sur le lieu de votre événement, <strong>partout en France et dans le monde</strong>, grâce à notre logistique encadrée et minutieuse.</p>
            <p><span>L’art et la Rigueur</span></p>
        </div>
        <div class="r2cols-child">
            <img src="web/img/empty.jpg" height="320" width="600" alt="lorem ipsum" />
        </div>
    </div>
</section>

<section id="keyfigures" class="keyfigures<?php if ($material == 'water') echo ' keyfigures-water'?>">
    <div class="wrap align-center keyfigures-content">
        <h2>Matière à réflexion</h2>
        <ul class="wrap-medium">
            <li><span class="keyfigures-counter">300</span>projets glace et givre par an</li>
            <li><span class="keyfigures-counter">5000</span>mètres carrés de tapis glacier</li>
            <li><span class="keyfigures-counter">600</span>tonnes de glace fabriquées / an</li>
            <li><span class="keyfigures-counter">2</span>médailles d’or au championnat du monde de sculpture sur glace</li>
        </ul>
    </div>
</section>

<section class="pt3">
    <div class="wrap align-center pb3">
        <h2>Nos réalisations Glace et givre</h2>
        <p class="wrap-small">Découvrez nos réalisations où la glace et le givre <strong>subliment et animent vos événements tout au long de l’année</strong>. Nous créons des décors intérieurs ou extérieurs tout en glace et/ou en givre (marchés de Noël, vitrines, monuments nationaux…), nous installons des patinoires ou des pistes de neige qui s’adapteront à la dimension de votre projet. </p>
    </div>

    <div class="bg-grey pt1 pb3">
        <div class="wrap align-center">
            <?php include_once('templates/_components/_sectionnav-material.php'); ?>
            <?php include_once('templates/_components/_works.php') ?>
            <p><a class="cta" href="Realisations">EN VOIR +</a></p>
        </div>
    </div>
</section>

<section class="wrap align-center pt4 pb2">
    <h2 class="brandline">Découvrez les autres matières</h2>
    <ul class="worknav mb2">
        <?php
        $materialList = array('water', 'ice', 'meca', 'decor', 'sfx');

        foreach ($materialList as $value) {
            if ($value != $material) { ?>
                <li class="worknav-<?php echo $value ?>"><a href="Matiere-<?php echo ucfirst($value) ?>"><svg height="95" width="95"><use xlink:href="#symbol-crystal-<?php echo $value ?>"></use></svg></a></li>
            <?php }
        }
        ?>
    </ul>
</section>
