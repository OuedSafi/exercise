<!DOCTYPE html>
<html>
<head>
    <title>Détermination de la divisibilité</title>
</head>
<body>
    <h1>Détermination de la divisibilité</h1>

    <form method="post">
        <label for="numerator">Entrez le numérateur (A) :</label>
        <input type="number" id="numerator" name="numerator" required>
        <br>
        <label for="denominator">Entrez le dénominateur (B) :</label>
        <input type="number" id="denominator" name="denominator" required>
        <br>
        <input type="submit" value="Vérifier">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numerator = $_POST["numerator"];
        $denominator = $_POST["denominator"];

        function isDivisible($numerator, $denominator) {
            if ($denominator === 0) {
                return false;
            }

            if ($numerator % $denominator === 0) {
                return true;
            } else {
                return false;
            }
        }

        $divisible = isDivisible($numerator, $denominator);

        echo "<h2>Résultat :</h2>";
        if ($divisible) {
            echo "$numerator est divisible par $denominator.";
        } else {
            echo "$numerator n'est pas divisible par $denominator.";
        }
    }
    ?>
</body>
</html>
