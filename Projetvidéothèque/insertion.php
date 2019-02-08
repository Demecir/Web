<?php 
        session_start ();

        $ID_user= $_SESSION['ID'];
        $film= $_POST['ID_film'];
        $note=$_POST['note'];
        $com=$_POST['com'];
       



        try
        {
             $bdd = new PDO ('mysql:host=localhost;dbname=test;charset=utf8','root','');
        }
        catch(Exeption $e)
        {
            die('Erreur : '.$e->getMessage());
        }


        $bdd->exec("INSERT INTO `film_users` (`ID`, `ID_Users`, `ID_film`) VALUES (NULL, '$ID_user', '$film');");

        $bdd->exec("INSERT INTO `commentaires` (`ID_com`, `ID_Users`, `ID_film`, `note`, `com`) VALUES (NULL, '$ID_user', '$film', '$note', '$com');");

        

      
        header('Location: utilisateur.php');

       ;
