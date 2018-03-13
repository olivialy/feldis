<!-- Presentation subnav -->
<?php $materialList = array('water', 'ice', 'meca', 'decor', 'sfx');?>

<ul class="submenu">
<?php foreach ($materialList as $value) { ?>
    <li<?php if($material == $value) echo ' class="submenu-active"' ?>><a href="Matiere-<?php echo ucfirst($value) ?>"><?php echo $value ?></a></li>
<?php } ?>
</ul>
