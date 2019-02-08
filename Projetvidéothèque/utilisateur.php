<html>
    <html>
        <head>
            <link rel="stylesheet" href="./utilisateur.css"/>
    </head>

    <body>

    <nav>
            <ul>
                <ol><a href="utilisateur.php">Accueil</a></ol>
                <ol><a href="ajouter.html">Ajouter un film</a></ol>
                <ol><a href="newfiche.html">Nouveau film</a></ol>
                <ol><a href="delogge.php">Se delogguer</a></ol>
            </ul>
    </nav>

   

    <header>
        <h1> <span> Vos films:</span></h1>
    </header>

     <?php      
     session_start ();
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
        <table>
                <tr>
                    <td colspan="4"> <img src= "<?php echo $row['affiche']?>" width="500" height="550" /></td>
                </tr>
                <tr>
                    <td>   Titre:<h2><?php echo $row['titre'] ?>    </h2></td>
                    <td>   Réalisateur:<h2><?php echo $row['realisateur'] ?>    </h2></td>
                    <td>  Genre:<h2><?php echo $row['genre'] ?>    </h2></td>
                    <td>   Note:<h2> <?php echo $row['note'] ?>/20   </h2></td>
                    <td colspan="4">Commentaire: <h3><?php echo $row['com'] ?> </h3> </td>
                </tr>
            </table>
            <?php  
    }
?>
    </body>
</html>