<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Carreras</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #FAEBD7;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #FFE4C4;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
         .container {
            max-width: 600px;
            margin: 0 auto;
            background-color:  #FFE4C4;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #000000;
        }
       
        .carrera {
            margin-bottom: 10px;
            color:#000000;
            
        }
        
        
    </style>
</head>
<body>
    <div class="container">
        <h1>Consulta de Carreras</h1>
        <?php
        $carreras = ["medicina", "desarrollo", "psicología", "telecomunicaciones", "administración"];

        foreach ($carreras as $carrera) {
            obtenerEdificio($carrera);
        }

        function obtenerEdificio($carrera) {
            switch ($carrera) {
                case "medicina":
                    echo "<div class='carrera'>Carrera: $carrera - Edificio A</div>";
                    break;
                case "desarrollo":
                case "telecomunicaciones":
                    echo "<div class='carrera'>Carrera: $carrera - Edificio B</div>";
                    break;
                case "psicología":
                    echo "<div class='carrera'>Carrera: $carrera - Edificio C</div>";
                    break;
                case "administración":
                    echo "<div class='carrera'>Carrera: $carrera - Edificio A</div>";
                    break;
                default:
                    echo "<div class='carrera'>Carrera: $carrera - Ir a dirección para obtener información.</div>";
            }
        }
        ?>
    </div>
</body>
</html>
