<?php 
function connectdb(){
    //variable pour le serveur
    $serveur = "localhost";
     //variable pour le user
    $user = "root";
     //variable pour le mdp
    $passwd = "";
     //variable pour le nom de la bdd
    $bdd = "forum";

   
    try {
        $con =  new PDO('mysql:host='.$serveur.';dbname='.$bdd, $user, $passwd);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $con;
    } catch (PDOException $error) {
        echo 'N° : '.$error->getCode().'<br />';
    die ('Erreur : '.$error->getMessage().'<br />');
    }
}
?>