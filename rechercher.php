<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Rechercher</title>
  <script src="script.js"></script>
</head>
<body>

<br>
<a href="index.php">Menu</a>
<br>
<fieldset>
<legend>Rechercher un joueur</legend>

<form method="get">
    <label for="recherche">Recherche</label>
    <input type="text" name="recherche">

    <input type="submit">
    <br>
    <br>
    <p><?php
    include 'recherche.php';
    ?></p>
</form>


</fieldset>
</body>
</html>