<!DOCTYPE html>
<html>
<head>
    <title>Calcul du PPCM</title>
</head>
<body>

<?php
    function pgcd($a, $b) {
        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        return $a;
    }

    function ppcm($a, $b) {
        return ($a * $b) / pgcd($a, $b);
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $entier1 = $_POST["entier1"];
        $entier2 = $_POST["entier2"];
        if (is_numeric($entier1) && is_numeric($entier2) && $entier1 > 0 && $entier2 > 0) {
            $ppcm_result = ppcm($entier1, $entier2);
            echo "<h2>Résultat :</h2>";
            echo "<p>Le PPCM de $entier1 et $entier2 est : $ppcm_result</p>";
        } else {
            echo "<p>Veuillez saisir des entiers valides (nombres positifs).</p>";
        }
    }
?>

<h2>Calcul du PPCM</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="entier1">Entier 1 :</label>
    <input type="text" name="entier1">
    <br>
    <label for="entier2">Entier 2 :</label>
    <input type="text" name="entier2">
    <br>
    <input type="submit" value="Calculer PPCM">
</form>
<footer>
         <p>RETOUR A LA Page Generale<a href="exo0.html">DES EXERCICE</a>.</p>
     </footer>
</body>
</html>
