<?php require_once "includes/head.php"?>
    <link rel="stylesheet" href="../css/style.css">
    <title>Accueil</title>
</head>
<body>
    <header>
        <h1>Accueil</h1>
    </header>
    <div class="boutons">
     <div class="login"> 
        <label for="register">Deviens toi aussi un reptilien</label>  
        <a href="../views/register.php"><input type="button" value="S'enregistrer" id="register"></a>
     </div>
     <div class="login">  
        <label for="login">Déjà un reptilien?</label>
        <a href="../views/login.php"><input type="button" value="Se connecter" id="login"></a>
     </div>
    </div>
    <?php require_once "includes/footer.php"?> 
</body>
</html>