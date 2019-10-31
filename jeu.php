<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title><?phpecho Titre;?></title>

  <script src="script.js"></script>
</head>
<body>
<h1><?php
include 'config.php';
echo "Bienvenue sur ".Titre;?></h1>
<br>
<a href="index.php">Menu</a>
<fieldset>
<legend>Inscription</legend>

<form action="participer.php" method="post">
    <label for="email">Email :</label>
    <input type="text" name="email"><br>
    <label for="nom">Nom    :</label>
    <input type="text" name="nom"><br>
    <label for="prenom">Prenom :</label>
    <input type="text" name="prenom"><br>
    <input type="submit">
</form>

</fieldset>
</body>
</html>

