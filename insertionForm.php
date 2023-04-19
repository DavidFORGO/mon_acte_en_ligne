<?php
$servername = "localhost";
$username = "root";
$password = "forgo2002";
$dbname = "acteDB";

// declaration et initialisation des variables
$nom_ = $_POST['nom'];
$prenom_ = $_POST['prenom'];
$date_naiss = $_POST['date'];
$lieu_naiss = $_POST['lieu'];
$date_deces = $_POST['date_dec'];
$lieu_deces = $_POST['lieu_dec'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `form_dec` (`id`, `nom`, `prenom`, `date_naissance`, `lieu_naissance`, `date_deces`, `lieu_deces`, `reg_date`)
VALUES ('0', '$nom_', '$prenom_', '$date_naiss', '$lieu_naiss', '$date_deces', '$lieu_deces', current_timestamp())";

if (mysqli_query($conn, $sql)) {
  // echo "New record created successfully";
  echo "Je soussigné FORGO David CERTIFIE que $nom_ $prenom_ née le $date_naiss 
  à $lieu_naiss est décédé le $date_deces à  $lieu_deces de mort naturel\n.
  Certificat pour servir et valoir ce que de droit.....";
  // echo '<script 
  // type="text/javascript">alert("Je soussigné FD CERTIFIE que",$nom_ $prenom_, "née le", $date_naiss, "......");</script>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>