<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with FoodHut landing page.">
    <meta name="author" content="Devcrud">
    <title>THE TUNISIAN HAND |TRADITIONAL |MODERN |TUNISIE</title>

   <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/animate/animate.css">
   <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
   <!-- Bootstrap + Steller  -->
    <link rel="stylesheet" href="assets/css/foodhut.css">

    <!-- Cozastore main styles -->
    <link rel="stylesheet" href="cozastore/css/main.css">

</head>
<body>

   <!-- Page Header -->
   <header class="header header-mini"> 
      <div class="header-title">Your Cart</div> 
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cart</li>
         </ol>
      </nav>   
   </header> <!-- End Of Page Header -->
   <?php 
   session_start();

   /********** Supprimer un élement  *********************/

   if(isset($_GET['del'])){
    $id_del = $_GET['del'] ;
    unset($_SESSION['Panier'][$id_del]);
}
    /****************************************************/

if(isset($_GET["id"])){
$id=$_GET["id"];
if(!isset($_SESSION["Panier"][$id]))
$_SESSION["Panier"][$id]=1;
else
$_SESSION["Panier"][$id]++; }

?>
    <table border =1>
        <tr>
            <th>Reference</th>
            <th>Product</th>
            <th>Image</th>
            <th>Nombre</th>
            <th>Prix</th>
            <th>Delete</th>
                
        </tr>
        <tr>
            <?php include_once "Functions.php";
                $t=array();
                $total=0;
            foreach($_SESSION["Panier"] as $key => $value){
                    if(!isset($_GET["id"])) $id=$key;
                    if($key=="Chachia")
                    $t=ParcourirChachia();
                    else if ($key=="Jeba")
                    $t=ParcourirJeba();
                    else if ($key=="Safseri")
                    $t=ParcourirSafsari();
                    else if ($key=="Gofa")
                    $t=ParcourirGofa();
                    else if ($key=="Tabak")
                    $t=ParcourirTabak();
                    else if ($key=="Margoum")
                    $t=ParcourirMargoum();  
                    else if ($key=="Degla")
                    $t=ParcourirDegla();  
                    else if ($key=="Zitoun")
                    $t=ParcourirZitoun();  
                    else if ($key=="Hendi")
                    $t=ParcourirHendi();
                    foreach($t as $v){
                ?>  <td> <?=$v["id"]?> </td>
                    <td> <?=$key?> </td>
                    <td><img src= <?=$v["Image"]?>  width=50 /> </td>
                    <td> <?=$_SESSION["Panier"][$id]?> </td>
                    <td> <?php echo $v["Prix"];
                    $total+= $v["Prix"]*$_SESSION["Panier"][$id] ?> </td>
                    <td> <a href='PanierTheTunisiaHand.php?del=<?=$key?>' class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                        <img class="icon-heart1 dis-block trans-04"  src="assets/imgs/icons/icon-close2.png" alt="ICON">
                                        <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-close.png" alt="ICON">
                                    </a>
                    </td>
                    <?php }}
                    ?>
            </tr>
            <tr>
                <th> Total </th>
                <th colspan="5"> <?=$total?> </th>
            </tr>
        </table>
   <!-- end of typography -->
<h5><a href="ViderPanier.php"> Vider Panier </a></h5>
   <!-- Page Footer -->
   <div class="bg-dark text-light text-center border-top wow fadeIn">
        <p class="mb-0 py-3 text-muted small">&copy; Copyright <script>document.write(new Date().getFullYear())</script> Made with <i class="ti-heart text-danger"></i> By <a href="http://devcrud.com">DevCRUD</a></p>
    </div>
    <!-- End of Page Footer -->
   
   <!-- core  -->
   <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
   <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
</body>
</html>
