<?php 
        
        $username= $_POST['pseudo'];
        $password= $_POST['password'];
        $email= $_POST['email'];



        try
        {
             $bdd = new PDO ('mysql:host=localhost;dbname=test;charset=utf8','root','');
        }
        catch(Exeption $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    $bdd->exec("INSERT INTO `users` (`ID_User`, `username`, `pass`, `email`) VALUES (NULL, '$username', '$password', '$email');")
?>

<p>C'est fait retour à la page d'accueil <a href="index.php">Accueil</a> ?</p>  