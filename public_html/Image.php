<?php 
function color(){
if( isset ($_POST["Chachia"])){
    if($_POST["Chachia"]=="Red" && isset($_POST["with"]))
    if ($_POST["with"]=="Tail")
    return "assets\imgs\chechia-rouge-1.webp";
    else
    return "assets\imgs\chachia-rouge-khlela-1-ayshek-1024x1024.webp";
    if($_POST["Chachia"]=="Red" && !isset($_POST["with-Tail"],$_POST["with-Khlel"]))
    return "assets\imgs\chachia-rouge-1-ayshek-1024x1024.webp";
    if($_POST["Chachia"]=="Blue" && isset($_POST["with"]))
    if ($_POST["with"]=="Tail")
    return "assets\imgs\chachia-kobbita-bleu-1-ayshek-1024x1024.webp";
    else
    return "assets\imgs\chachia-kobbita-bleu-1-ayshek-1024x1024.webp";
    if($_POST["Chachia"]=="Blue" && !isset($_POST["with-Tail"],$_POST["with-Khlel"]))
    return "assets\imgs\chachia-turquoise-1-ayshek-897x897.webp";
    if($_POST["Chachia"]=="Meuve" && isset($_POST["with"]))
    if ($_POST["with"]=="Tail")
    return "assets\imgs\chachia-kobbita-meuve-1-ayshek-1024x1024.webp";
    else
    return "assets\imgs\chachia-kobbita-meuve-1-ayshek-1024x1024.webp";
    if($_POST["Chachia"]=="Meuve" && !isset($_POST["with-Tail"],$_POST["with-Khlel"]))
    return "assets\imgs\chachia-mauve-2-ayshek-433x433.webp";
    if($_POST["Chachia"]=="Green" && isset($_POST["with"]))
    if ($_POST["with"]=="Tail")
    return "assets\imgs\chachia-kobbita-vert-1-ayshek-1024x1024.webp";
    else
    return "assets\imgs\chachia-kobbita-vert-1-ayshek-1024x1024.webp";
    if($_POST["Chachia"]=="Green" && !isset($_POST["with-Tail"],$_POST["with-Khlel"]))
    return "assets\imgs\chachia-vert-1-ayshek-897x897.webp";
}

}