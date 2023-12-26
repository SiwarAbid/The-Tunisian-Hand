<?php 
   session_start();
if(isset($_GET["id"])){
$id=$_GET["id"];
if(!isset($_SESSION["Panier"][$id]))
$_SESSION["Panier"][$id]=1;
else
$_SESSION["Panier"][$id]++; }
else{
?>

<html>
    <head> 
        <title> Panier | The Tunisia Hand </title>
    </head>
    <body class="bg-dark">
        <h5 class=" text-pink -center ">Your Cart</h5>
        <table border =1>
            <tr>
                <th>Reference</th>
                <th>Product</th>
                <th>Image</th>
                <th>Nombre</th>
                <th>Prix</th>
                
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
                    <?php }}
                    ?>
            </tr>
            <tr>
                <th> Total </th>
                <th colspan="4"> <?=$total?> </th>
            </tr>
        </table>
    </body>
</html>
<?php }?>