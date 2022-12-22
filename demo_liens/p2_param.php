<?php
/**
 * Created by PhpStorm.
 * User: lmo
 * Date: 23.01.17
 * Time: 14:34
 */

$error = '';
$num = filter_input(INPUT_GET, 'num', FILTER_VALIDATE_INT);

//$num = $_GET['num'];

// Traite la réponse du filtre. Vérifie que ce soit un nombre ou du moins que la vriable n'est pas vide.
if (($num === false) || ($num === null)) {
    $error = 'pas de paramètre valide';
    $num = '';
}

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>p1</title>
</head>
<body>

<ul>
    <li><a href="p1.php?num= <?php echo $num; ?>">Lien paramétrée vers page 1</a></li>
    <li><a href="p2.php">Lien vers page 2</a></li>
</ul>

<h2>Valeur reçu par GET</h2>
<p> <?php echo $num; ?> </p>
<p> <?php echo $error; ?> </p>

</body>
</html>
