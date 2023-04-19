<?php
//    require('config.php');
//     session_start();
    
    $con = mysqli_connect('localhost', 'root', 'forgo2002','acteDB');
    if(isset($_POST['log'])){
        $email = mysqli_real_escape_string($con, $_POST['mail']) ;
        //$Pass = $_POST['mdp'];
        $Pass = mysqli_real_escape_string($con, $_POST['mdp']) ;
        $query= "SELECT * FROM `mycompte` WHERE email='$email'";
        $por= "SELECT * FROM `mycompte` WHERE password='$Pass'";
        $res = mysqli_query($con,$query);
        $rer = mysqli_query($con,$por);
        if(mysqli_num_rows($res) > 0 && mysqli_num_rows($rer)>0){
                echo "Bienvenue, $email";
                header("Location: choix.php");
            }else {
                echo "login not successful";
            }

        }

    // $con = mysqli_connect('localhost', 'root', 'forgo2002', 'acteDB');
    // if(!empty($_POST['log'])){
    //     $mail =  $_POST['mail'];
    //     $pass =  $_POST['mdp'];

    //     $query = "SELECT * FROM 'mycompte' where email='$mail' and password='$pass'";  
        
    //     if($query)
    //     {
    //         echo "Bienvenue, login successful";
    //     }
    //     else {
    //         echo "login not successful";
    //     }

    // }




?>