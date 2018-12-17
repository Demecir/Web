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
    $reponse = $bdd->query(' SELECT * FROM users ');
  



    foreach($reponse as $row)
    {
        ?>
     <p> <?php if( $row['pass'] == $password)
     {
        include('utilisateur.html');
     }  ?>  </p>
        <?php 
    }
    ?>
<?php 
include('verification.html');
?>


 
