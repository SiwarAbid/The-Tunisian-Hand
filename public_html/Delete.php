<?php 
include 'Functions.php';

$id=$_POST["id"];

if($_POST["type"]=="chachia")
return DeletChahia($id);
else if ($_POST["type"]=="jeba")
return Deletjeba($id);
else if ($_POST["type"]=="safsari")
return DeletSafsari($id);
else if ($_POST["type"]=="degla")
return DeletDegla($id);
else if ($_POST["type"]=="zitoun")
return DeletZitoun($id);
else if ($_POST["type"]=="hendi")
return DeletHendi($id);
else if ($_POST["type"]=="gofa")
return DeletGofa($id);
else if ($_POST["type"]=="tbk")
return DeletTabk($id);
else if ($_POST["type"]=="margoum")
return DeletMargom($id);
?>