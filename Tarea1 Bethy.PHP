<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Carros</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        img {
            width: 80px;
            height: auto;
        }
    </style>
</head>
<body>

    <h2>Lista de Carros</h2>

 <?php
$relojes = [
    [
        "marca" => "Casio",
        "modelo" => "F91W",
        "tipo" => "Digital",
        "imagen" => "imagenes/casio_f91w.jpg"
    ],
    [
        "marca" => "Rolex",
        "modelo" => "Submariner",
        "tipo" => "Análogo",
        "imagen" => "imagenes/rolex_submariner.jpg"
    ]
    
];

// Renderizar arreglo
foreach ($relojes as $reloj) {
    echo "<h3>" . $reloj["marca"] . " - " . $reloj["modelo"] . "</h3>";
    echo "<p>Tipo: " . $reloj["tipo"] . "</p>";
    echo "<img src='" . $reloj["imagen"] . "' alt='" . $reloj["modelo"] . "' width='180'><hr>";
}
?>
</body>
</html>