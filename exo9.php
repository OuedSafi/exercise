<!DOCTYPE html>
<html>
<head>
    <title>Calcul de la somme des chiffres</title>
</head>
<body>
    <h1>Calcul de la somme des chiffres</h1>

    <form method="post">
        <label for="number">Entrez un nombre :</label>
        <input type="number" id="number" name="number" required>
        <br>
        <input type="submit" value="Calculer">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        function sumDigits($number) {
            $sum = 0;

            // Convertir le nombre en chaîne de caractères
            $numberStr = (string) abs($number);

            // Parcourir chaque chiffre de la chaîne et les additionner
            for ($i = 0; $i < strlen($numberStr); $i++) {
                $digit = intval($numberStr[$i]);
                $sum += $digit;
            }

            return $sum;
        }

        $digitSum = sumDigits($number);

        echo "<h2>Résultat :</h2>";
        echo "La somme des chiffres de $number est : $digitSum";
    }
    ?>
</body>
</html>
