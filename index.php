<?php
session_start();
    $_SESSION['nom'] = 'Jean';
    $_SESSION['prenom'] = 'jean';
    $_SESSION['age'] = 29;

if(isset($_POST['login']) && isset($_POST['mdp'])){
    setcookie('login', $_POST['login'], time() + 365*24*3600, null, null, false, true);
    setcookie('mdp', $_POST['mdp'], time() + 365*24*3600, null, null, false, true);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    echo $_SERVER["REMOTE_ADDR"]; 
    echo $_SERVER['HTTP_USER_AGENT']; 
 ?>
 <a href="page2.php" >page 2</a>
 <form method="post" action="">
    <label for="login">login</label>
        <input type="text" name="login">
    <label for="mdp">mot de passe</label>
        <input type="text" name="mdp">
    <input type="submit" value="envoyer">
 </form>
</body>
</html>