<!DOCTYPE html>
<html>
<head>
    <title>Testeur  de nombre parfait</title>
</head>
<body>

<?php
      function sommeDiviseursPropres($nombre) {
         $somme = 0;
        for ($i = 1; $i <= $nombre / 2; $i++) {
            if ($nombre % $i == 0) {
                $somme += $i;
            }
        }
        return $somme;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $nombre = $_POST["nombre"];

       
        if (is_numeric($nombre) && $nombre > 0) {
            
            $sommeDiviseurs = sommeDiviseursPropres($nombre);

            // Tester si le nombre est parfait
            if ($sommeDiviseurs == $nombre) {
                echo "<h2>Résultat :</h2>";
                echo "<p>Le nombre $nombre est parfait.</p>";
            } else {
                echo "<h2>Résultat :</h2>";
                echo "<p>Le nombre $nombre n'est pas parfait.</p>";
            }
        } else {
            echo "<p>Veuillez saisir un nombre valide (nombre positif).</p>";
        }
    }
?>

<h2>Test de nombre parfait</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="nombre">Nombre :</label>
    <input type="text" name="nombre">
    <br>
    <input type="submit" value="Tester Nombre Parfait">
</form>
<footer>
         <p>RETOUR A LA Page Generale<a href="exo0.html">DES EXERCICE</a>.</p>
     </footer>
</body>
</html>
