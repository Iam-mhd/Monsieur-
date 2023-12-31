<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul De La TVA</title>
</head>
<body>
    <h2>Calcul De La TVA et DuPrix TTC</h2>
    <form method="post" action="">
        <label for="prixHT">Prix HT :</label>
        <input type="text" name="prixHT" value="<?php echo isset($_POST['prixHT']) ? $_POST['prixHT'] : ''; ?>" />

        <label for="tauxTVA">Taux de TVA :</label>
        <input type="text" name="tauxTVA" value="<?php echo isset($_POST['tauxTVA']) ? $_POST['tauxTVA'] : ''; ?>" />

        <input type="submit" value="Calculer" />
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $prixHT = isset($_POST['prixHT']) ? floatval($_POST['prixHT']) : 0;
        $tauxTVA = isset($_POST['tauxTVA']) ? floatval($_POST['tauxTVA']) : 0;
        $montantTVA = $prixHT * ($tauxTVA / 100);
        $prixTTC = $prixHT + $montantTVA;
        echo '<h3>Résultats :</h3>';
        echo '<p>Montant de la TVA : ' . number_format($montantTVA, 2) . '</p>';
        echo '<p>Prix TTC : ' . number_format($prixTTC, 2) . '</p>';
    }
    ?>
    <footer>
         <p>Retrouvez la liste complète des exercices dans la <a href="exo0.html">page générale</a>.</p>
     </footer>
</body>
</html>
