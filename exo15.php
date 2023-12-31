<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformation des lettres</title>
</head>
<body>

<?php
function transformeMajusculeMinuscule(&$tableau) {
    foreach ($tableau as &$mot) {
        $mot = ucfirst(strtolower($mot));
    }
    unset($mot);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputText = isset($_POST["inputText"]) ? $_POST["inputText"] : "";
    $mots = explode(" ", $inputText);


    transformeMajusculeMinuscule($mots);

    
    $resultat = implode(" ", $mots);
    echo "Résultat : $resultat";
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="inputText">Entrez une phrase :</label>
    <input type="text" name="inputText" id="inputText" required>
    <button type="submit">Transformer</button>
</form>
<footer>
         <p>Retrouvez la liste complète des exercices dans la <a href="exo0.html">page générale</a>.</p>
     </footer>
</body>
</html>
