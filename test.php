<?php




//fonction qui retourne un entier 0, 1 ou 2

// Le bowling a une règle particulière : 
// à la suite d'un lancer de 10 points, les deux prochains lancers gagnent le double de leurs points si applicable.

// fonction qui prend 2 tableaux d'entiers (joueur et joueur 2)

//scores des joueurs 
// Les tableaux d'entiers doivent être de la même longueur afin de calculer le score.


// La fonction retourne :
//   1 si le joueur correspondant au premier tableau l'emporte
//   2 si le joueur correspondant au second tableau l'emporte
//   0 s'ils sont ex-aequo ou s'il est impossible de calculer un gagnant

function calculateScore($score)
{
    $totalScore = 0;


    // [1, 10, 3, 2],

    for ($i = 0; $i < count($score); $i++) {

        if ($score[$i] === 10) {

            if (isset($score[$i + 1])) {
                $totalScore +=  $score[$i + 1];
            }

            if (isset($score[$i + 2])) {

                $totalScore +=  $score[$i + 2];
            }
        }
        $totalScore += $score[$i];
    }
    return $totalScore;
}


function findWinner($playerOneScore, $playerTwoScore)
{
    // $score1 = array_sum($playerOneScore);
    // $score2 = array_sum($playerTwoScore);

    $score1 =  calculateScore($playerOneScore);
    $score2 =  calculateScore($playerTwoScore);


    if ($score1 === $score2) {
        return 0;
    } elseif ($score1 > $score2) {
        return 1;
    } else {
        return 2;
    }
}



var_dump(findWinner([1, 10, 3, 2], [4, 5, 7, 1]) === 1);


var_dump(findWinner(
    [3, 6, 7, 7, 10],
    [10, 4, 4, 0, 9]
) === 2);
// Données de test
// Jeu 1
// p1 = [1,10,3,2]
// p2 = [4,5,7,1]

// Retour attendu ici : 1

// Jeu 2
// p1 = [3, 6, 7, 7, 10]
// p2 = [10, 4, 4, 0, 9]

// Retour attendu ici : 2