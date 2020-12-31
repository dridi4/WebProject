<?PHP
include "../core/pharmacieC.php";
$pharmacieC=new pharmacieC();
if (isset($_POST["id"])){
	$pharmacieC->supprimerpharmacie($_POST["id"]);
	header('Location: affichage.php');
}

?>
