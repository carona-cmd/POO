<?php
//La logique métier souhaite que le résultat du chiffre d'affaires moins les charges ne puisse pas être négatif.
// De même, les charges ou les ventes ne peuvent être inférieures à 0.
// Comme il ne s'agit pas d'une erreur interne à PHP, nous lançons nous-mêmes une exception :


function getProfit($sales, $charges)
{
    if ($sales < $charges) {
        throw new Exception('Attention : le résultat est négatif');
    }
    if ($sales < 0 || $charges < 0) {
        throw new Exception('Attention : les ventes ou les charges ne peuvent être négatives');
    }
    return $sales - $charges;
}

