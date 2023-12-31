<?php
$tableauIndice = array(
    'modou' => array('modou', 'Paris', 24),
    'bilgiss' => array('', 'bamako', 30),
    'aissatou' => array('aissatou', 'berlin', 22),
    'bineta' => array('bineta', 'MONACO', 19),
);

foreach ($tableauIndice as $personne) {
    echo 'Prénom: ' . $personne[0] . ', Ville: ' . $personne[1] . ', Âge: ' . $personne[2] . PHP_EOL;
}
echo '<br>  ****           **difference entre l exercice 8 et exercice 9 **            ***        </br>'; 
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
        'prenom' => 'BINETA',
        'ville' => 'MONACO',
        'age' => 22
    ),
);

foreach ($tableauAssociatif as $nom => $personne) {
    echo 'Nom: ' . $nom . ', Prénom: ' . $personne['prenom'] . ', Ville: ' . $personne['ville'] . ', Âge: ' . $personne['age'] . PHP_EOL;
}
?>
<footer>
         <p>RETOUR A LA Page Generale<a href="exo0.html"> DES EXERCICES </a>.</p>
     </footer>