<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $i;
        $numero = array();
        $cuadrado = array();
        $cubo = array();
        $max = 0;
        $min = 100;
        $rotar = array(); $invertir = array();
        $almacenador = 0;
        for($i=0; $i<20; $i++){
            $n = rand(0, 100);
            $numero[$i] = $n;
            $cuadrado[$i] = pow($n,2);
            $cubo[$i] = pow($n,3);
            echo $numero[$i]."    ",$cuadrado[$i]."     ",$cubo[$i]."<br>";
            if($numero[$i]>=$max){
                $max = $numero[$i];
            }
            if($numero[$i]<=$min){
                $min = $numero[$i];
            }
            $rotar[$i] = $n;
        }
        $almacenador = $rotar[0];
        echo "max: ". $max . "   " . "min: ". $min;  
        echo "<br>";
        for($i=1; $i<20; $i++){
            if($i == 20){ $almacenador = $rotar[$i]; continue;}
            $invertir[$i] = $rotar[$i-1];
            echo $rotar[$i] . " | ";
        }
        $invertir[0] = $almacenador;
        echo "<br>";
        for($i=1; $i<20; $i++){
            echo $invertir[$i] . " | ";
        }
    ?>
</body>
</html>