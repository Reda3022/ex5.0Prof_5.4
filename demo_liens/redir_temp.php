<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>redir 1</title>
</head>
<body>

<p>Redirection</p>
<?php
    header('refresh:5; url=p1.php');
    echo 'Dans 5 secondes vous serez redirigé vers la page1...';
    //exit;

?>
<p> Message après redirection visible s'il n'y a pas d'EXIT</p>
</body>
</html>