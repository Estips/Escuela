<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="estilos.css">
  <title>Main page</title>
</head>
<body>
  <h1>Bienvenido a FutureNow!</h1>
  
  <h2>Comprar un Viaje</h2>
  <form action="ResumendeCompra.php" method="post">
    <label for="cliente">Cliente:</label>
    <input type="text" name="cliente" required><br>
    
    <label for="dni">DNI: </label>
    <input type="text" name="dni" required><br>

    <label for="fecha_inicio">Fecha de Inicio:</label>
    <input type="date" name="fecha_inicio" required><br>
    
    <label for="fecha_fin">Fecha de Finalización:</label>
    <input type="date" name="fecha_fin" required><br>
    
    <input type="submit" value="Comprar Viaje">
    <a href="proyectogrupoproto.html"></a>
  </form>
  <?php
    // Crea los datos en la base de datos de la tabla clientes y te pasa a la siguente pagina
  ?>
</body>
</html>
