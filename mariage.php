<link rel="stylesheet" href="styleActe.css"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<body>    
<?php include_once('head.php');?> 
<section id="titre">
    <div class="wrapper">
        <span class="icon-close">
            <ion-icon name="close"></ion-icon>
        </span>
        <div class="form-box">
            <h2>Acte de Mariage</h2>
            <form method="post" action="mariageGener.php">
                <div class="input-box">
                    <!-- <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span> -->
                    <input type="text" name="nfils" required>
                    <label for="">Nom du marié</label>
                </div>
                <div class="input-box">
                    <input type="text" name="pfils" required>
                    <label for="">Prenom du marié</label>
                </div>
                <div class="input-box">
                    <input type="text" name="npere" required>
                    <label for="">Nom complet du père</label>
                </div>
                <div class="input-box">
                    <input type="text" name="nmere" required>
                    <label for="">Nom complet de la mère</label>
                </div>
                <div class="input-box">
                    <input type="number" name="age" required>
                    <label for="">Age</label>
                </div>
                <div class="input-box">
                    <input type="text" name="lfils" required>
                    <label for="">Residence</label>
                </div>
                <div class="input-box">
                    <input type="text" name="profils" required>
                    <label for="">Profession</label>
                </div>
                <div class="input-box">
                    <input type="text" name="natiofils" required>
                    <label for="">Nationalité</label>
                </div>
                <div class="input-box">
                    <input type="text" name="nfille" required>
                    <label for="">Nom complet de la mariée</label>
                </div>
                <div class="input-box">
                    <input type="text" name="pfille" required>
                    <label for="">Nom complet du père de la mariée</label>
                </div>
                <div class="input-box">
                    <input type="text" name="mfille" required>
                    <label for="">Nom complet de la mère de la mariée</label>
                </div>
                <div class="input-box">
                    <input type="number" name="agefille" required>
                    <label for="">Age</label>
                </div>
                <div class="input-box">
                    <input type="text" name="lfille" required>
                    <label for="">Residence</label>
                </div>
                <div class="input-box">
                    <input type="text" name="profille" required>
                    <label for="">Profession de la mariée</label>
                </div>
                <div class="input-box">
                    <input type="text" name="natiofille" required>
                    <label for="">Nationalité de la mariée</label>
                </div>
                
                <button type="submit" name="log" class="btn">Valider</button>

                <!-- permettre de repartir sur le choix d'acte -->
                <!-- <div class="login-register">
                    <p>Don't have an account? <a href="" class="register-link">Register</a></p>
                </div> -->
            </form>
        </div>
    </div>
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</section>

<!-- <//?php include_once('footer.php');?> -->
<footer>
            <?php include_once('footer.php');?>  
</footer> 
</body>

<!-- mon style -->
<!-- <style>
body{
    background: url("images/mairie.jpg") no-repeat; 
    background-size: cover;
    background-position: center; 
}
#titre{
    
     /* background: url("images/armoiries-bon-2gg.png") no-repeat; 
    background-size: cover;
    background-position: center; */ 
    margin-top: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    /*margin-bottom:20px;*/
    margin:20px;
}

.wrapper{
    position: relative;
    width: 400px;
    height: 440px;
    background: transparent;
    /* border: 2px solid #E2341D;
    border-radius: 20px; */
    background-color: #eceed1;
    
    display: flex;
    flex-direction: column;
    align-items: center;
    

}
.wrapper, form{
    background-color: #eceed1;
    border: 2px solid #E2341D;
    border-radius: 20px;
}

form{
    padding: 15px;
}
.wrapper .icon-close{
    position: absolute;
    top: 0;
    right: 0;
    width: 45px; 
    height: 45px;
    /* background: #162938; */
    background: #158212;
    font-size: 2em;
    /* color: #fff; */
    color: #fee407;
    display: flex;
    justify-content: center;
    align-items:center;
    border-bottom-left-radius: 20px;
    cursor: pointer;
    z-index: 1;
}
.wrapper .form-box{
    width: 100%;
    padding: 30px;
    margin: 5px; 

} 

.form-box h2{
    font-size: 2em;
    /* color: #162938; */
    color: #E2341D;
    text-align: center;
}
.input-box{
    position: relative;
    width: 100%;
    height: 50px;
    border-bottom: 2px solid #162938;
    /* border-bottom: 2px solid #fee407; */
    margin: 30px 0;
}
.input-box label{
    position: absolute;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    font-size: 1em;
    color: #162938;
    /* color: #fee407; */
    
    font-weight: 500;
    pointer-events: none;
    transition: .5s;
} 
.input-box input:focus~label,
.input-box input:valid~label {
    top: -5px;
}
.input-box input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    font-size:1em;
    color:#162938; 
    font-weight: 600;
    padding: 0 35px 0 5px;
   
}
.input-box .icon{
    position: absolute;
    right: 8px;
    font-size: 1.2em;
    /* color: #162938; */
    color:#fee407;
    line-height: 57px;
}

.btn{
    width: 100%;
    height: 45px;
    /* background: #162938; */
    background: #158212;
    border: none;
    outline: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1em;
    color: #fff;
    font-weight: 500px;
}


</style> -->