<?php

//  connection à la base de donnée
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', 'forgo2002','acteDB');

// declaration et initialisation des variables
$email_ = $_POST['email'];
$password_ = $_POST['password'];
$number_ = $_POST['number'];




// insertion du code SQL 
$sql = "INSERT INTO `MyCompte` (`id`, `email`, `password`, `number`) VALUES ('0', '$email_', '$password_', '$number_')";

// insertion dans  la base de dnnée 
$rs = mysqli_query($con, $sql);

if($rs)
	{
		echo "Information bien enregistrer dans la base de donnée: <a href='index.php'>se connecter</a>";
	}else {
		echo "erreurs!!! verifier vos coordonnées: ";
		//echo "<a href=''>se connecter</a>";
		//echo "<p class= 'Erreur'>".$erreur."</p> ";
	}

?> 
