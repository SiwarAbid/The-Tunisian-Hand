<form action="Update.php" method="POST"></br>

<?php

include 'Functions.php';

  if(!isset($_POST["id"]))
  header("location: FormulaireEdit.php");
  $list=edit($_POST["id"],$_POST["type"]);
  var_dump($list);
if($_POST["type"]=="chachia"){
?>Type:    <select name="type" >
  <option value="chachia" checked>Chachia</option>
  <option value="jeba">jeba</option>
  <option value="safsari">safsari</option>
  <option value="degla">degla</option>
  <option value="zitoun">zitoun</option>
  <option value="hendi">hendi</option>
  <option value="gofa">gofa</option>
  <option value="tbk">tbk</option>
  <option value="margoum">margoum</option>
  </select><br></br>
  <?php }
else if ($_POST["type"]=="jeba"){
?>Type:    <select name="type" >
  <option value="chachia">Chachia</option>
  <option value="jeba" checked>jeba</option>
  <option value="safsari">safsari</option>
  <option value="degla">degla</option>
  <option value="zitoun">zitoun</option>
  <option value="hendi">hendi</option>
  <option value="gofa">gofa</option>
  <option value="tbk">tbk</option>
  <option value="margoum">margoum</option>
  </select><br></br>
  <?php }
else if ($_POST["type"]=="safsari"){
?>Type:    <select name="type" >
<option value="chachia">Chachia</option>
<option value="jeba">jeba</option>
<option value="safsari" checked>safsari</option>
<option value="degla">degla</option>
<option value="zitoun">zitoun</option>
<option value="hendi">hendi</option>
<option value="gofa">gofa</option>
<option value="tbk">tbk</option>
<option value="margoum">margoum</option>
</select><br></br>
<?php  }
else if ($_POST["type"]=="degla"){
?>
Type:    <select name="type" >
  <option value="chachia">Chachia</option>
  <option value="jeba">jeba</option>
  <option value="safsari">safsari</option>
  <option value="degla" checked>degla</option>
  <option value="zitoun">zitoun</option>
  <option value="hendi">hendi</option>
  <option value="gofa">gofa</option>
  <option value="tbk">tbk</option>
  <option value="margoum">margoum</option>
  </select><br></br>
  <?php }
else if ($_POST["type"]=="zitoun"){
?>Type:    <select name="type" >
<option value="chachia">Chachia</option>
<option value="jeba">jeba</option>
<option value="safsari">safsari</option>
<option value="degla">degla</option>
<option value="zitoun" checked>zitoun</option>
<option value="hendi">hendi</option>
<option value="gofa">gofa</option>
<option value="tbk">tbk</option>
<option value="margoum">margoum</option>
</select><br></br>
<?php }
else if ($_POST["type"]=="hendi"){
?>Type:    <select name="type" >
  <option value="chachia">Chachia</option>
  <option value="jeba">jeba</option>
  <option value="safsari">safsari</option>
  <option value="degla">degla</option>
  <option value="zitoun">zitoun</option>
  <option value="hendi" checked>hendi</option>
  <option value="gofa">gofa</option>
  <option value="tbk">tbk</option>
  <option value="margoum">margoum</option>
  </select><br></br>
  <?php}
  else if ($_POST["type"]=="gofa"){
?>Type:    <select name="type" >
<option value="chachia">Chachia</option>
<option value="jeba">jeba</option>
<option value="safsari">safsari</option>
<option value="degla">degla</option>
<option value="zitoun">zitoun</option>
<option value="hendi">hendi</option>
<option value="gofa" checked>gofa</option>
<option value="tbk">tbk</option>
<option value="margoum">margoum</option>
</select><br></br>
<?php }
else if ($_POST["type"]=="tbk"){
?>Type:    <select name="type" >
<option value="chachia">Chachia</option>
<option value="jeba">jeba</option>
<option value="safsari">safsari</option>
<option value="degla">degla</option>
<option value="zitoun">zitoun</option>
<option value="hendi">hendi</option>
<option value="gofa">gofa</option>
<option value="tbk" checked>tbk</option>
<option value="margoum">margoum</option>
</select><br></br>
<?php }
else if ($_POST["type"]=="margoum") {
?>
Type:    <select name="type" >
  <option value="chachia">Chachia</option>
  <option value="jeba">jeba</option>
  <option value="safsari">safsari</option>
  <option value="degla">degla</option>
  <option value="zitoun">zitoun</option>
  <option value="hendi">hendi</option>
  <option value="gofa">gofa</option>
  <option value="tbk">tbk</option>
  <option value="margoum" checked>margoum</option>
  </select><br></br>
  <?php  } ?>
        Id :              <input  name="id" value="<?=$list[0]["id"]?>" /><br/><br/>
        Prix :           <input  name="Prix" value="<?=$list[0]["Prix"]?>" /><br /><br/>
        Description :     <input  name="Description" value="<?=$list[0]["Description"]?>" /><br /><br/>
        Image :            <input  name="Image" value="<?=$list[0]["Image"]?>" /><br /><br/>
        Couleur :         <input  name="couleur" value="<?=$list[0]["couleur"]?>" /><br /><br/>
        Stock :           <input  name="Stock" value="<?=$list[0]["Stock"]?>" /><br /><br/>

                                  <input type="submit" value="update">
        </form>
