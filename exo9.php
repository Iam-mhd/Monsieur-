<!DOCTYPE html>
<html>
<head>
    <title>Tableau de personnes</title>
</head>
<h1>IICI NOUS LAISSONS LE CHOIX A L UTTILISATEUR D AJOUTER UNE AUTRE CLES A CEUX DEJA ETABLIS </h1>
<body>

<?php
    $personnes = array(
        "hassimiou" => array(
            "prenom" => "mohamed",
            "ville" => "saint louis",
            "age" => 43
        ),
        "gando diallo" => array(
            "prenom" => "gando",
            "ville" => "conakry",
            "age" => 65
        ),
    );

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $ville = $_POST["ville"];
        $age = $_POST["age"];

       
        if (!empty($nom) && !empty($prenom) && !empty($ville) && is_numeric($age) && $age > 0) {
            $personnes[$nom] = array(
                "prenom" => $prenom,
                "ville" => $ville,
                "age" => $age
            );
            echo "<h2>Tableau de personnes :</h2>";
            echo "<pre>";
            print_r($personnes);
            echo "</pre>";
        } else {
            echo "<p>Veuillez saisir des données valides pour tous les champs.</p>";
        }
    }
?>

<h2>Ajouter une personne au tableau</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="nom">Nom :</label>
    <input type="text" name="nom">
    <br>
    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom">
    <br>
    <label for="ville">Ville :</label>
    <input type="text" name="ville">
    <br>
    <label for="age">Âge :</label>
    <input type="text" name="age">
    <br>
    <input type="submit" value="Ajouter Personne">
</form>
<footer>
         <p>RETOUR A LA Page Generale<a href="exo0.html">DES EXERCICE</a>.</p>
     </footer>
</body>
</html>
