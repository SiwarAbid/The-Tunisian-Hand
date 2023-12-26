<?php
$db = new PDO("mysql:host=localhost:3307;dbname=thetunisiahand","root","");
$recipesStatement = $db->prepare('SELECT * FROM username');
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();
 foreach ($recipes as $recipe) {
    if ($recipe["Name"]==$_POST["Username"])
    if($recipe["Password"]==$_POST["Password"])
    header('Location: index.php');
    else{
        ?>
        <<h5> Incorrect Password !</h5>
        The password you entered is incorrect. Please try again
       <br> <a href="SignIn.html">OK</a>
       <?php 
    } 
    else {
?>
<h2 style="color: blue;"> Oops! </h2>
<h5> Something went wrong here </h5>
Sorry, this account not found <br> you can trying again
<a href="SignIn.html"> SIGN IN</a> with other account or 
 <a href="Signp.html">SIGN UP</a>
 <?php }} ?>
    
