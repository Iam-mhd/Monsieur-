<!DOCTYPE html>
<html>
<head>
    <title>Tableau de personnes</title>
    <h1>ICI NOUS DEMANDONS A L UTTILISATEUR DE LUI MEME RENTRER LES VALEURS DES TABLEAU ET ENSUITE  un tableau multidimensionnel associatif dont les clés sont des noms de
personne et les valeurs des tableaux indicés contenant le prénom, la ville de résidence et l’âge
de la personne.LUI SERA DONNEES </h1>
</head>
<body>

<?php
    
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
