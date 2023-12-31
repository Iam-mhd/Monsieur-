<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence Immobilière</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        form {
            display: inline-block;
            margin-top: 20px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            margin-right: 10px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .content {
            margin-top: 40px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["option"])) {
            $option = $_POST["option"];

            
            switch ($option) {
                case "Vendre":
                    echo "<div class='content'>";
                    echo "<h2>Voulez vous vendre  un bien immobilier ?</h2>";
                    echo "</div>";
                    break;
                case "Acheter":
                    echo "<div class='content'>";
                    echo "<h2>Voullez Vous Acheter Un Bien Immobilier</h2>";       
                    echo "</div>";
                    break;
                case "Louer":
                    echo "<div class='content'>";
                    echo "<h2>Voulez Vous Louer un bien immobilier</h2>";        
                    echo "</div>";
                    break;
                default:                
                    echo "<div class='content'>";
                    echo "<h2>Option non reconnue</h2>";
                    echo "</div>";
                    break;
            }
        }
    }
    ?>

    <h2>Choisissez une option :</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="submit" name="option" value="Vendre">
        <input type="submit" name="option" value="Acheter">
        <input type="submit" name="option" value="Louer">
    </form>
    <footer>
         <p>Retrouvez la liste complète des exercices dans la <a href="exo0.html">page générale</a>.</p>
     </footer>
</body>
</html>
