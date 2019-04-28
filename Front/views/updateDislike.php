<?PHP
require_once "core/PromoC.php";
$id=$_GET["id"];
$rdv1C=new PromoC();
$rdv1C->updateDislike($id);
echo '<meta http-equiv="refresh" content="0; URL=blog-list.php" />';
?>