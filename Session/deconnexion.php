<?php
session_start();
session_unset(); //en va supprimer la variable de session 
session_destroy(); // en va supprimer la session

header("location: ../Vue/Authontification.php");
?>