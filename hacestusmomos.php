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
        // punto 1
        $array = "a-a-r-e-f-a";
        // punto 2
        split(":", $array, 5);
        // punto 3
        $array[0] = "tortuga";
        $array[1] = "tortuga";
        $array[5] = "tortuga";
        // punto 4
        $array[0] = "r";
        $array[1] = "f";
        $array[2] = "e";
        $array[3] = "a";
        $array[4] = "a";
        $array[5] = "a";
        // punto 5
        $array3 = array("", "", "", "", "", "");
        for ($valor=0;$valor<6; $valor++){
            if($array3[$valor] != 'a'){
                $array3[$valor] = $array[$valor];
            }else{
                echo ":v";
            }
        }
        $y = 0;
        // punto 6
        for ($x=0;$x<6; $x++){
            if($array3[$x] != 'a'){
                $y = $y + 1;
            }
        }
        echo $y;
        for ($x=0;$x<6; $x++){
            echo "<br>" . $array3[$x];
        }
    ?>
</body>
</html>