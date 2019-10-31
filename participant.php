<?php
echo "<br><a href=\"index.php\">Menu</a><br>";
if ($dir=scandir(participants)) {
    echo "<h1>Liste des Joueurs</h1>";
    foreach($dir as $i => $file){
        if($file!='.' && $file!='..'){
        $f=fopen("participants/".$file,"r");
            if($f){
            $tab=explode(";",fgets($f));
            echo "Joueur ".($i-1)." : ".$tab[1]." ".$tab[2]."  / Email : ".$tab[0]."<br>";
            fclose($f);
            }
            else{
                echo $file."<br>";
            }
        }
    }
}
else echo "Aucun participant";
?>