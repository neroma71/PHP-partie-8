<?php
    setcookie('login', "bob", time() + 365*24*3600, null, null, false, true);
    setcookie('mdp', "roger", time() + 365*24*3600, null, null, false, true);

    if(isset($_COOKIE['login']) && isset($_COOKIE['mdp'])){
        echo 'Votre login est ' .$_COOKIE['login'];
        echo 'Votre login est ' .$_COOKIE['mdp'];
    }
?>