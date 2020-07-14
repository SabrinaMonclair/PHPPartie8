<?php

if (isset($_POST['login']) && isset($_POST['password'])) {
    setcookie('login', $_POST['login']);
    setcookie('password', $_POST['password']);
    echo 'Votre cookie a bien étè crée !';
    echo '<a href="showcookie.php">Afficher le cookie</a>';
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice4</title>
</head>

<body>
    <p>Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la validation du formulaire, stocker les informations dans un cookie.</p>

    <div>
        <form action="" method="post">
            <label>Login</label>
            <input type="text" name="login"></input>
            <label>Password</label>
            <input type="password" name="password"></input>
            <input type="submit" value="Créer Cookie">
        </form>
    </div>
</body>

</html>