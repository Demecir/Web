<?php
   
    session_start ();

    session_unset ();

    session_destroy ();

    // On redirige le visiteur vers la page d'accueil
    header ('location: index.php');
    ?>