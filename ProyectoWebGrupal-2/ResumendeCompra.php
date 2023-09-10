<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $litro_gasolina = 9383; // Valor en ARS$
    $litro_gasolina += ($litro_gasolina * 0.15); // Sumar un 15% de ganancia

    $cliente = $_POST['cliente'];
    $dni = $_POST['dni'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $fecha_fin = $_POST['fecha_fin'];

    $inicio_timestamp = strtotime($fecha_inicio);
    $fin_timestamp = strtotime($fecha_fin);

    $duracion_viaje = round(($fin_timestamp - $inicio_timestamp) / 3600);

    $distancia_km = round($duracion_viaje / 12);

    $costo_viaje = $distancia_km * $litro_gasolina;

    // Verificar si el cliente ya existe
    $sqlVerificarCliente = "SELECT * FROM cliente WHERE DNI = '$dni'";
    $resultVerificarCliente = $conn->query($sqlVerificarCliente);

    if ($resultVerificarCliente->num_rows > 0) {
        echo "Error: El cliente con DNI $dni ya existe.";
        exit;
    }

    // Insertar el cliente solo si no existe
    $sqlCliente = "INSERT INTO cliente (Nombre, DNI) VALUES ('$cliente', '$dni')";
    $resultCliente = $conn->query($sqlCliente);

    $sqlViajes = "INSERT INTO viajes (DNI, fecha_salida, fecha_entrada) VALUES ('$dni', '$fecha_inicio', '$fecha_fin')";
    $resultViajes = $conn->query($sqlViajes);

    $travelTime = $duracion_viaje;
    $timeMeasure = "horas";
    $relTime = $travelTime / sqrt(1 - (pow(299792.446, 2) / pow(299792.458, 2)));
    $relTimeMeasure = "horas";
    $normalTime = $relTime * sqrt(1 - pow(299792.446, 2) / pow(299792.458, 2));
    $normalTimeMeasure = "horas";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos2.css">
    <title>Resumen de compra</title>
</head>
<body>
    <header><h1>Resumen de la Compra</h1></header>

    <div class="resumen">
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
            <p>Cliente: <?php echo $cliente; ?></p>
            <p>DNI: <?php echo $dni; ?></p>
            <p>Fecha de Inicio: <?php echo $fecha_inicio; ?></p>
            <p>Fecha de Finalización: <?php echo $fecha_fin; ?></p>
            <p>Duración del Viaje: <?php echo $duracion_viaje; ?> horas</p>
            <p>Distancia Recorrida: <?php echo $distancia_km; ?> km</p>
            <p>Costo del Viaje: <?php echo $costo_viaje; ?> ARS$</p>
            <p>Tiempo Relativo: <?php echo $relTime . " " . $relTimeMeasure; ?></p>
            <p>Tiempo Normal: <?php echo $normalTime . " " . $timeMeasure; ?></p>
        <?php endif; ?>
    </div>

    <footer><a href="proyectogrupoproto.html"><--Volver a la página principal</a></footer>
</body>
</html>

