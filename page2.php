<?php
session_start();
echo  $_SESSION['nom']." ".$_SESSION['prenom']. " ".$_SESSION['age'];
echo "<br/>";
if(isset($_COOKIE['login']) && isset($_COOKIE['mdp'])){
    echo 'Votre login est ' .$_COOKIE['login'];
    echo 'Votre login est ' .$_COOKIE['mdp'];
}

?>