<?php
include 'Functions.php';

$Prix=$_POST["Prix"];
$Description=$_POST["Description"];
$Image=$_POST["Image"];
$Stock=$_POST["Stock"];
$couleur=$_POST["couleur"];


if($_POST["type"]=="chachia")
return AjouterChachia($Prix,$Description,$Image,$Stock,$couleur);
else if ($_POST["type"]=="jeba")
return AjouterJeba($Prix,$Description,$Image,$Stock,$couleur);
else if ($_POST["type"]=="safsari")
return AjouterSafsari($Prix,$Description,$Image,$Stock,$couleur);
else if ($_POST["type"]=="degla")
return AjouterDegla($Prix,$Description,$Image,$Stock);
else if ($_POST["type"]=="zitoun")
return AjouterZitoun($Prix,$Description,$Image,$Stock);
else if ($_POST["type"]=="hendi")
return AjouterHendi($Prix,$Description,$Image,$Stock);
else if ($_POST["type"]=="gofa")
return AjouterGofa($Prix,$Description,$Image,$Stock,$couleur);
else if ($_POST["type"]=="tbk")
return AjouterTabak($Prix,$Description,$Image,$Stock,$couleur);
else if ($_POST["type"]=="margoum")
return AjouterMargom($Prix,$Description,$Image,$Stock,$couleur);
?>
