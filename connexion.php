<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=Site_touristique', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
?>