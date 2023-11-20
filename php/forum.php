<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="../css/resetCss.css">
    <link rel="stylesheet" href="../css/forum.css">
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
                <a href="../html/categorie1.html" id="Cat1c" class="mobile"><input type="button" value="visiter"></a>
            </div>
            <div class="categorie ">
                <h2 id="Cat2" class="mobile">Complots</h2>
                <p class="mt20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, voluptates repudiandae? Dolorem rerum ut veniam, explicabo eos illo adipisci, sapiente libero, unde ab ipsam dolorum vero laboriosam eum fugiat laudantium.</p>
                <a href="../html/categorie1.html" id="Cat2c" class="mobile"><input type="button" value="visiter"></a>
            </div>
            <div class="categorie ">
                <h2 id="Cat3" class="mobile">Aliens</h2>
                <p class="mt20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam adipisci sed aut omnis reprehenderit? Quis ut est vel minima, ullam cum repellendus nisi hic labore blanditiis asperiores dignissimos, voluptatibus ducimus?</p>
                <a href="../html/categorie1.html" id="Cat3c" class="mobile"><input type="button" value="visiter"></a>
            </div>
        </div>
    <footer>
        <div>
            <p class="footerText">© Copyright 2023</p>
        </div>
    </footer>
    <script src="../js/forum.js"></script>
</body>
</html>