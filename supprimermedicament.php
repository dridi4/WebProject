<?PHP
include "../core/medicamentC.php";
$medicamentC=new medicamentC();
if (isset($_POST["id"])){
	$medicamentC->supprimermedicament($_POST["id"]);
	header('Location: affichage.php');
}

?>
