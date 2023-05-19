<!DOCTYPE html>
<html>
<head>
    <title>Calcul du produit de deux entiers</title>
</head>
<body>
    <h1>Calcul du produit de deux entiers</h1>

    <form method="post">
        <label for="num1">Entrez le premier nombre :</label>
        <input type="number" id="num1" name="num1" required>
        <br>
        <label for="num2">Entrez le deuxième nombre :</label>
        <input type="number" id="num2" name="num2" required>
        <br>
        <input type="submit" value="Calculer">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        $product = 0;

        if ($num1 < 0 && $num2 < 0) {
            $num1 = abs($num1);
            $num2 = abs($num2);
        } elseif ($num2 < 0) {
            $num2 = abs($num2);
            $num1 = -$num1;
        }

        for ($i = 0; $i < $num2; $i++) {
            $product += $num1;
        }

        echo "<h2>Résultat :</h2>";
        echo "Le produit de $num1 et $num2 est : $product";
    }
    ?>
</body>
</html>
