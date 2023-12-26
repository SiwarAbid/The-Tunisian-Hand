<?php
include 'Functions.php';

$id=$_POST["id"];
$Prix=$_POST["Prix"];
$Description=$_POST["Description"];
$Image=$_POST["Image"];
$Stock=$_POST["Stock"];
$couleur=$_POST["couleur"];

if($_POST["type"]=="chachia")
return updatChachia($id,$Prix,$Description,$Image,$Stock,$couleur);
else if ($_POST["type"]=="jeba")
return updatJeba($id,$Prix,$Description,$Image,$Stock,$couleur);
else if ($_POST["type"]=="safsari")
return updatSafsari($id,$Prix,$Description,$Image,$Stock,$couleur);
else if ($_POST["type"]=="degla")
return updatDegla($id,$Prix,$Description,$Image,$Stock,$couleur);
else if ($_POST["type"]=="zitoun")
return updatZitoun($id,$Prix,$Description,$Image,$Stock,$couleur);
else if ($_POST["type"]=="hendi")
return updatHendi($id,$Prix,$Description,$Image,$Stock,$couleur);
else if ($_POST["type"]=="gofa")
return updatGofa($id,$Prix,$Description,$Image,$Stock,$couleur);
else if ($_POST["type"]=="tbk")
return updatTabak($id,$Prix,$Description,$Image,$Stock,$couleur);
else if ($_POST["type"]=="margoum")
return updatMargom($id,$Prix,$Description,$Image,$Stock,$couleur);
?>
