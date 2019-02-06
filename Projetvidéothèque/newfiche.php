<head>
        <link rel="stylesheet" href="./newfiche.css"/>
</head>


<?php 
        session_start ();
        $titre= $_POST['titre'];
        $genre= $_POST['genre'];
        $realisateur= $_POST['realisateur'];
       



        try
        {
             $bdd = new PDO ('mysql:host=localhost;dbname=test;charset=utf8','root','');
        }
        catch(Exeption $e)
        {
            die('Erreur : '.$e->getMessage());
        }

        if($titre != '')
        {
            $reponse=$bdd->query("SELECT * FROM `film` WHERE titre='$titre'");
        }
        else
        {
            if($realisateur !='')
            {
                $reponse=$bdd->query("SELECT * FROM `film` WHERE realisateur='$realisateur'");
            }
            else
            {
                $reponse=$bdd->query("SELECT * FROM `film` WHERE genre='$genre'");
            }
        }

        $data=$reponse;

 
       
        foreach($data as $row )
    {
            ?>
        <table>
                <tr>
                    <td colspan="4"> <img src= "<?php echo $row['affiche']?>" width="500" height="550" /></td>
                </tr>
                <tr>
                    <td>   Titre:<h2><?php echo $row['titre'] ?>    </h2></td>
                    <td>   Réalisateur:<h2><?php echo $row['realisateur'] ?>    </h2></td>
                    <td>  Genre:<h2><?php echo $row['genre'] ?>    </h2></td>
            </table>

            <form method="post" action="insertion.php">
               <h1> <input value="<?php echo $row['ID_film'] ?>" type="text" name="ID_film"  />  </h1>
            <input type="submit"  value="Ajouter" />
            </form>

            <?php  
    }
?>


<p>Pas trouver ? Dommage <a href="newfiche.html">essaye encore</a> ?</p>  