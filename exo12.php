<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        form {
            display: flex;
            flex-wrap: wrap;
        }

        form label, form input {
            margin-bottom: 10px;
            flex: 1;
            box-sizing: border-box;
        }

        form fieldset {
            width: 100%;
        }
    </style>
    <title>Formulaire D'Adresse Client</title>
</head>
<body>

    <?php
    $nom = $prenom = $adresse = $ville = $codePostal = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $adresse = $_POST["adresse"];
        $ville = $_POST["ville"];
        $codePostal = $_POST["code_postal"];
    }
    ?>

    <h2>Formulaire Adresse Client</h2>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <fieldset>
            <legend>Adresse client</legend>

            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" value="<?php echo $nom; ?>" required>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" value="<?php echo $prenom; ?>" required>

            <label for="adresse">Adresse :</label>
            <input type="text" id="adresse" name="adresse" value="<?php echo $adresse; ?>" required>

            <label for="ville">Ville :</label>
            <input type="text" id="ville" name="ville" value="<?php echo $ville; ?>" required>

            <label for="code_postal">Code postal :</label>
            <input type="text" id="code_postal" name="code_postal" value="<?php echo $codePostal; ?>" required>

        </fieldset>

        <input type="submit" value="Soumettre">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h2>Données du Client</h2>";
        echo "<table border='1'>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>Code Postal</th>
                </tr>
                <tr>
                    <td>$nom</td>
                    <td>$prenom</td>
                    <td>$adresse</td>
                    <td>$ville</td>
                    <td>$codePostal</td>
                </tr>
              </table>";
    }
    ?>
<footer>
         <p>Retrouvez la liste complète des exercices dans la <a href="exo0.html">page générale</a>.</p>
     </footer>
</body>
</html>
