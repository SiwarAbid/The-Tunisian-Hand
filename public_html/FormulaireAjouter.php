<form method="POST" action="Ajouter.php">
    <select name="type" >
        <option value="chachia">Chachia</option>
        <option value="jeba">jeba</option>
        <option value="safsari">safsari</option>
        <option value="degla">degla</option>
        <option value="zitoun">zitoun</option>
        <option value="hendi">hendi</option>
        <option value="gofa">gofa</option>
        <option value="tbk">tbk</option>
        <option value="margoum">margoum</option>
    </select><br><br/>
    Prix: <input type ="text" name="Prix"/><br/><br/>
    Description: <input  type ="text" name="Description"/><br/><br/>
    Image:<input type ="text" name ="Image"/><br/><br/>
    Stock:<select name="Stock">
        <option value="En Stock">En Stock</option>
        <option value="Rupture de stock">Rupture de stock</option>
    </select> <br/><br/>
    Couleur:<input type="number" name ="couleur"/><br/><br/>
<input type="submit" value="Ajouter" />
</form>