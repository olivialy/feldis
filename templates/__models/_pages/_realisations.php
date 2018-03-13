<section id="works" class="mb6">
    <div class="rCover rCover-realisations">
        <div class="sectionhead sectionhead-black">
            <div class="sectionhead-content wrap">
                <h1>Nos réalisations</h1>
            </div>
        </div>
    </div>

    <div id="worknav" class="wrap align-center pt2">
        <h2 class="mb1">Choisissez une matière</h2>
        <ul class="worknav mb2">
            <li class="worknav-water<?php if ($material == 'water') echo " worknav-active" ?>"><a href="Realisations-Water#worknav"><svg height="95" width="95"><use xlink:href="#symbol-crystal-water"></use></svg></a></li>
            <li class="worknav-ice<?php if ($material == 'ice') echo " worknav-active" ?>"><a href="Realisations-Ice#worknav"><svg height="95" width="95"><use xlink:href="#symbol-crystal-ice"></use></svg></a></li>
            <li class="worknav-meca<?php if ($material == 'meca') echo " worknav-active" ?>"><a href="Realisations-Meca#worknav"><svg height="95" width="95"><use xlink:href="#symbol-crystal-meca"></use></svg></a></li>
            <li class="worknav-decor<?php if ($material == 'decor') echo " worknav-active" ?>"><a href="Realisations-Decor#worknav"><svg height="95" width="95"><use xlink:href="#symbol-crystal-decor"></use></svg></a></li>
            <li class="worknav-sfx<?php if ($material == 'sfx') echo " worknav-active" ?>"><a href="Realisations-SFX#worknav"><svg height="95" width="95"><use xlink:href="#symbol-crystal-sfx"></use></svg></a></li>
        </ul>

        <?php
        if ($material) {
            include_once('templates/_components/_sectionnav-material.php');
        }
        ?>

    <!-- works -->
    <?php include_once('templates/_components/_works.php') ?>

    <!-- view all cta -->
    <p><a id="trigger-work-rows" href="Realisations/Tout" class="cta" data-maxindex="5" data-show="3">EN VOIR +</a></p>

    </div>
</section>
