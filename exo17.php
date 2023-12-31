<?php
function afficherTableauMultidimensionnel($tableau) {
    echo '<table border="1">';
    echo '<tr>';
    foreach (array_keys($tableau[0]) as $cle) {
        echo '<th>' . htmlspecialchars($cle) . '</th>';
    }
    echo '</tr>';
    foreach ($tableau as $ligne) {
        echo '<tr>';
        foreach ($ligne as $valeur) {
            echo '<td>' . htmlspecialchars($valeur) . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
$donnees = array(
    array('Nom' => 'BALDE', 'Age' => 25, 'Ville' => 'new-york'),
    array('Nom' => 'sow', 'Age' => 30, 'Ville' => 'mexico'),
    array('Nom' => 'Didier', 'Age' => 22, 'Ville' => 'London')
);

afficherTableauMultidimensionnel($donnees);
?>
<footer>
         <p>Retrouvez la liste complète des exercices dans la <a href="exo0.html">page générale</a>.</p>
     </footer>