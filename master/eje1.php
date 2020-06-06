<?php
    $arreglo=[
        'keyStr1' => 'lado',
        0 => 'ledo',

        'keyStr2' => 'lido',
        1 => 'lodo',
        2 => 'ludo'
    ];
    
    $paises=[
        'Argentina' => ['Buenos Aires', 'Guadalajara', 'Queretaro'],
        'Brasil' => ['Brasilia', 'Sao Paulo', 'Rio de Janeiro'],
        'Colombia' => ['Bogota', 'Cartagena', 'Medellin'],
        'Mexico' => ['Monterrey', 'Guadalajara', 'Queretaro'],
        'Perú' => ['Arequipa', 'Cusco', 'Lima'],
    ];

    $valores = [23,54,32,67,34,78,98,56,21,34,57,92,12,5,61];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
</head>
<body>
    <div>
        <h1>Ejercicio 1</h1>
        <p> 
            <?php
                    foreach($arreglo as $key => $value){
                        echo $value . ", ";
                    };
                    echo '<br/> Decirlo al reves lo dudo. <br/>';
                    $arreglo = array_reverse($arreglo);
                    foreach($arreglo as $key => $value){
                        echo $value . ", ";
                    };
                    echo '<br/> Que trabajo me ha costado!. <br/>';
            ?>
        </p>
    </div>
    <div>
        <h1>Ejercicio 2</h1>
        <p> 
            <?php 
                foreach ($paises as $pais => $ciudades){
                    echo '<strong>' . $pais . ': </strong>';
                    $i = 0;
                    $j = count($ciudades);
                    for($i=0; $i < $j; $i++){
                        echo $ciudades[$i];
                        if ($i < ($j - 1)){
                            echo ', ';
                        }
                    };
                    echo "<br/>";
                };
            ?>
        </p>
    </div>
    <div>
        <h1>Ejercicio 3</h1>
        <p> 
            <?php  
                sort($valores);
                echo "3 numeros menores: $valores[0], $valores[1], $valores[2] <br/>";
                rsort($valores);
                echo "3 numeros mayores: $valores[0], $valores[1], $valores[2] <br/>";
            ?>
        </p>
    </div>
    
</body>
</html>