<?php
        if(isset($_POST['log'])){
            $con = mysqli_connect('localhost', 'root', 'forgo2002','acteDB');
            // if(isset($_POST['log'])){
                //RECUPERATION DES VALEURS DES INPUTS DANS DES VARIABLES
                //USAGES DE CES VARIABLES ET AFFICHAGE DU TEXTE

            // declaration et initialisation des variables
            $nom_ = $_POST['nom'];
            $prenom_ = $_POST['prenom'];
            $date_naiss = $_POST['date'];
            $lieu_naiss = $_POST['lieu'];
            $date_deces = $_POST['date_dec'];
            $lieu_deces = $_POST['lieu_dec'];

            //echo "Je soussigné FD CERTIFIE que,$nom_ $prenom_, née le, $date_naiss,......";

                        // insertion du code SQL 
            $sql = "INSERT INTO `form_dec` (`id`, `nom`, `prenom`, `date_naissance`, `lieu_naissance`
            `date_deces`, `lieu_deces`) VALUES ('0', '$nom_', '$prenom_', '$date_naiss', '$lieu_naiss'
            '$date_deces', '$lieu_deces')";

            //INSERT INTO `form_dec` (`id`, `nom`, `prenom`, `date_naissance`, `lieu_naissance`, `date_deces`, `lieu_deces`, `reg_date`)
            // VALUES (NULL, NULL, NULL, NULL, NULL, NULL, NULL, current_timestamp())
            // insertion dans  la base de dnnée 
            $rs = mysqli_query($con, $sql);
        
        }

?>

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
            <h2>Acte de décès</h2>
            <form method= "POST" action="decesGener.php">
                <div class="input-box">
                    <!-- <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span> -->
                    <input type="text" name="nom" id="nom" required>
                    <label for="">Nom</label>
                </div>
                <div class="input-box">
                    <input type="text" name="prenom" id="prenom" required>
                    <label for="">Prénom(s)</label>
                </div>
                <div class="input-box">
                    <input type="date" name="date" id="date" required>
                    <label for="">Date de naissance</label>
                </div>
                <div class="input-box">
                    <input type="text" name="lieu" id="lieu" required>
                    <label for="">Lieu de naissance</label>
                </div>
                <div class="input-box">
                    <input type="date" name="date_dec" id="date_dec" required>
                    <label for="">Date de décès</label>
                </div>
                <div class="input-box">
                    <input type="text" name="lieu_dec" id="lieu_dec" required>
                    <label for="">Lieu de décès</label>
                </div>
                <div class="input-box">
                    <input type="text" name="type_dec" required>
                    <label for="">Mort de(type de mort)</label>
                </div>
                
                <button type="submit" class="btn" name="log" id="log">Valider</button>

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
