<?php
if (isset($_COOKIE['login'])) {
    echo 'Votre ID de session est ' . $_COOKIE['login'] . '<br>';
}
if (isset($_COOKIE['password'])) {
    echo 'Votre MDP est ' . $_COOKIE['password'];
} else {
    echo 'Informations indisponible';
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice4</title>
</head>

<div>
    <a href="index.php">Revenir</a>
</div>
<div>
    <a href="changecookie.php">Modifier cookie</a>
</div>
</body>

</html>