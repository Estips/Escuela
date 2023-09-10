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
<?php
    ini_set('display_errors', 'Off');
    error_reporting(E_ALL & ~E_NOTICE);
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

// T = D/V
// Agregar numero de pasajeros en tu compra y el limite de pasajeros por viaje

?>

<div class="resumen">
    <p>Cliente: <?php echo $cliente; ?></p>
    <p>DNI: <?php echo $dni; ?></p>
    <p>Fecha de Inicio: <?php echo $fecha_inicio; ?></p>
    <p>Fecha de Finalización: <?php echo $fecha_fin; ?></p>
    <p>Duración del Viaje: <?php echo $duracion_viaje; ?> horas</p>
    <p>Distancia Recorrida: <?php echo $distancia_km; ?> km</p>
    <p>Costo del Viaje: <?php echo $costo_viaje; ?> ARS$</p>
  </div>

<footer><a href="proyectogrupoproto.html"><--Volver a la página principal</a></footer>
</body>
</html>

