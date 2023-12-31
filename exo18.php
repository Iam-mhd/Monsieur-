<!DOCTYPE html>
<html>
<head>
    <title>Affichage du motif</title>
</head>
<body>

<?php
    // Demander à l'utilisateur de saisir un nombre
    echo "<form method='post' action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "'>";
    echo "Saisissez un nombre : <input type='text' name='nombre'>";
    echo "<input type='submit' value='Afficher Motif'>";
    echo "</form>";

    // Traitement du formulaire
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer le nombre saisi par l'utilisateur
        $nombre = $_POST["nombre"];

        // Vérifier si le nombre est un nombre valide
        if (is_numeric($nombre) && $nombre > 0) {
            // Afficher le motif en fonction du nombre saisi
            for ($i = 1; $i <= $nombre; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo $i;
                }
                echo "<br>";
            }
        } else {
            // Afficher un message d'erreur si le nombre n'est pas valide
            echo "<p>Veuillez saisir un nombre entier positif.</p>";
        }
    }
?>

</body>
</html>

<?php
echo '<footer>';
echo '<p>Retour à la <a href="exo0.html">page générale</a>.</p>';
echo '</footer>';
?>
<footer>
         <p>Retrouvez la liste complète des exercices dans la <a href="exo0.html">page générale</a>.</p>
     </footer>