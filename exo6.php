<!DOCTYPE html>
<html>
<head>
    <title>Affichage des diviseurs</title>
</head>
<body>

<?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer le nombre saisi par l'utilisateur
        $nombre = $_POST["nombre"];

        // Vérifier si le nombre est un nombre valide
        if (is_numeric($nombre) && $nombre > 0) {
            // Afficher l'ensemble des diviseurs
            echo "<h2>Diviseurs de $nombre :</h2>";
            echo "<p>Les diviseurs de $nombre sont :";
            
            for ($i = 1; $i <= $nombre; $i++) {
                if ($nombre % $i == 0) {
                    echo " $i";
                }
            }
            
            echo "</p>";
        } else {
            echo "<p>Veuillez saisir un nombre valide (nombre positif).</p>";
        }
    }
?>

<h2>Affichage des diviseurs</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="nombre">Nombre :</label>
    <input type="text" name="nombre">
    <br>
    <input type="submit" value="Afficher Diviseurs">
</form>
<footer>
         <p>RETOUR A LA Page Generale<a href="exo0.html">DES EXERCICE</a>.</p>
     </footer>
</body>
</html>
