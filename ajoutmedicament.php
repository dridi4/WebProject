<?PHP
include "../entites/medicament.php";
include "../core/medicamentC.php";

if (isset($_POST['id']) and isset($_POST['doctor']) and isset($_POST['salleoperation'])  and isset($_POST['quantite']) ){
$medicament1=new medicament($_POST['id'],$_POST['doctor'],$_POST['salleoperation'],$_POST['quantite']);
/*artie2
/*
var_dump($medicament1);
}
*/
//Partie3


$medicament1C=new medicamentC();
$liste=$medicament1C->recupererpharmacie($_POST['id']);
foreach ($liste as $row) {
	$quantite=$row['quantite'];
	$id=$row['id'];
}

	$medicament1C->ajoutermedicament($medicament1);
	$medicament1C->quantite($_POST['quantite'],$_POST['id']);
	header('Location: affichage.php');
}



else{
	echo "verifier les champs";
}
//*/

?>
