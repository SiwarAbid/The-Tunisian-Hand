<?php
include "function.php";
if In($_POST["Username"],connexion())
header('Location: file:///C:/Users/abids/Desktop/The%20Tunisian%20Hand/public_html/index.html');
else
{
    ?>
<h2> Oops! </h2>
<h5> Something went wrong here </h5>
Sorry, this account not found <br> you can <a href="SignUp.html"> SIGN IN</a> with other account or trying again <a href="SignIn.html">SIGN IN</a>