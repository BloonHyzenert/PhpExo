<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title> <?php echo Titre; ?> </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="script.js"></script>
</head>
<body>
<h1><?php
include 'config.php';
echo "Bienvenue sur ".Titre."<br>";
if (!isset($_COOKIE['visite'])) {
    setcookie('visite',1,time()+3600);
    echo "Vous avez visité 1 fois le site<br>";
}
else {
    setcookie('visite',$_COOKIE['visite']+1,time()+3600);
    echo "Vous avez visité ".($_COOKIE['visite']+1)." fois le site<br>";
}

?>
<br>
<a href="jeu.php">Inscription</a>
<br>
<a href="login.php">Connexion</a>
<br>
<a href="calculatrice.php">Calculatrice</a>
<br>
<a href="rechercher.php">Rechercher</a>
</h1>
</body>
</html>

