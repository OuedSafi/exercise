<!DOCTYPE html>
<html>
<head>
    <title>Recherche du minimum et du maximum</title>
</head>
<body>
    <h1>Recherche du minimum et du maximum</h1>

    <form method="post">
        <label for="numbers">Entrez les nombres (séparés par des virgules) :</label>
        <input type="text" id="numbers" name="numbers" required>
        <br>
        <input type="submit" value="Rechercher">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numbersStr = $_POST["numbers"];
        $numbersArr = explode(",", $numbersStr);
        
        $min = PHP_INT_MAX;
        $max = PHP_INT_MIN;

        foreach ($numbersArr as $number) {
            $number = trim($number);
            if (!empty($number) && is_numeric($number)) {
                $number = intval($number);
                if ($number < $min) {
                    $min = $number;
                }
                if ($number > $max) {
                    $max = $number;
                }
            }
        }

        echo "<h2>Résultat :</h2>";
        echo "Le minimum est : " . $min . "<br>";
        echo "Le maximum est : " . $max;
    }
    ?>
</body>
</html>
