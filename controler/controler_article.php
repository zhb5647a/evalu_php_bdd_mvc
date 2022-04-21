<?php
    include '../utils/connect_bdd.php';
    include '../model/model_article.php';
    include '../view/view_article.php';
/*---------------------------------------
                TESTS ET LOGIQUE
    ---------------------------------------*/
    //test si le bouton submit à été cliqué

    if(isset($_POST['submit'])){
        //test champs
        if(isset($_POST['nom_article']) AND isset($_POST['prix_article'])AND 
        !empty($_POST['nom_article']) AND !empty($_POST['prix_article'])){
            //récup super globale post
            $nom = $_POST['nom_article'];
            $prix = $_POST['prix_article'];

            addarticle($bdd, $nom, $prix);


        }
        else {
            echo 'veuillez remplir tous les champs';
        }

    }
    ?>