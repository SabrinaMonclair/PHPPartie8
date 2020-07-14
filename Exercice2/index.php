<?php

session_start();
$_SESSION['lastname'] = 'Monclair';
$_SESSION['firstname'] = 'Sabrina';
$_SESSION['age'] = 33;

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice2</title>
</head>

<body>
  <a href="session.php"> la page index, faire un lien vers une autre page. Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions.
Ces variables auront été définies directement dans le code. 
Il faudra afficher le contenu de ces variables sur la deuxième page.</a> 
  
</body>

</html>
