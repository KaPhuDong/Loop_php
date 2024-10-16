<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .demo{
            background-color: orange;
        }
        .square{
            width: 50px;
            height: 50px;
            background-color: #ffdf2c;
            margin: 5px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <?php
        echo "Hello Dong" . "<br>";
    ?>
    <?php
    // echo "<i class='demo'>Hi everyone. Welcome to my chanel.</i>";
    // for ($i = 0; $i < 10; $i++){
    //     for ($j = 0; $j < 5; $j++){
    //         echo "<div class='square'></div>";
    //     }
    //     echo "<br/>";
    // }
    //
    // $sumChan = 0; $sumLe = 0;
    // for ($i = 0; $i < 5; $i++){
    //     if ($i % 2 == 0){
    //         $sumChan = $sumChan + $i;
    //     } else{
    //         $sumLe = $sumLe + $i;
    //     }
    // }
    // echo "$sumChan <br/>";
    // echo "$sumLe <br/>";
    //
    // $i = 0;
    // while ($i < 10){
    //     echo $i + 1 . "<br>";
    //     $i++;
    // }
    //
    $sumLe = 0; $sumChan = 0; $i = 0;
    while ($i<5) {
        if ($i % 2 == 0){
            $sumChan = $sumChan + $i;
        } else{
            $sumLe = $sumLe + $i;
        }
        $i++;
    }
    echo "Tổng các sô chẵn là: $sumChan <br>";
    echo "Tổng các sô chẵn là: $sumLe <br>";
    ?>
</body>
</html>