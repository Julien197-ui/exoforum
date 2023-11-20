<?php

require_once "../includes/connexiondb.php";
 $con = connectdb();
 
  
 
 //on vérifie si les champs sont remplis
 if(isset($_POST['mailuser']) && isset($_POST['passuser'])){
    //création des variables pour stocker les données des champs
    $mailuser= $_POST['mailuser'];
    $regmail = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
    $passuser= $_POST['passuser'];
    $regpass = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\#\+\-\^\[\]])(?=.{8,})/';
    var_dump( $mailuser,$passuser);
    $stmt = $con->prepare("SELECT * FROM utilisateur WHERE mailuser=? and passuser=?");
    $stmt->execute([$mailuser,$passuser]); 
    $utilisateur = $stmt->fetch();
        if( !preg_match( $regmail,$mailuser) ){
            echo 'Le mail choisi ne convient pas';
        }else if(!preg_match( $regpass,$passuser) ){
            echo 'Le mot de passe ne convient pas';
        }else if (!$utilisateur) {
            echo "email existe";
        } else {
            header('location: ../views/forum.php'); 
            //$req= $con->session_start('SET INTO utilisateur (nomuser,prenomuser,mailuser,passuser) VALUES (?,?,?,?)');
        }
      }
 
 ?>