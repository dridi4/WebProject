<?PHP
include "../core/infermierC.php";
$infermierC=new infermierC();
if (isset($_POST["id"])){
	$infermierC->supprimerinfermier($_POST["id"]);
	header('Location: affichage.php');
}

?>
