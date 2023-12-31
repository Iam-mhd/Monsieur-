<!DOCTYPE html>
<html>
<head>
    <title>Calcul du rayon d'un cercle</title>
</head>
<body>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rayon = $_POST["rayon"];
        if (is_numeric($rayon) && $rayon > 0) {
            $diametre = 2 * $rayon;
            $perimetre = 2 * M_PI * $rayon;
            $surface = M_PI * pow($rayon, 2);
            echo "<h2>Résultats :</h2>";
            echo "<p>Diamètre : $diametre</p>";
            echo "<p>Périmètre : $perimètre</p>";
            echo "<p>Surface : $surface</p>";
        } else {
            echo "<p>Veuillez remplir  un rayon valide (nombre strictement positif).</p>";
        }
    }
?>

<h2>Calcul du cercle</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="rayon">Rayon du cercle :</label>
    <input type="text" name="rayon">
    <input type="submit" value="Calculer">
</form>
<footer>
         <p>RETOUR A LA Page Generale<a href="exo0.html">DES EXERCICE</a>.</p>
     </footer>
</body>
</html>
