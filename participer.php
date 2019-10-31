<?php
echo "<br><a href=\"index.php\">Menu</a><br>";
if (isset($_POST) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email'])) {
$f=fopen("participants/".$_POST['email'].".txt","x");
if ($f) {
    fwrite($f,$_POST['email'].";".$_POST['nom'].";".$_POST['prenom']);
    echo "Création d'Email";
}
else {
    echo "Email déjà existante";
}
    echo "<br><br>Nom : ".htmlspecialchars($_POST['nom'])."<br>";
    echo "Prenom : ".htmlspecialchars($_POST['prenom'])."<br>";
    echo "Email : ".htmlspecialchars($_POST['email'])."<br>";
}
fclose($f);
?>