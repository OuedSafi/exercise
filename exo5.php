<!DOCTYPE html>
<html>
<head>
    <title>Calcul du binaire d'un entier</title>
</head>
<body>
    <h1>Calcul du binaire d'un entier</h1>

    <form method="post">
        <label for="number">Entrez un nombre :</label>
        <input type="number" id="number" name="number" required>
        <br>
        <input type="submit" value="Calculer">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        function decimalToBinary($number) {
            if ($number === 0) {
                return "0";
            }

            $binary = "";
            $dividend = abs($number);

            while ($dividend > 0) {
                $remainder = $dividend % 2;
                $binary = $remainder . $binary;
                $dividend = (int)($dividend / 2);
            }

            if ($number < 0) {
                $binary = "-" . $binary;
            }

            return $binary;
        }

        $binaryNumber = decimalToBinary($number);

        echo "<h2>Résultat :</h2>";
        echo "Le binaire de $number est : $binaryNumber";
    }
    ?>
</body>
</html>
