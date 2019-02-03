<?php 
      
        $username = isset($_POST['pseudo']) ? $_POST['pseudo'] : NULL;
        $password = isset($_POST['password']) ? $_POST['password'] : NULL;

        try
        {
             $bdd = new PDO ('mysql:host=localhost;dbname=test;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        catch(Exeption $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    $reponse = $bdd->query("SELECT * FROM `users` WHERE `username` LIKE '$username' AND `pass` LIKE '$password';");
    $data=$reponse->fetch();

   
    if( $data != FALSE )
    {
        ?>
        <?php
            session_start();

            $_SESSION['ID']=$data['ID_User'];


            header('Location: utilisateur.php');
            exit();
            echo "3";
            echo "yolo";
            ?> 
        <?php 
    }
    ?>
    <?php 
        header('Location: verification.html');
     
    
?>
