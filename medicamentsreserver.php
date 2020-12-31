<?PHP
include "../entites/pharmacie.php";
include "../core/pharmacieC.php";

if (isset($_POST['id']) and isset($_POST['doctor']) and isset($_POST['prix'])  and isset($_POST['quantite']) ){
$pharmacie1=new pharmacie($_POST['id'],$_POST['doctor'],$_POST['prix'],$_POST['quantite']);
//Partie2
/*
var_dump($pharmacie1);
}
*/
//Partie3

$pharmacie1C=new pharmacieC();
$pharmacie1C->ajouterpharmacie($pharmacie1);
header('Location: affichage.php');

}else{
	echo "verifier les champs";
}
//*/

?>
