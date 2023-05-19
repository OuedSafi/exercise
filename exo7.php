<!DOCTYPE html>
<html>
<head>
    <title>Détermination des diviseurs</title>
</head>
<body>
    <h1>Détermination des diviseurs</h1>

    <form method="post">
        <label for="number">Entrez un nombre :</label>
        <input type="number" id="number" name="number" required>
        <br>
        <input type="submit" value="Calculer">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        function findDivisors($number) {
            $divisors = [];

            for ($i = 1; $i <= $number; $i++) {
                if ($number % $i === 0) {
                    $divisors[] = $i;
                }
            }

            return $divisors;
        }

        $divisors = findDivisors($number);

        echo "<h2>Résultat :</h2>";
        echo "Les diviseurs de $number sont : " . implode(", ", $divisors);
    }
    ?>
</body>
</html>
