<?php
   /********** Supprimer un élement  *********************/

   if(isset($_GET['del'])){
    $id_del = $_GET['del'] ;
    unset($_SESSION['Panier'][$id_del]);
} echo "Succes";?>
