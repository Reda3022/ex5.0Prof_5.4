<?php
/**
 * Created by PhpStorm.
 * User: lmo
 * Date: 23.01.17
 * Time: 14:34
 */
$num=240;
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
    <li><a href="p2.php?id=123">Lien paramétré vers page 2</a></li>
    <li><a href="p2.php?num=<?php echo $num; ?>">Lien paramétrée dyn. vers page 2</a></li>
    <li><a href="p2_param.php?num=<?php echo $num; ?>">Lien avec ctrl vers page 2</a></li>

</ul>
</body>
</html>
