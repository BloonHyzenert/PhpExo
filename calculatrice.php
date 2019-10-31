<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Calculatrice</title>
  <script src="script.js"></script>
</head>
<body>

<br>
<a href="index.php">Menu</a>
<br>
<fieldset>
<legend>Calculatrice</legend>

<form method="get">
    <label for="var1">Valeur 1</label>
    <input type="text" name="var1">
    <label for="op">Opérateur</label>
    <input type="text" name="op">
    <label for="var2">Valeur 2</label>
    <input type="text" name="var2">

    <input type="submit">
    <p><?php
    include 'Calcul_5.php';
    echo "Résultat : ".basicOp($_GET['op'],$_GET['var1'],$_GET['var2']);
    
    ?></p>
</form>


</fieldset>
</body>
</html>