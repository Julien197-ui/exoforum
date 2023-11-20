<?php

require_once "../includes/connexiondb.php";
 $con = connectdb();
 
  
 
 //on vérifie si les champs sont remplis
 if(isset($_POST['mailuser']) && isset($_POST['passuser']) && isset($_POST['nomuser']) && isset($_POST['prenomuser']) && isset($_POST['confirm-password'])){
    //création des variables pour stocker les données des champs
    $nomuser = $_POST['nomuser'];
    $regnom = '/^(?=.*[\D])(?=.{3,})/';
    $prenomuser = $_POST['prenomuser'];
    $mailuser= $_POST['mailuser'];
    $regmail = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
    $stmt = $con->prepare("SELECT * FROM utilisateur WHERE mailuser=?");
    $stmt->execute([$mailuser]); 
    $utilisateur = $stmt->fetch();
    $passuser= $_POST['passuser'];
    $regpass = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\#\+\-\^\[\]])(?=.{8,})/';
    $confirm = $_POST['confirm-password'];
    var_dump($nomuser, $prenomuser, $mailuser,$passuser,$confirm);
    if ($utilisateur) {
        echo "email existe";
    } else {
        if(!preg_match($regnom, $nomuser  ) ||!preg_match( $regnom,$prenomuser) || !preg_match( $regmail,$mailuser) ||  !preg_match( $regpass,$passuser) ||  $confirm != $passuser ){
            echo 'Le mail choisi ne convient pas';
        }else{
            echo 'Le mail choisi convient';
            $req= $con->prepare('INSERT INTO utilisateur (nomuser,prenomuser,mailuser,passuser) VALUES (?,?,?,?)');
            //puis on exécute notre requête
            $req->execute(array($nomuser,$prenomuser,$mailuser,$passuser));
            header('location: ../views/login.php');
        }
    } 
 }
 
 ?>