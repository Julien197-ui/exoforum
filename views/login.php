<?php require_once "../includes/head.php"?>
<?php require_once "../controllers/logincontroller.php"?>
    <link rel="stylesheet" href="../css/login.css">
    <title>Connexion</title>
</head>
<body>
    <header>
        <h1>Se connecter</h1>
    </header>
    <div class="cont">
        <form action="../controllers/logincontroller.php" method="POST" id="signup" class="form">
            <div class="form-field error success mt20 vh10">
                <label for="mailuser"> Mail : </label><br>
                <input type="text" name="mailuser" class="input" autocomplete="off">
                <small></small>
            </div>
            <div class="form-field error success vh10">
                <label for="passuser">Mot de passe : </label><br>
                <input type="password" name="passuser" class="input" autocomplete="off">
                <small></small>
            </div>
            <div class="form-field vh10">
                <input type="submit" value="Se connecter" class="envoyer">
            </div>
            <a href="../views/register.php"><p class="mb10 vh10">Vous n'avez pas de compte?</p></a>
        </form>
    </div>
    <?php require_once "../includes/footer.php"?> 
   <!--<script src="../js/login.js"></script>-->
</body>
</html>