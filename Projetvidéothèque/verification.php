<?php 
       
        $username = isset($_POST['pseudo']) ? $_POST['pseudo'] : NULL;
        $password = isset($_POST['password']) ? $_POST['password'] : NULL;
        //$username="yolo";
        //$password="yolo";

        try
        {
             $bdd = new PDO ('mysql:host=localhost;dbname=test;charset=utf8','root','');
        }
        catch(Exeption $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    $reponse = $bdd->query(' SELECT * FROM users WHERE username LIKE "yolo" AND `pass` LIKE "yolo" ');
    $data=$reponse->fetch();


    echo "1";
    echo $data['username'];
    echo $data['pass'];
    echo "2 ";
    echo $_POST['password'];

  
    if( $data["pass"] == $_POST['password'] )
    {
        ?>
        <?php
            //header('utilisateur.html');
            //exit();
            echo "3";
            echo "yolo";
            ?> 
        <?php 
    }
   
    
?>
