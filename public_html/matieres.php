<?php 
session_start();
if(!isset($_SESSION["Matiere"][$id]))
$_SESSION["Matiere"][$id]=1;
else
$_SESSION["Matiere"][$id]++;
$t=array();
            $total=0;
            var_dump($_SESSION["Matiere"]);
            foreach($_SESSION["Matiere"] as $key => $value)

?>