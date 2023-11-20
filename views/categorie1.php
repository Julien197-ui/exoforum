<?php require_once "../includes/head.php"?>
    <link rel="stylesheet" href="../css/categorie.css">
    <title>Catégories</title>
</head>
<body>
    <header>
        <div class="deco">
        <input type="button" value="Deconnexion" id="deconnexion">
    </div>
       <h1 class="title" id="title"></h1>
    </header>
    <div class="sizes">
       <div class="backgroundCol">
        <table>
            <thead>
                <tr>
                    <th class="leftBord mobile">Sujet</th>
                    <th class="leftBord displayBorder mobile">dernier commentaire</th>
                    <th class="leftBord displayBorder mobile">Auteur</th>
                </tr>
            </thead>
            <tbody id="table" class="displayBorder">
            </tbody>
            <tfoot >
                <tr>
                    <td class="displayBorder">
                        <input type="button" value="Ajouter un sujet" class="toggle inputs mobile" id="hidden">
                    </td>
                    <td class="hiddenBorder"></td>
                    <td class="hiddenBorder"></td>
                </tr>
            </tfoot>  
        </table>
       </div>  
        <div id="newSujet" class="hidden add">
            <div id="form" class="form mobile">
                <label for="titre" >Titre: </label><br>
                <input type="text" placeholder="Votre titre" class="input mb10" id="titre">
                <textarea  id="commentaire" placeholder="Votre premier message" cols="30" rows="10" class="textBox mb10"></textarea>
                <input type="button" value="Ajouter" class=" inputs mb10 mobile" id="test">
                <small></small>
            </div>
        </div>
    </div>          
    <?php require_once "../includes/footer.php"?> 
  <script src="../js/categorie.js"></script>  
</body>
</html>