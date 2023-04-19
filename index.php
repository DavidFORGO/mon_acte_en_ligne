<!DOCTYPE html>
<head>
    <title>Demande d'acte en ligne</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body >
        <?php include('head.php');?>
        <section class="corp">
                <!-- debut accueil -->
            <section class="main" id="accueil">
                <?php include_once('accueil.php');?>
            </section>
            <!-- fin accueil -->
            <!-- debut connexion -->
            <section class="main" id="connexion">
                <div id="title" class="titre">
                <h2>CONNEXION</h2>
                <hr>
                </div>
                <?php include_once('connexion.php');?>
            </section>
            <!-- fin connexion -->
        </section>
        <footer>
            <?php include_once('footer.php');?>  
        </footer>   
        <script >
            const wrapper = document.querySelector('.wrapper');
            const loginLink = document.querySelector('.login-link');
            const registerLink = document.querySelector('register-link');

            registerLink.addEventListener('click',()=> {
                wrapper.classList.add('active');
            });
            loginLink.addEventListener('click',()=> {
                wrapper.classList.remove('active');
            });
        </script> 
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>