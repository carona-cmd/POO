<?php


try {
    echo 'Exécution du bloc try' . PHP_EOL;
    getProfit(180, 200);
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
} finally {
    echo 'Exécution du bloc finally' . PHP_EOL;
}

echo 'Exécution du reste du code' . PHP_EOL;

function getProfit($sales, $charges)
{
    if ($sales < $charges) {
        throw new Exception('Attention le résultat est négatif<br>');
    }

    return $sales - $charges;
}
//L'exécution de ce code affichera dans l'ordre :
//
//Exécution du bloc try
//
//Attention le résultat est négatif
//
//Exécution du bloc finally
//
//Exécution du reste du code