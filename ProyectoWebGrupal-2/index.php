<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("conexion.php");

    if (isset($_POST['Login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Consulta SQL para verificar las credenciales del usuario
        $sql = "SELECT * FROM staff WHERE Email = '$email' AND Contraseña = '$password'";
        $result = $conn->query($sql);

        // Comprobar si se encontró un usuario con las credenciales proporcionadas
        if ($result->num_rows == 1) {
            // Iniciar sesión y redirigir al usuario a la página de inicio
            $_SESSION['email'] = $email;
            header("Location: Administracion.php");
            exit();
        } else {
            // Mostrar un mensaje de error si las credenciales son inválidas
            echo "Credenciales inválidas. Inténtalo de nuevo.";
        }
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
}
?>

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
            <a href="#" id="ComoFuncionaBtn">¿Como funciona?</a>
            <button class="BotonLogin" id="login">Login</button>
        </nav>
    </header>

    <div class="wrapper" id="wrapper">
        <div class="form-box login">
            <h2>Login</h2>
            <form method="POST" action="#">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input type="email" id="email" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="bag-outline"></ion-icon></span>
                    <input type="password" id="con" name="password" required>
                    <label>Password</label>
                </div>
                <button type="submit" class="btn" name="Login">Logearse</button>
            </form>
        </div>
    </div>

    <div class="ComoFunciona" id="ComoFunciona">
        <p>
            <br>Principalmente la manera para utilizar nuestro servicio, se deben insertar tanto los datos del usuario, fecha de salida y fecha de llegada. Una vez realizados estos, se realizan  3 calculos, la distancia recorrida, la duración (que se calcula con la fórmula
        </p>
    </div>    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="Login.js"></script>
</body>
</html>

