<!DOCTYPE html>
<html>
<head>
    <title>MULTIPLE DE 3 ET DE 5 </title>
</head>
<body>

<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $nbre = $_POST["nbre"];
        if (is_numeric($nbre) && $nbre > 0) {
            $estMultiple = ($nbre % 3 == 0) && ($nbre % 5 == 0);
            echo "<h2>Résultat :</h2>";
            if ($estMultiple) {
                echo "<p>Le nombre $nbre est à la fois un multiple de 3 et de 5.</p>";
            } else {
                echo "<p>Le nombre $nbre n'est pas un multiple de 3 et de 5.</p>";
            }
        } else {
            echo "<p>Veuillez saisir un nombre valide (nombre positif).</p>";
        }
    }
?>

<h2>TESTONS LE MULTIPLE DE *3*ET DE *5*</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="nbre">Nbre :</label>
    <input type="text" name="nbre">
    <br>
    <input type="submit" value="Tester Multiples">
</form>
<footer>
         <p>RETOUR A LA Page Generale<a href="exo0.html">DES EXERCICE</a>.</p>
     </footer>
</body>
</html>
