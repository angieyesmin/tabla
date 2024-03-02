<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Área de Círculo y Volumen de Cilindro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F0F8FF;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #98FB98;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
     
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            text-align: center;
            margin-bottom: 20px;
        }
        input[type="number"] {
            padding: 8px;
            width: 100px;
            margin: 0 10px;
        }
        input[type="submit"] {
            padding: 8px 20px;
            background-color: #8A2BE2;
            border: none;
            color: #fff;
            cursor: pointer;
            border-radius: 4px;
        }
        p {
            text-align: center;
            margin: 10px 0;
            font-size: 18px;
            color: #000000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calculadora de Área de Círculo y Volumen de Cilindro</h1>
        <form method="post">
            <label for="radio_circulo">Radio del círculo:</label>
            <input type="number" name="radio_circulo" id="radio_circulo" step="any" required>
            <br>
            <label for="radio_cilindro">Radio del cilindro:</label>
            <input type="number" name="radio_cilindro" id="radio_cilindro" step="any" required>
            <br>
            <label for="altura_cilindro">Altura del cilindro:</label>
            <input type="number" name="altura_cilindro" id="altura_cilindro" step="any" required>
            <br><br>
            <input type="submit" name="calcular" value="Calcular">
        </form>
        <?php
        if (isset($_POST['calcular'])) {
            $radio_circulo = floatval($_POST['radio_circulo']);
            $radio_cilindro = floatval($_POST['radio_cilindro']);
            $altura_cilindro = floatval($_POST['altura_cilindro']);

            function calcularAreaCirculo($radio) {
                return pi() * pow($radio, 2);
            }

            function calcularVolumenCilindro($radio, $altura) {
                return calcularAreaCirculo($radio) * $altura;
            }

            $area_circulo = calcularAreaCirculo($radio_circulo);
            $volumen_cilindro = calcularVolumenCilindro($radio_cilindro, $altura_cilindro);

            echo "<p>El área del círculo es: $area_circulo unidades cuadradas</p>";
            echo "<p>El volumen del cilindro es: $volumen_cilindro unidades cúbicas</p>";
        }
        ?>
    </div>
</body>
</html>
