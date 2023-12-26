<?php
include_once 'Functions.php';
$Lib=$_POST["Lib"];
$Coef$_POST["Lib"];
$Responsable
$t=Parcourir();
foreach($t as $k => $v){
?>
<h5>Matiere <?=$v["id"]?>:</h5>
<ul> <?php
if($k=="Lib"){?>
    <li><?=$k?>elle: <?=$v?></li><?php }?>
    <?php if($k=="Coef"){?>
    <li><?=$k?>fficient: <?=$v?></li><?php }?>
    <li><?=$k?>: <?=$v?></li>
    </ul>
    <?php }?>
<a href="accueil.html">Revenir à la page précédente</a>
