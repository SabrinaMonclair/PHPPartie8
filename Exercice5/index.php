<?php


if (isset($_POST['login']) && isset($_POST['password'])) {
    setcookie('login', $_POST['login'], time() + (86400 * 30), "/");
    setcookie('password', $_POST['password'], time() + (86400 * 30), "/");
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice5</title>
</head>

<body>
    <p>Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.</p>

    <div>
        <form action="" method="post">
            <label>Login</label>
            <input type="text" name="Login"></input>
            <label>Password</label>
            <input type="password" name="Password"></input>
            <input type="submit" value="Créer Cookie">
        </form>
    </div>
</body>

</html>