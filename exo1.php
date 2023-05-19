<!DOCTYPE html>
<html>
<head>
    <title>Calcul de la somme des N premiers nombres entiers</title>
</head>
<body>
    <h1>Calcul de la somme des N premiers nombres entiers</h1>

    <form method="post">
        <label for="number">Entrez un nombre N :</label>
        <input type="number" id="number" name="number" required>
        <br>
        <input type="submit" value="Calculer">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $N = $_POST["number"];
        $sum = ($N * ($N + 1)) / 2;

        echo "<h2>Résultat :</h2>";
        echo "La somme des $N premiers nombres entiers est : $sum";
    }
    ?>
</body>
</html>
