<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice2</title>
</head>

<body>
    <a href="index.php"></a>
    <?php
    echo $_SESSION['firstname']. '<br>';;
    echo $_SESSION['lastname']. '<br>';;
    echo $_SESSION['age']. '<br>';;
    ?>
</body>

</html>