<?php
$message1 = 'q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj';
// Secret trouvé : toutes les ficelles
$message2 = 'q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj';
// Secret trouvé : toutes les ficelles
$message3 = 'aopi?sgnirts@#?sedhtg+p9l!';
// Secret trouvé : des strings

$keynumber = strlen($message2)/2;
echo "le chiffre clé : " . $keynumber . PHP_EOL;

$subMessage2 = substr($message2, 5, $keynumber);
echo "La sous chaine : " . $subMessage2 . PHP_EOL;

$remplace = str_replace('@#?', ' ', $subMessage2);
echo  "Après remplacement : " . $remplace . PHP_EOL;

$resultat = strrev($remplace);
echo "Le message secret: " . $resultat . PHP_EOL;

