<html>

    <head>
            <link rel="stylesheet" href="./utilisateur.css"/>
    </head>

    <body>
    <?php      
     session_start ();
     ?>

    <header>
        <h1> <span> Vos films:</span></h1>
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
    $data = $bdd->query("SELECT film_users.ID_Users, film_users.ID_film, film.titre, film.realisateur,film.genre,film.affiche,commentaires.note,commentaires.com 
    FROM film_users
    INNER JOIN film 
    INNER JOIN commentaires
    ON film_users.ID_film = film.ID_film AND  film_users.ID_film = commentaires.ID_film
    WHERE film_users.ID_Users='$_SESSION[ID]' AND commentaires.ID_Users='$_SESSION[ID]';");
   
    
    
    
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