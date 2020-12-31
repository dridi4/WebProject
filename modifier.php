<?php

include "../entites/medicament.php";
include "../core/medicamentC.php";



if (isset($_GET['id'])){
$medicament=new medicament($_GET['id'],$_GET['doctor'],$_GET['salleoperation'],$_GET['quantite']);
$medicament1C=new medicamentC();
$medicament1C->modifiermedicament($medicament,$_GET['id']);
header('Location: affichage.php');
}

 ?>
