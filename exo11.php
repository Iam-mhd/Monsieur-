<?php
$tableauIndice = array(
    'modou' => array('modou', 'Paris', 24),
    'bilgiss' => array('', 'bamako', 30),
    'aissatou' => array('aissatou', 'berlin', 22),
    'bineta' => array('bineta', 'lome', 19),
);

reset($tableauIndice);
while ($nom = key($tableauIndice)) {
    $personne = current($tableauIndice);
    echo 'Exercice 8 - Nom: ' . $nom . ', Prénom: ' . $personne[0] . ', Ville: ' . $personne[1] . ', Âge: ' . $personne[2] . PHP_EOL;
    next($tableauIndice);
}

echo '<br>  ****           **difference entre l exercice 8 et l exercice 9  **            ***        </br>'; 

$tableauAssociatif = array(
    'modou' => array(
        'prenom' => 'modou',
        'ville' => 'Paris',
        'age' => 24
    ),
    'bilgiss' => array(
        'prenom' => 'bilgiss',
        'ville' => 'bamako',
        'age' => 30
    ),
    'aissatou' => array(
        'prenom' => 'aissatou',
        'ville' => 'berlin',
        'age' => 22
    ),
    'bineta' => array(
        'prenom' => 'bineta',
        'ville' => 'lome',
        'age' => 22
    ),
);

reset($tableauAssociatif);
while ($nom = key($tableauAssociatif)) {
    $personne = current($tableauAssociatif);
    echo 'Exercice 9 - Nom: ' . $nom . ', Prénom: ' . $personne['prenom'] . ', Ville: ' . $personne['ville'] . ', Âge: ' . $personne['age'] . PHP_EOL;
    next($tableauAssociatif);
}
?>

<footer>
         <p>Retrouvez la liste complète des exercices dans la <a href="exo0.html">page générale</a>.</p>
     </footer>