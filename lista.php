<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Números Primos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #6495ED;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #6495ED;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        
        h1 {
            color: #000000;
        }
        form {
            margin-top: 20px;
        }
        input[type="number"] {
            padding: 8px;
            width: 100px;
            
        }
        input[type="submit"] {
            padding: 8px 20px;
            background-color: #CD5C5C;
            border: none;
            color: #fff;
            cursor: pointer;
            border-radius: 4px;
        }
        p {
            margin: 20px 0;
            font-size: 18px;
            color: #333;
        }
        .primo {
            color: #CD5C5C;
        }
        .no-primo {
            color: #f44336;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Verificador de Números Primos</h1>
        <form method="post">
            <label for="numero">Ingrese un número:</label>
            <input type="number" name="numero" id="numero" required>
            <br><br>
            <input type="submit" value="Verificar">
        </form>

    <?php
    function esPrimo($numero) {
        if ($numero <= 1) {
            return false;
        }
        for ($i = 2; $i * $i <= $numero; $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }
        return true;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        if (esPrimo($numero)) {
            echo "<p>$numero es un número primo.</p>";
        } else {
            echo "<p>$numero no es un número primo.</p>";
        }
    }
    ?>
</body>
</html>


