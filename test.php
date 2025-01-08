<?php

$year = 1986;

function century($year)
{

    // Pour chaque année, je vais prendre les 2 premiers chiffres du nombre, et je rajoute 1.


    // Sauf 20?

}

echo  century($year);





// 1705 --> 18
// 1900 --> 19
// 1601 --> 17
// 2000 --> 20
// 2742 --> 28




// On barre les deux derniers chiffres de la date (unités et dizaines)
// Et on ajoute 1
// Exemple :
// 1789
// 17 + 1 = 18
// 1789 appartient donc au 18e siècle.
// Pour les dates se terminant par 00, on ne change pas de siècle !
// Exemple : 1300 fait partie du 13e siècle