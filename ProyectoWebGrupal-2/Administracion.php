<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future Now</title>
    <link rel="stylesheet" href="estilos-3.css">
</head>
<body>
    <header>
        <h2 class="logo"><ion-icon name="planet-outline"></ion-icon> FutureNow <ion-icon name="sparkles-outline"></ion-icon></h2>
        <nav>
            <a href="proyectogrupoproto.php">Viajes</a>

            <button class="BotonLogin" id="login">Administracion</button>
        </nav>
    </header>

    <div class="wrapper-2" id="wrapper">
        <div class="form-box login">
            <h2>Viajes - Administracion</h2>
            <ul class="ListaOrdenada">
                
                <?php 
                include("conexion.php");

                $consulta = "SELECT v.*, c.* FROM viajes v INNER JOIN cliente c ON v.DNI = c.DNI";
                $resultados = mysqli_query($conn, $consulta);

                while ($fila = mysqli_fetch_assoc($resultados)) {
                    echo '<li>Cliente: ' . $fila['Nombre'] . '</li>';
                    echo '<li>DNI: ' . $fila['DNI'] . '</li>';
                    echo '<li>Fecha salida: ' . $fila['fecha_salida'] . '</li>';
                    echo '<li>Fecha entrada: ' . $fila['fecha_entrada'] . '</li>';
                    echo '<br>';
                }
                ?>

            </ul>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
