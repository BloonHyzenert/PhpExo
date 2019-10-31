<?php
/*
Créer une fonction qui effectue quatre opérations mathématiques de base.

La fonction doit prendre trois arguments - opération (chaîne / caractère), valeur1 (nombre), valeur2 (nombre).
La fonction doit renvoyer le résultat des nombres après l'application de l'opération choisie.*/

function basicOp($op, $val1, $val2)
{
  switch($op){
    case '+':
    case 'plus':
      return $val1 + $val2;

    case '-':
    case 'moins':
    return $val1 - $val2;

    case '*':
    case 'fois':
    return $val1 * $val2;

    case '/':
    case 'divisé':
    return $val1 / $val2;

    default :
    return "Erreur opérateur : {*,-,+ ou /}";
  }
}

  ?>