<html>
    <html>
        <head>
            <link rel="stylesheet" href="./utilisateur.css"/>
    </head>

    <body>

    <nav>
            <ul>
                <li><a href="utilisateur.html">Accueil</a></li>
                <li><a href="newfiche.html">Nouveau film</a></li>
                <li><a href="delogge.php">Se delogguer</a></li>
            </ul>
    </nav>

    <h1>Vos films:</h1>

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
    $reponse = $bdd->query("SELECT film_users.ID_Users, film_users.ID_film, film.titre, film.realisateur,film.genre,film.affiche FROM film_users INNER JOIN film ON film_users.ID_film = film.ID_film WHERE film_users.ID_Users='$_SESSION[ID]' ;");
    $data=$reponse;

    foreach($data as $row)
    {
    ?>
        <table>
                <tr>
                    <td>    </td>
                    <td> <img src= "<?php echo $row['affiche']?>" width="500" height="550" /></td>
                    <td>    </td>
                </tr>
                <tr>
                    <td>Titre:<?php echo $row['titre'] ?> </td>
                    <td>Réalisateur:<?php echo $row['realisateur'] ?> </td>
                    <td>Genre:<?php echo $row['genre'] ?> </td>
                    <td>Note: 18/20 </td>
                </tr>
                <tr>
                    <td>Commentaire: Un bon film post-apocalypse </td>
                </tr>
            </table>
    <?php
    }
?>
    </body>
</html>