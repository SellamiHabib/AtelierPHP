<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>recap</title>
    <link href="style.css" rel="stylesheet">
</head>
<body style="flex-direction: column">
<h3>Bonjour  <?php printf( "%s %s",$_POST['prenom'] , $_POST['nom'])?>
</h3>
<h3>Prix totale : </h3> <?php
$nbSandwich = $_POST['nbSandwich'];
$prix = $nbSandwich * 4;
if ($nbSandwich >= 10)
    $prix = $prix * 0.9;
echo " <b>$prix dt</b>";
?>
</body>
</html>
