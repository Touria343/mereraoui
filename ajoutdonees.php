<?php 
include("config.php");

$description=$_POST["description"]; // on recupere la description
$nom=$_FILES["file"]["name"]; // on recupere le nom de l'image avec son extension
 
    list($name, $ext) = explode(".", $nom);   // on separe le nom de l'image de son extension    
 
  $ext=".".$ext; // on rajoute un . devant l'extention
 

 
$bdd->exec("INSERT INTO image(file, description)  VALUES('$nom','$description');"); // et on termine en envoyant les données dans la base 


header('refresh: 1; URL=compte.php');

?>
