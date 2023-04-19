<?php
   if(isset($_POST['log'])){

      $con = mysqli_connect('localhost', 'root', 'forgo2002','acteDB');
      if(isset($_POST['log'])){
        $email = mysqli_real_escape_string($con, $_POST['mail']) ;
        //$Pass = $_POST['mdp'];
        $Pass = mysqli_real_escape_string($con, $_POST['mdp']) ;
        $query= "SELECT * FROM `mycompte` WHERE email='$email'";
        $por= "SELECT * FROM `mycompte` WHERE password='$Pass'";
        $erreur = "";
        $res = mysqli_query($con,$query);
        $rer = mysqli_query($con,$por);
        if(mysqli_num_rows($res) > 0 && mysqli_num_rows($rer)>0){
               // echo "Bienvenue, $email";
               if( ! headers_sent() ){ //if header() not sent do this
                  header('Location: choix.php');
               } else{
                  echo '<script 
                  type="text/javascript">window.location.href="choix.php";</script>';
               }
               // header('Location: choix.php');
               // exit;
         }else {
               $erreur = "Email or password incorect";
            }

        }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>connexion</title>
</head>
<body>
<div class="wrapper">
         <div class="title-text">
            <div class="title login">
               Login Form
            </div>
            <div class="title signup">
               Signup Form
            </div>
</div>
         
<?php
            if(isset($erreur)){
               echo "<p class= 'Erreur'>".$erreur."</p> ";
            }
?>
<div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login">Login</label>
               <label for="signup" class="slide signup">Signup</label>
               <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
               <form class="login" method="POST" action="">
                  <div class="field">
                     <input type="text" placeholder="Email Address" name="mail" id="mail" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Password" name="mdp" id="mdp" required>
                  </div>
                  <div class="pass-link">
                     <a href="#">Forgot password?</a>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Login" id="log" name="log">
                  </div>
                  <div class="signup-link">
                     Not a member? <a href="">Signup now</a>
                  </div>
               </form>
               <form class="signup" method="POST" action="addData.php">
                  <div class="field">
                     <input type="text" placeholder="Email Address" name="email" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Password" name="password" required>
                  </div>
                  <div class="field">
                     <input type="number" placeholder="number" name="number" required>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" id="submit" name="submit" value="Signup">
                  </div>
               </form>
            </div>
         </div>
</div>
</body>
<script>
         const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });
</script>
<style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        }
        /* html,body{
         #fee407
         #E2341D
         #158212
        display: grid;
        height: 100%;
        width: 100%;
        place-items: center;
        background: -webkit-linear-gradient(left, #a445b2, #fa4299);
        } */
        /* ::selection{
        background: #fa4299;
        color: #fff;
        } */
        .wrapper{
        overflow: hidden;
        max-width: 390px;
        background: #fff;
        padding: 30px;
        border-radius: 5px;
        box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
        }
        .wrapper .title-text{
        display: flex;
        width: 200%;
        color: #E2341D;
        }
        .wrapper .title{
        width: 50%;
        font-size: 35px;
        font-weight: 600;
        text-align: center;
        transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
        }
        .wrapper .slide-controls{
        position: relative;
        display: flex;
        height: 50px;
        width: 100%;
        overflow: hidden;
        margin: 30px 0 10px 0;
        justify-content: space-between;
        border: 1px solid lightgrey;
        border-radius: 5px;
        }
        .slide-controls .slide{
        height: 100%;
        width: 100%;
        /* color: #fff; */
        color:#fee407;
        font-size: 18px;
        font-weight: 500;
        text-align: center;
        line-height: 48px;
        cursor: pointer;
        z-index: 1;
        transition: all 0.6s ease;
        }
        .slide-controls label.signup{
        /* color: #000; */
        color: #E2341D;
        }
        .slide-controls .slider-tab{
        position: absolute;
        height: 100%;
        width: 50%;
        left: 0;
        z-index: 0;
        border-radius: 5px;
        /* background: -webkit-linear-gradient(left, #a445b2, #fa4299); */
        background: #158212;
        transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
        }
        input[type="radio"]{
        display: none;
        }
        #signup:checked ~ .slider-tab{
        left: 50%;
        }
        #signup:checked ~ label.signup{
        /* color: #fff; */
        color:#fee407;
        cursor: default;
        user-select: none;
        }
        #signup:checked ~ label.login{
        /* color: #000; */
        color: #E2341D;
        }
        #login:checked ~ label.signup{
        /* color: #000; */
        color: #E2341D;
        }
        #login:checked ~ label.login{
        cursor: default;
        user-select: none;
        }
        .wrapper .form-container{
        width: 100%;
        overflow: hidden;
        }
        .Erreur{
           color:red;
           margin: 10px 0;
           text-align:center;
        }
        .form-container .form-inner{
        display: flex;
        width: 200%;
        }
        .form-container .form-inner form{
        width: 50%;
        transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
        }
        .form-inner form .field{
        height: 50px;
        width: 100%;
        margin-top: 20px;
        }
        .form-inner form .field input{
        height: 100%;
        width: 100%;
        outline: none;
        padding-left: 15px;
        border-radius: 5px;
        border: 1px solid lightgrey;
        border-bottom-width: 2px;
        font-size: 17px;
        transition: all 0.3s ease;
        }
        .form-inner form .field input:focus{
        border-color: #fee407;
        /* box-shadow: inset 0 0 3px #fb6aae; */
        }
        .form-inner form .field input::placeholder{
        color: #999;
        transition: all 0.3s ease;
        }
        form .field input:focus::placeholder{
        color: #b3b3b3;
        }
        .form-inner form .pass-link{
        margin-top: 5px;
        }
        .form-inner form .signup-link{
        text-align: center;
        margin-top: 30px;
        }
        .form-inner form .pass-link a,
        .form-inner form .signup-link a{
        color: #E2341D;
        text-decoration: none;
        }
        .form-inner form .pass-link a:hover,
        .form-inner form .signup-link a:hover{
        text-decoration: underline;
        }
        form .btn{
        height: 50px;
        width: 100%;
        border-radius: 5px;
        position: relative;
        overflow: hidden;
        }
        form .btn .btn-layer{
        height: 100%;
        width: 300%;
        position: absolute;
        left: -100%;
        /* background: -webkit-linear-gradient(right, #a445b2, #fa4299, #a445b2, #fa4299); */
        background: #158212;
        border-radius: 5px;
        transition: all 0.4s ease;;
        }
        form .btn:hover .btn-layer{
        left: 0;
        }
        form .btn input[type="submit"]{
        height: 100%;
        width: 100%;
        z-index: 1;
        position: relative;
        background: none;
        border: none;
        color: #fff;
        padding-left: 0;
        border-radius: 5px;
        font-size: 20px;
        font-weight: 500;
        cursor: pointer;
        }
</style>
</html>


