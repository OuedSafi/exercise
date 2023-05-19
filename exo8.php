<!DOCTYPE html>
<html>
<head>
    <title>Détermination de la primalité</title>
</head>
<body>
    <h1>Détermination de la primalité</h1>

    <form method="post">
        <label for="number">Entrez un nombre :</label>
        <input type="number" id="number" name="number" required>
        <br>
        <input type="submit" value="Vérifier">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        function isPrime($number) {
            if ($number <= 1) {
                return false;
            }

            for ($i = 2; $i <= sqrt($number); $i++) {
                if ($number % $i === 0) {
                    return false;
                }
            }

            return true;
        }

        $isPrime = isPrime($number);

        echo "<h2>Résultat :</h2>";
        if ($isPrime) {
            echo "$number est un nombre premier.";
        } else {
            echo "$number n'est pas un nombre premier.";
        }
    }
    ?>
</body>
</html>
