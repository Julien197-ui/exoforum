<?php require_once "../includes/head.php"?>
    <link rel="stylesheet" href="../css/forum.css">
    <title>Forum</title>
</head>
<body>
    <header>
        <div class="deco">
            <input type="button" value="Deconnexion" id="deconnexion">
        </div>
        <h1>Forum</h1>
    </header>
        <p class="bienvenue vh10">Bienvenue <span id="identifiant"></span>, vous vous êtes connecté à <span id="heure"></span> le <span id="date"></span></p>
        <div class="categories vhBody">
            <div class="categorie ">
                <h2 id="Cat1" class="mobile">Reptiliens</h2>
                <p class="mt20"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, voluptates repudiandae? Dolorem rerum ut veniam, explicabo eos illo adipisci, sapiente libero, unde ab ipsam dolorum vero laboriosam eum fugiat laudantium.</p>
                <a href="../views/categorie1.php" id="Cat1c" class="mobile"><input type="button" value="visiter"></a>
            </div>
            <div class="categorie ">
                <h2 id="Cat2" class="mobile">Complots</h2>
                <p class="mt20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, voluptates repudiandae? Dolorem rerum ut veniam, explicabo eos illo adipisci, sapiente libero, unde ab ipsam dolorum vero laboriosam eum fugiat laudantium.</p>
                <a href="../views/categorie1.php" id="Cat2c" class="mobile"><input type="button" value="visiter"></a>
            </div>
            <div class="categorie ">
                <h2 id="Cat3" class="mobile">Aliens</h2>
                <p class="mt20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam adipisci sed aut omnis reprehenderit? Quis ut est vel minima, ullam cum repellendus nisi hic labore blanditiis asperiores dignissimos, voluptatibus ducimus?</p>
                <a href="../views/categorie1.php" id="Cat3c" class="mobile"><input type="button" value="visiter"></a>
            </div>
        </div>
        <?php require_once "../includes/footer.php"?> 
    <!--<script src="../js/forum.js"></script>-->
</body>
</html>  