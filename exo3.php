<!DOCTYPE html>
<html>
<head>
    <title>Calcul du quotient et du reste de la division</title>
</head>
<body>
    <h1>Calcul du quotient et du reste de la division</h1>

    <form method="post">
        <label for="dividend">Entrez le dividende (A) :</label>
        <input type="number" id="dividend" name="dividend" required>
        <br>
        <label for="divisor">Entrez le diviseur (B) :</label>
        <input type="number" id="divisor" name="divisor" required>
        <br>
        <input type="submit" value="Calculer">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dividend = $_POST["dividend"];
        $divisor = $_POST["divisor"];

        $quotient = 0;
        $remainder = $dividend;

        while ($remainder >= $divisor) {
            $remainder -= $divisor;
            $quotient++;
        }

        echo "<h2>Résultat :</h2>";
        echo "Quotient : " . $quotient . "<br>";
        echo "Reste : " . $remainder;
    }
    ?>
</body>
</html>
