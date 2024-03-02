<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color:  #87CEEB;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color:  #FFE4C4;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .table-container {
            background-color: #B0E0E6;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #00008B;
        }

        table {
            margin: 0 auto;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border: 1px solid #000000;
            text-align: center;
        }

        th {
            background-color: #B0E0E6;
        }
    </style>
</head>
<body>

<div class="table-container">
    <?php
    echo "<h1>Multiplication Table</h1>";

    $numero = 1;
    $tablainicial = 1;
    $tablafinal = 10;

    echo "<table>";
    echo "<tr><th>Number</th>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<th>$i</th>";
    }
    echo "</tr>";

    for ($tabla = $tablainicial; $tabla <= $tablafinal; $tabla++) {
        echo "<tr><td>$tabla</td>";
        for ($i = 1; $i <= 10; $i++) {
            $total = $tabla * $i;
            echo "<td>$total</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
    ?>
</div>

</body>
</html>
