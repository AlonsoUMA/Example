<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form method="post">
        <label for="number1">Número 1:</label>
        <input type="number" id="number1" name="number1" required />

        <label for="number2">Número 2:</label>
        <input type="number" id="number2" name="number2" required />
        
         <label for="number3">Número 3:</label>
        <input type="number" id="number3" name="number3" required />

        <button type="submit">Sumar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $number3 = $_POST['number3'];
        $result = $number1 + $number2 + $number3;

        echo "<h2>Resultado: $result</h2>";
    }
    ?>
</body>
</html>
