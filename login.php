<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Login</title>

  <script src="script.js"></script>
</head>
<body>
<h1><?php
include 'config.php';
echo "Bienvenue sur ".Titre;?></h1>
<br>
<a href="index.php">Menu</a>
<fieldset>
<legend>Connexion</legend>

<form action="compte.php" method="post">
    <label for="email">Email :</label>
    <input type="text" name="email"><br>
    <label for="password">Mot de Passe :</label>
    <input type="password" name="password"><br>
    <input type="submit">
</form>

</fieldset>
</body>
</html>