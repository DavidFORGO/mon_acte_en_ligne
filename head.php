<!-- <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>

</head> -->
<header>
            <nav >  
                <img src="images/armoiries-bon-2gg.png" alt="logo MATD">
                <h1>
                    Ministère de l'Administration <br> Territoriale et de la Décentralisation 
                </h1>
                
                <div id="onglets">
                    
                    <a href="index.php">Acceuil</a>
                    <a href="index.php">connexion/inscription</a>
                </div>
            </nav>
</header>

        <div class="bande_rouge">
            <img src="images/etoile2.png" alt="etoile d'or" >
        </div> 
        <div class="bande_verte">
        </div>

<style>
            
nav{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}
nav h5{
    color: #232323;
    font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    padding: 18px, 0px, 0px;
    margin: 5px;
}
nav img{
    height: 80px;
    width: 90px;
    margin: 5px;
}
nav #onglets a{
    text-decoration: none;
    margin: 50px;
    border-bottom: 1px solid #000;
    padding-bottom: 5px;
    color: #232323;
    font-family:'Times New Roman', Times, serif;
    font-size: 25px;
}
nav #onglets{
    margin-top: 3px;
    margin-left: 300px;
}
header{
    display: flex;
    flex-direction: column;
    align-items: center;
    /*position: fixed;*/
    /*background: url('images/armoiries-bon-2gg.png');
    background-size: cover;*/
    
}

.bande_rouge{
    display: block;
    margin: 0px;
    width: 100%;
    background-color: #E2341D;
    text-align: center;
    font-size: 1.1em; 
    height: 15px;
}
.bande_verte{
    display: block;
    margin: 0px;
    width: 100%;
    background-color: #158212;
    text-align: center;
    font-size: 1.1em;
    height: 15px;
}

.bande_rouge img{
    width: 25px;
    height: 25px;
    
}
</style>