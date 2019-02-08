<head>
        <link rel="stylesheet" href="./newfiche.css"/>
</head>


<?php 
        session_start ();
        $titre= $_POST['titre'];
        $genre= $_POST['genre'];
        $realisateur= $_POST['realisateur'];
        $affiche= $_POST['affiche'];
       



        try
        {
             $bdd = new PDO ('mysql:host=localhost;dbname=test;charset=utf8','root','');
        }
        catch(Exeption $e)
        {
            die('Erreur : '.$e->getMessage());
        }

        $bdd->exec("INSERT INTO `film` (`ID_film`, `titre`, `realisateur`, `genre`, `affiche`) VALUES (NULL, '$titre', '$realisateur', '$genre', '$affiche");
        
        header('Location: utilisateur.php');


