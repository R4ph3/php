<?php

    print("Dime un numero entero maximo");
    $max = readline();
    print("Dime un numero entero minimo");
    $min = readline();
        if ($max < $min) {
            print("Tienes que elegir bien!");
            exit();
        }
    
    
    $random = rand($min, $max);    
    do {
        print("Dime un numero");
        $eleccion = readline();
        if ($eleccion < $random) {
            print("El numero que has dicho es menor que el que tienes que adivinar.");
        }
        if ($eleccion > $random) {
            print("El numero que has elegido es mayor que el que tienes que adivinar.");
        }
        
    }        
        
        while ($random != $eleccion);
 print("Enhorabuena has acertado el numero,era el $random!");




?>