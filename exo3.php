<!DOCTYPE html>
<html>
<head>
  <title>Tirage aléatoire</title>
</head>
<body>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nombreSaisi = $_POST["nombre"];
      if (!ctype_digit($nombreSaisi) || strlen($nombreSaisi) != 3) {
          die("Veuillez saisir un nombre à trois chiffres valide.");
      }
      $nombreInitial = intval($nombreSaisi);
      $coupsFor = 0;
      for ($tirageFor = rand(100, 999); $tirageFor != $nombreInitial; $tirageFor = rand(100, 999)) {
          $coupsFor++;
      }
      $coupsWhile = 0;
      $tirageWhile = rand(100, 999);
      while ($tirageWhile != $nombreInitial) {
          $tirageWhile = rand(100, 999);
          $coupsWhile++;
      }
      echo "Nombre initial : $nombreInitial<br>";
      echo "Nombre de coups nécessaires (boucle for) : $coupsFor<br>";
      echo "Nombre de coups nécessaires (boucle while) : $coupsWhile";
  } else {
  ?>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="nombre">Entrez un nombre à trois chiffres :</label>
    <input type="text" name="nombre" maxlength="3" pattern="\d{3}" required />
    <br />
    <input type="submit" value="Effectuer le tirage" />
  </form>
  <?php
  }
  ?>
  <footer>
         <p>RETOUR A LA Page Generale<a href="exo0.html">DES EXERCICE</a>.</p>
     </footer>
</body>
</html>
