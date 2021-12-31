<?php 
require "data/infos.php";
include "template/header.php"; 

if(!empty($_GET) && isset($_GET["id"])) {
    $id = htmlspecialchars($_GET["id"]); //sécu url

}
else {
    $error = "connais pas...";

}
?>

<h2>Detail de l'article</h2>

<?php                         //sécu id
 if(isset($error)) {
     echo $error;      
 }
 else {
    echo "vous avez cliqué sur ". $id; 
 }
?>


<?php include "template/footer.php"; ?>
  