<?php require_once "../includes/head.php"?>
<?php require_once "../controllers/registercontroller.php"?>
    <link rel="stylesheet" href="../css/register.css">
    <title>Enregistrer</title>
</head>
<body>
    <header>
        <h1>S'enregistrer</h1>
    </header>
    <div class="cont">
        <form action="../controllers/registercontroller.php" method="POST" id="signup" class="form">
            <div class="form-field error success mt20 vh10" id="nameForm">
                <label for="nomuser">Nom : </label><br>
                <input type="text" name="nomuser" class="input"  autocomplete="off">
                <small></small>
            </div>
            <div class="form-field error success vh10">
                <label for="prenomuser">Prénom : </label><br>
                <input type="text" name="prenomuser" class="input"  autocomplete="off">
                <small></small>
            </div>
            <div class="form-field error success vh10">
                <label for="mailuser"> Mail : </label><br>
                <input type="text" name="mailuser" class="input"  autocomplete="off">
                <small></small>
            </div>
            <div class="form-field error success vh10">
                <label for="passuser">Mot de passe : </label><br>
                <input type="password" name="passuser" class="input" required autocomplete="off">
                <small></small>
            </div>
            <div class="form-field error success vh10">
                <label for="confirm-password">Confirmation du mot de passe : </label><br>
                <input type="password" name="confirm-password" class="input"  autocomplete="off">
                <small></small>
            </div>
            <div class="form-field vh10">
                <input type="submit" value="S'enregistrer" class="envoyer">
            </div>
            <a href="../views/login.php"><p class="mb10">Vous avez déjà un compte?</p></a>
        </form>
    </div>
    <?php require_once "../includes/footer.php"?> 
    <!--<script src="../js/register.js"></script>-->
</body>
</html>