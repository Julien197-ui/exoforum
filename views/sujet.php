<?php require_once "../includes/head.php"?> 
    <link rel="stylesheet" href="../css/sujet.css">
    <title>Sujet</title>
</head>
<body>
    <header>
        <div class="deco">
        <input type="button" value="Deconnexion" id="deconnexion">
    </div>
    <h1 id="titre"></h1>
    </header>
    <div class="backgroundTable">
        <table id="commentaires">
            <tbody id="table">
                <tr>
                    <td id="texte"></td>
                    <td class="right"><span id="prenom"></span> <span id="nom"></span><br> envoyer le :<span id="date"></span> à <span id="heure"></span></td>
                </tr>
            </tbody>
        </table>
    </div>    
    <div class="message">
        <p>Message à envoyer :</p>
        <textarea name="" id="commentaire" cols="30" rows="10"></textarea>
        <input type="button" id="envoyer" value="envoyer" class="inputs">
        <small></small>
    </div>
    <?php require_once "../includes/footer.php"?> 
    <script src="../js/sujet.js"></script>
</body>
</html>