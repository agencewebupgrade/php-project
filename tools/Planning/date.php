<?php


function getAll($year)
{



    global $d;
    global $w;
    global $y;
    global $m;
    $r = array();
    $date = strtotime($year . '-01-01');

    while (date('Y', $date) <= $year) {
        //Ce que je veux => $r[ANNEE][MOIS][JOUR] = JOUR DE LA SEMAINE
        $y = date('Y', $date);
        $m = date('m', $date);
        $d = date('d', $date);
        $w = str_replace('0', '7', date('w', $date));
        $r[$y][$m][$d] = $w;
        $date = $date + (24 * 3600);
        // echo $w;
    }
    return $r;
}
