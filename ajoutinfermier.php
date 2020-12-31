<?PHP
include "../entites/infermier.php";
include "../core/infermierC.php";

if (isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['cin']) and isset($_POST['adresse']) and isset($_POST['email']) and isset($_POST['numero'])){
$infermier1=new infermier($_POST['id'],$_POST['nom'],$_POST['prenom'] ,$_POST['cin'] ,$_POST['adresse'] ,$_POST['email'] ,$_POST['numero']);
//Partie2
/*
var_dump($infermier1);
}
*/
//Partie3
$infermier1C=new infermierC();
$infermier1C->ajouterinfermier($infermier1);
header('Location: affichage.php');
	
}else{
	echo "verifier les champs";
}
//*/

?>
