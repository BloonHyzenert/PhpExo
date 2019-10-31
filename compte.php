<?php
if (isset($_POST) && isset($_POST['password']) && isset($_POST['email'])) {
    if($_POST['password']=='hello' && $_POST['email']=='admin'){
        echo "<br><a href=\"index.php\">Menu</a><br>";
        echo "<br>Bienvenue Adminn, ceci est votre tableau de bord";
        echo "<br><a href=\"participant.php\">Liste des participants</a><br>";
        
    }
    else{
        header('Location: login.php');
    }
}
?>