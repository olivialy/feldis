<!-- Presentation subnav -->

<?php if (in_array($page, ['competences', 'competence'])) { ?>
    <ul class="submenu">
        <li<?php if ($skill === 'peinture') echo ' class="submenu-active"' ?>><a href="Competence-Peinture">peinture</a></li>
        <li<?php if ($skill === 'menuiserie') echo ' class="submenu-active"' ?>><a href="Competence-Menuiserie">menuiserie</a></li>
        <li<?php if ($skill === 'vitre') echo ' class="submenu-active"' ?>><a href="Competence-Vitre">vitrerie</a></li>
        <li<?php if ($skill === 'ravalement') echo ' class="submenu-active"' ?>><a href="Competence-Ravalement">ravalement</a></li>
        <li<?php if ($skill === 'sol') echo ' class="submenu-active"' ?>><a href="Competence-Sol">revêtement sol</a></li>
        <li<?php if ($skill === 'platre') echo ' class="submenu-active"' ?>><a href="Competence-Platre">plâtrerie</a></li>
    </ul>
<?php } else if (in_array($page, ['secteurs', 'secteur'])) {?>
    <ul class="submenu">
        <li<?php if ($sector === 'collectivite') echo ' class="submenu-active"' ?>><a href="Secteur-Collectivite">Collectivités locales</a></li>
        <li<?php if ($sector === 'assurance') echo ' class="submenu-active"' ?>><a href="Secteur-Assurance">Assurances</a></li>
        <li<?php if ($sector === 'hotel') echo ' class="submenu-active"' ?>><a href="Secteur-Hotel">Hôtellerie</a></li>
        <li<?php if ($sector === 'bailleur') echo ' class="submenu-active"' ?>><a href="Secteur-Bailleur">Bailleurs sociaux</a></li>
        <li<?php if ($sector === 'grandcompte') echo ' class="submenu-active"' ?>><a href="Secteur-GrandCompte">Grands comptes</a></li>
    </ul>
<?php } ?>
