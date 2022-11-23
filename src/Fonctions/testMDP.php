<?php

function CalculComplexiteMdp($mdp) :int
{
    $a_mins = false;
    $a_majs = false;
    $a_chiffres = false;
    $a_caracteres = false;

    $nbCharMdp = strlen($mdp);
    for ($i = 0; $i < $nbCharMdp; $i++) {
        $lettre = $mdp[$i];
        if ($lettre >= 'a' && $lettre <= 'z') {
            $a_mins = true;
        } else if ($lettre >= 'A' && $lettre <= 'Z') {
            $a_majs = true;
        } else if ($lettre >= '0' && $lettre <= '9') {
            $a_chiffres = true;
        } else {
            $a_caracteres = true;
        }
    }
    $nbCharPotentiel = 0;
    if ($a_mins === true) {
        $nbCharPotentiel += 26;
    }
    if ($a_majs === true) {
        $nbCharPotentiel += 26;
    }
    if ($a_chiffres === true) {
        $nbCharPotentiel += 10;
    }
    if ($a_caracteres === true) {
        $nbCharPotentiel += 28;
    }

    $final = (log(pow($nbCharMdp, $nbCharPotentiel)) / log(2));
    return $final;
}