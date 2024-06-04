<?php
//if
$var1 = 5;
$var2 = '5';

 if ($var1 == $var2) {
     echo "$var1 é igual a $var2 \n\n";
} else {
     echo "$var1 não é igual a $var2 \n\n";
}

//switch
 echo "\n\n";

$fruta = "Laranja";
 switch ($fruta) {
     case 'Laranja':
         echo "A fruta é Laranja";
         break;
     case 'Maçã':
         echo "A fruta é Maça";
         break;
     case 'Limão'
         echo "A fruta é Limão";
         break;
     default:
         echo "A fruta é desconhecida";
         break;
}

