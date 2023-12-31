<!DOCTYPE html>
<html>
<head>
    <title>Calcul du sinus</title>
</head>
<body>

<?php
    function calculerSinus($angle, $unite = "radian") {
        switch ($unite) {
            case "radian":
                return sin($angle);
            case "degre":
                return sin(deg2rad($angle));
            case "grade":
                return sin($angle * M_PI / 200);
            default:
                return "Unité non reconnue";
        }
    }
    echo "<form method='post' action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "'>";
    echo "Saisissez un angle : <input type='text' name='angle'>";
    echo "<br>";
    echo "Choisissez l'unité de mesure : ";
    echo "<select name='unite'>";
    echo "<option value='radian'>Radian</option>";
    echo "<option value='degre'>Degré</option>";
    echo "<option value='grade'>Grade</option>";
    echo "</select>";
    echo "<br>";
    echo "<input type='submit' value='Calculer Sinus'>";
    echo "</form>";   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {        
        $angle = $_POST["angle"];
        $unite = $_POST["unite"];    
        if (is_numeric($angle)) {    
            $sinus = calculerSinus($angle, $unite);
            echo "<h2>Résultat :</h2>";
            echo "<p>Le sinus de $angle $unite est : $sinus</p>";
        } else {
            echo "<p>Veuillez saisir un nombre pour l'angle.</p>";
        }
    }
?>
<footer>
         <p>Retrouvez la liste complète des exercices dans la <a href="exo0.html">page générale</a>.</p>
     </footer>
</body>
</html>
