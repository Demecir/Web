<?php 
        
        $titre= $_POST['titre'];
        $realisateur= $_POST['realisateur'];
        $note= $_POST['note'];
        $commentaire= $_POST['commentaire'];



        try
        {
             $bdd = new PDO ('mysql:host=localhost;dbname=test;charset=utf8','root','');
        }
        catch(Exeption $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    $bdd->query("INSERT INTO `users` (`ID_User`, `username`, `pass`, `email`) VALUES (NULL, '$username', '$password', '$email');")
?>

<p>C'est fait retour à la page d'accueil <a href="index.php">Accueil</a> ?</p>  