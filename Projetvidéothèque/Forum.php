<html>
   
        <head>
            <link rel="stylesheet" href="./utilisateur.css"/>
    </head>

    <header>
        <h1> <span>les derniers films ajoutés</span></h1>
    </header>

    <aside>
            <ul>
                <ol><a href="utilisateur.php">Accueil</a></ol>
                <ol><a href="ajouter.html">Ajouter un film</a></ol>
                <ol><a href="newfiche.html">Nouveau film</a></ol>
                <ol><a href="Forum.php">Forum</a></ol>
                <ol><a href="delogge.php">Déconnexion</a></ol>
            </ul>
    </aside>


<?php      
    try
        {
             $bdd = new PDO ('mysql:host=localhost;dbname=test;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        catch(Exeption $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    $data = $bdd->query("SELECT DISTINCT *
    FROM  commentaires
    INNER JOIN film 
    WHERE commentaires.ID_film = film.ID_film
    LIMIT 0, 10 ;");
   
    
    
    
    foreach($data as $row )
    {
        
            ?>
        <section>
            <table>
                <tr>
                    <td>  </td>
                    <td rowspan="6"> <img id="tamere" src= "<?php echo $row['affiche']?>" width="500" height="550" /></td>
                </tr>
                
                <tr>
                    <td>  </td>
                    <td>   Titre:   <?php echo $row['titre'] ?></td>
                </tr>
                <tr>
                    <td>  </td>
                    <td>   Réalisateur:   <?php echo $row['realisateur'] ?></td>
                </tr>
                <tr>
                    <td>  </td>
                    <td>  Genre:   <?php echo $row['genre'] ?>    </td>
                </tr>
                <tr>
                    <td>  </td>
                    <td>   Note:   <?php echo $row['note'] ?>/20   </td>
                </tr>
                    <td>  </td>
                    <td >   Commentaire:   <?php echo $row['com'] ?>  </td>
                </tr>
            </section>
    
            <?php  
    }
?>
  
    </body>
</html>