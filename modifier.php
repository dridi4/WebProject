<?php

include "../entites/pharmacie.php";
include "../core/pharmacieC.php";



if (isset($_GET['id'])){
$pharmacie=new pharmacie($_GET['id'],$_GET['nom'],$_GET['prix'],$_GET['quantite']);
$pharmacie1C=new pharmacieC();
$pharmacie1C->modifierpharmacie($pharmacie,$_GET['id']);
header('Location: affichage.php');
}

 ?>
