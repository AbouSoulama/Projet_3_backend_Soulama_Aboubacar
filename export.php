<?php
include("connexion.php");
$req=$bdd->prepare("select * from images where id=? limit 1");
$req->setFetchMode(PDO::FETCH_ASSOC);
$req=execute(array($_GET["id"])); 
$tab=$req->fetchAll();
echo $tab[0]["bin"];
?>