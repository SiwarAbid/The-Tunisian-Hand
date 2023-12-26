<?php 
/*************************          Connexion           ********************************/

function  cnx (){
    $connexion = new PDO("mysql:host=localhost:3307;dbname=thetunisiahand","root",""); 
    return $connexion;
}


/*************************            Select            ********************************/


/*=============          select Chachia             */

function Parcourir(){
    $recipesStatement = cnx()->prepare('SELECT * FROM `matiere` ');
    $recipesStatement->execute();
    $recipes = $recipesStatement->fetchAll();
    return $recipes;
}
function ParcourirChachia(){
    $recipesStatement = cnx()->prepare('SELECT * FROM chachia' );
    $recipesStatement->execute();
    $recipes = $recipesStatement->fetchAll();
    return $recipes;
}


/*=============          select jeba             */

function ParcourirJeba(){
    $recipesStatement = cnx()->prepare('SELECT * FROM jeba' );
    $recipesStatement->execute();
    $recipes = $recipesStatement->fetchAll();
    return $recipes;
}


/*=============          select Safsari             */
function ParcourirSafsari(){
    $recipesStatement = cnx()->prepare('SELECT * FROM safsari' );
    $recipesStatement->execute();
    $recipes = $recipesStatement->fetchAll();
    return $recipes;
}


/*=============          select gofa             */
function ParcourirGofa(){
    $recipesStatement = cnx()->prepare('SELECT * FROM gofa' );
    $recipesStatement->execute();
    $recipes = $recipesStatement->fetchAll();
    return $recipes;
}


/*=============          select tbk             */
function ParcourirTabak(){
    $recipesStatement = cnx()->prepare('SELECT * FROM tbk' );
    $recipesStatement->execute();
    $recipes = $recipesStatement->fetchAll();
    return $recipes;
}


/*=============          select margom             */
function ParcourirMargoum(){
    $recipesStatement = cnx()->prepare('SELECT * FROM margom' );
    $recipesStatement->execute();
    $recipes = $recipesStatement->fetchAll();
    return $recipes;
}


/*=============          select degla             */
function ParcourirDegla(){
    $recipesStatement = cnx()->prepare('SELECT * FROM degla' );
    $recipesStatement->execute();
    $recipes = $recipesStatement->fetchAll();
    return $recipes;
}


/*=============          select ziton             */
function ParcourirZitoun(){
    $recipesStatement = cnx()->prepare('SELECT * FROM ziton' );
    $recipesStatement->execute();
    $recipes = $recipesStatement->fetchAll();
    return $recipes;
}


/*=============          select hendi             */
function ParcourirHendi(){
    $recipesStatement = cnx()->prepare('SELECT * FROM hendi' );
    $recipesStatement->execute();
    $recipes = $recipesStatement->fetchAll();
    return $recipes;
}


/***********************            Insertion          ***********************/

function Ajouter($Lib,$Coef,$Responsable){
  
    $stm = cnx() -> prepare("INSERT INTO `matiere`( `Lib`, `Coef`, `Responsable`) VALUES (:Lib,:Coef,:Responsable)") ;
    $r = $stm -> execute(array('Lib'=>$Lib,'Coef'=>$Coef,'Responsable'=> $Responsable));
    if ($r) 
    return "bien ajoute ";
else
    return "error ajout ";
}

//insertion de Chachia
function AjouterChachia($Prix,$Description,$Image,$Stock,$couleur){
  
    $stm = cnx() -> prepare("INSERT INTO chachia (Prix, Description, Image, Stock, couleur) VALUES (:Prix,:Description,:Image,:Stock,:couleur)") ;
    $r = $stm -> execute(array('Prix' => $Prix, 'Description' => $Description, 'Image' => $Image, 'Stock' => $Stock, 'couleur' => $couleur) );
    if ($r) 
    return "bien ajoute Chahia";
else
    return "error ajout Chachia";
}

//insertion Jeba
function AjouterJeba($Prix,$Description,$Image,$Stock,$couleur){

    $stm = cnx() -> prepare("INSERT INTO `jeba`( `Prix`, `Description`, `Image`, `Stock`, `couleur`) VALUES (:Prix,:Description,:Image,:Stock,:couleur)") ;
    $r = $stm -> execute(array('Prix' => $Prix, 'Description' => $Description, 'Image' => $Image, 'Stock' => $Stock, 'couleur' => $couleur) );
    if ($r) 
    return "bien ajouteJeba";
else
    return "error ajoutJeba";
}

//insertion Safsari 
function AjouterSafsari($Prix,$Description,$Image,$Stock,$couleur){
  
    $stm = cnx() -> prepare("INSERT INTO `safsari`(`Prix`, `Description`, `Image`, `Stock`, `couleur`) VALUES (:Prix,:Description,:Image,:Stock,:couleur)") ;
    $r = $stm -> execute(array('Prix' => $Prix, 'Description' => $Description, 'Image' => $Image, 'Stock' => $Stock, 'couleur' => $couleur) );
    if ($r) 
    return "bien ajouteSafsari";
else
    return "error ajouteSafsari";
}

//insertion Gofa
function AjouterGofa($Prix,$Description,$Image,$Stock,$couleur){
  
    $stm = cnx() -> prepare("INSERT INTO `gofa`( `Prix`, `Description`, `Image`, `Stock`, `couleur`) VALUES (:Prix,:Description,:Image,:Stock,:couleur)") ;
    $r = $stm -> execute(array('Prix' => $Prix, 'Description' => $Description, 'Image' => $Image, 'Stock' => $Stock, 'couleur' => $couleur) );
    if ($r) 
    return "bien ajouteGofa";
else
    return "error ajouteGofa";
}


//insertion Tbak
function AjouterTabak($Prix,$Description,$Image,$Stock,$couleur){
  
    $stm = cnx() -> prepare("INSERT INTO `tbk`( `Prix`, `Description`, `Image`, `Stock`, `couleur`) VALUES (:Prix,:Description,:Image,:Stock,:couleur)") ;
    $r = $stm -> execute(array('Prix' => $Prix, 'Description' => $Description, 'Image' => $Image, 'Stock' => $Stock, 'couleur' => $couleur) );
    if ($r) 
    return "bien ajouteTabak";
else
    return "error ajouteTabak";
}


//insertion Margom
function AjouterMargom($Prix,$Description,$Image,$Stock,$couleur){
  
    $stm = cnx() -> prepare("INSERT INTO `margom`(`Prix`, `Description`, `Image`, `Stock`, `couleur`) VALUES (:Prix,:Description,:Image,:Stock,:couleur)") ;
    $r = $stm -> execute(array('Prix' => $Prix, 'Description' => $Description, 'Image' => $Image, 'Stock' => $Stock, 'couleur' => $couleur) );
    if ($r) 
    return "bien ajouteMargom";
else
    return "error ajouteMargom";
}


//insertion Degla
function AjouterDegla($Prix,$Description,$Image,$Stock){
  
    $stm = cnx() -> prepare("INSERT INTO `degla`(`Prix`, `Description`, `Image`, `Stock`) VALUES (:Prix,:Description,:Image,:Stock)") ;
    $r = $stm -> execute(array('Prix' => $Prix, 'Description' => $Description, 'Image' => $Image, 'Stock' => $Stock) );
    if ($r) 
    return "bien ajouteDegla";
else
    return "error ajouteDegla";
}


//insertion Zitoun
function AjouterZitoun($Prix,$Description,$Image,$Stock){
  
    $stm = cnx() -> prepare("INSERT INTO `ziton`( `Prix`, `Description`, `Image`, `Stock`) VALUES (:Prix,:Description,:Image,:Stock)") ;
    $r = $stm -> execute(array('Prix' => $Prix, 'Description' => $Description, 'Image' => $Image, 'Stock' => $Stock) );
    if ($r) 
    return "bien ajouteZitoun";
else
    return "error ajouteZitoun";
}


//insertion Hendi
function AjouterHendi($Prix,$Description,$Image,$Stock){

  
    $stm = cnx() -> prepare("INSERT INTO `hendi`(`Prix`, `Description`, `Image`, `Stock`) VALUES (:Prix,:Description,:Image,:Stock)") ;
    $r = $stm -> execute(array('Prix' => $Prix, 'Description' => $Description, 'Image' => $Image, 'Stock' => $Stock) );
    if ($r) 
    return "bien ajouteHendi";
else
    return "error ajouteHendi";
}



/*********************************             Delete                   *******************/


//delete chachia
function DeletChahia($id){

    $stm = cnx() -> prepare("DELETE FROM `chachia` WHERE id=:id") ;
    $r = $stm -> execute(array("id" => $id));

    if($r)
    echo"RECU";
    else{
        echo "ECHEC";
        var_dump($stm ->errorinfo());}
   
}


//delete jeba
function Deletjeba($id){

    $stm = cnx() -> prepare("DELETE FROM `jeba` WHERE id=:id") ;
    $r = $stm -> execute(array("id" => $id));
    
    if ($r) 
   	 echo "delete ok jeba";
   else
     echo "error delete jeba";
   
}



//delete Safsari
function DeletSafsari($id){

    $stm = cnx() -> prepare("DELETE FROM `safsari` WHERE id=:id") ;
    $r = $stm -> execute(array("id" => $id));
    
    if ($r) 
   	 echo "delete ok Safsari";
   else
     echo "error delete Safsari";
   
}


//delete Gofa
function DeletGofa($id){

    $stm = cnx() -> prepare("DELETE FROM `gofa` WHERE id=:id") ;
    $r = $stm -> execute(array("id" => $id));
    
    if ($r) 
   	 echo "delete ok Gofa";
   else
     echo "error delete Gofa";
   
}


//delete Tbk
function DeletTabk($id){

    $stm = cnx() -> prepare("DELETE FROM `tbk` WHERE id=:id") ;
    $r = $stm -> execute(array("id" => $id));
    
    if ($r) 
   	 echo "delete ok Tbk";
   else
     echo "error delete Tbk";
   
}


//delete Margom
function DeletMargom($id){

    $stm = cnx() -> prepare("DELETE FROM `margom` WHERE id=:id") ;
    $r = $stm -> execute(array("id" => $id));
    
    if ($r) 
   	 echo "delete ok Margom";
   else
     echo "error delete Margom";
   
}


//delete Degla
function DeletDegla($id){

    $stm = cnx() -> prepare("DELETE FROM `degla` WHERE id=:id") ;
    $r = $stm -> execute(array("id" => $id));
    
    if ($r) 
   	 echo "delete ok Degla";
   else
     echo "error delete Degla";
   
}


//delete Zitoun
function DeletZitoun($id){

    $stm = cnx() -> prepare("DELETE FROM `ziton` WHERE id=:id") ;
    $r = $stm -> execute(array("id" => $id));
    
    if ($r) 
   	 echo "delete ok Zitoun";
   else
     echo "error delete Zitoun";
   
}


//delete Hendi
function DeletHendi($id){

    $stm = cnx() -> prepare("DELETE FROM `hendi` WHERE id=:id") ;
    $r = $stm -> execute(array("id" => $id));
    
    if ($r) 
   	 echo "delete ok Hendi";
   else
     echo "error delete Hendi";
   
}



/*************************************                Update                         *********************/


//Update Chachia
function updatChachia($id,$Prix,$Description,$Image,$Stock,$couleur){
$rq="UPDATE `chachia` SET `id`=:id,`Prix`= :Prix,`Description`=:Description,`Image`=:Image,`Stock`=:Stock,`couleur`=:couleur WHERE id =$id";
$tab = array("id"=>$id,
             "Prix"=>$Prix,
            "Description"=>$Description,
            "Image"=>$Image,
            "Stock"=>$Stock,
            "couleur"=>$couleur);
$r=execute($rq,$tab);
header("location:index.php");
}

function updatJeba($id){
$rq="UPDATE `jeba` SET `id`=:id,`Prix`= :Prix,`Description`=:Description,`Image`=:Image,`Stock`=:Stock,`couleur`=:couleur WHERE id =:id";
$tab = array("id"=>$id,
"Prix"=>$Prix,
"Description"=>$Description,
"Image"=>$Image,
"Stock"=>$Stock,
"couleur"=>$couleur);
$r=execute($rq,$tab);
header("location:index.php");
}


function updatSafsari($id){
    $rq="UPDATE `safsari` SET `id`=:id,`Prix`= :Prix,`Description`=:Description,`Image`=:Image,`Stock`=:Stock,`couleur`=:couleur WHERE id =:id";
    $tab = array("id"=>$id,
    "Prix"=>$Prix,
   "Description"=>$Description,
   "Image"=>$Image,
   "Stock"=>$Stock,
   "couleur"=>$couleur);
    $r=execute($rq,$tab);
    header("location:index.php");
}


function updatGofa($id){
    $rq="UPDATE `gofa` SET `id`=:id,`Prix`= :Prix,`Description`=:Description,`Image`=:Image,`Stock`=:Stock,`couleur`=:couleur WHERE id =:id";
    $tab = array("id"=>$id,
    "Prix"=>$Prix,
   "Description"=>$Description,
   "Image"=>$Image,
   "Stock"=>$Stock,
   "couleur"=>$couleur);
    $r=execute($rq,$tab);
    header("location:index.php");
}

function updatTabk($id){
     $rq="UPDATE `tbk` SET `id`=:id,`Prix`= :Prix,`Description`=:Description,`Image`=:Image,`Stock`=:Stock,`couleur`=:couleur WHERE id =:id";
            $tab = array("id"=>$id,
            "Prix"=>$Prix,
           "Description"=>$Description,
           "Image"=>$Image,
           "Stock"=>$Stock,
           "couleur"=>$couleur);
            $r=execute($rq,$tab);
            header("location:index.php");
}


function updatMargom($id){
    $rq="UPDATE `margom` SET `id`=:id,`Prix`= :Prix,`Description`=:Description,`Image`=:Image,`Stock`=:Stock,`couleur`=:couleur WHERE id =:id";
    $tab = array("id"=>$id,
    "Prix"=>$Prix,
   "Description"=>$Description,
   "Image"=>$Image,
   "Stock"=>$Stock,
   "couleur"=>$couleur);
    $r=execute($rq,$tab);
    header("location:index.php");
}

function updatDegla($id){
    $rq="UPDATE `degla` SET `id`=:id,`Prix`= :Prix,`Description`=:Description,`Image`=:Image,`Stock`=:Stock WHERE id =:id";
    $tab = array("id"=>$id,
    "Prix"=>$Prix,
   "Description"=>$Description,
   "Image"=>$Image,
   "Stock"=>$Stock);
    $r=execute($rq,$tab);
    header("location:index.php");
}

function updatZitoun($id){
    $rq="UPDATE `ziton` SET `id`=:id,`Prix`= :Prix,`Description`=:Description,`Image`=:Image,`Stock`=:Stock WHERE id =:id";
    $tab = array("id"=>$id,
    "Prix"=>$Prix,
   "Description"=>$Description,
   "Image"=>$Image,
   "Stock"=>$Stock);
    $r=execute($rq,$tab);
    header("location:index.php");
}


function updathendi($id){
    $rq="UPDATE `hendi` SET `id`=:id,`Prix`= :Prix,`Description`=:Description,`Image`=:Image,`Stock`=:Stock WHERE id =:id";
    $tab = array("id"=>$id,
    "Prix"=>$Prix,
   "Description"=>$Description,
   "Image"=>$Image,
   "Stock"=>$Stock);
    $r=execute($rq,$tab);
    header("location:index.php");
}



/*********************************               Edit                ***********************/



function edit($id,$x){
    //$rq= "SELECT * FROM $x WHERE id = $id ";
    $t=array('id' => $id) ;
    $stm=cnx()->query("SELECT * FROM $x WHERE id = $id ");
    //$r=$stm->execute();
    //var_dump($r);
    $tab = $stm->fetchAll(PDO::FETCH_ASSOC); 
    //var_dump($tab);

    return $tab;
}




function execute($Rq,$tab){
    $stm=cnx()->prepare($Rq);
    return    $stm->execute($tab);
}


?>