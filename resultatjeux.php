<?php

function resultat($premier, $second)
{

    if (!(is_array($premier) && is_array($second))) {
        echo "Erreur ! Paramètres incorrects, veuillez envoyer des tableaux associatifs.";
        return false;
    }

    if (!(count($premier['notes']) == count($second['notes']))) {
        echo "Erreur ! Les participants n'ont pas les mêmes nombres de points.";
        return false;
    }

    $infos_premier = array(
        'nom' => $premier['nom'],
        'pts' => 0
    );

    $infos_second = array(
        'nom' => $second['nom'],
        'pts' => 0
    );

    for ($i = 0; $i < count($premier['notes']); $i++) {
        if ($premier['notes'][$i] > $second['notes'][$i]) {
            $infos_premier['pts']++;
        } elseif ($premier['notes'][$i] < $second['notes'][$i]) {
            $infos_second['pts']++;
        }
    }

    echo $infos_premier['nom'] . ': ' . $infos_premier['pts'] . " points\n";
    echo $infos_second['nom'] . ': ' . $infos_second['pts'] . " points\n";

    if ($infos_second['pts'] > $infos_premier['pts']) {
        echo "Le gagnant du concours est " . $infos_second['nom'] . ".\n";
    } elseif ($infos_second['pts'] < $infos_premier['pts']) {
        echo "Le gagnant du concours est " . $infos_premier['nom'] . ".\n";
    } else {
        echo "Les deux participants sont à égalité.";
    }
}

$kodjo = array(
    'nom' => "Kodjo",
    'notes' => [12, 8, 15, 10, 11]
);

$awa = array(
    'nom' => "Awa",
    'notes' => [14, 14, 9, 6, 13]
);

resultat($kodjo, $awa);
