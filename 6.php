<?php

    print("Dime el numero de preguntas que quieres elegir:");
    $num_preguntas = readline();
    $contador_tiempo = microtime();
    //$numeros1 = rand(1, 9);
    //$numeros2 = rand(1, 9); 
    $contador = 0;
    
        for ($i = 1; $i <= $num_preguntas; $i++) {
                $numeros1 = rand(1, 9);
                $numeros2 = rand(1, 9);
            print("Cual es el resultado de $numeros1 por $numeros2?");
                $eleccion = readline();
                
            if ($eleccion == $numeros1 * $numeros2) {
                print("Has acertado!\n");
                $contador++;
            }
            if ($eleccion != $numeros1 * $numeros2) {
                print("No has acertado,que lastima!\n");
            }
            
        }
        $tiempo = $contador_tiempo / 100000000;
        print("Has estado $tiempo segundos pensando.");
        $nota = $contador / $num_preguntas;
        $nota_final = $nota * 10;
        print("Tu nota sobre 10 es $nota_final");
?>