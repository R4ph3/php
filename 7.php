<?php

    print("Vamos a jugar a piedra,papel,tijera!");
    $entrada = array("piedra", "papel", "tijera");
      $contador_humano = 0;
      $contador_ordenador = 0;
      $valor = 0;
      $valor1 = 0;
    
    
            do {
        
        
        print("Elige piedra papel o tijera:");
        $eleccion_humano = readline();
        if ($eleccion_humano == "piedra")
            $valor1 = 1;
        if ($eleccion_humano == "papel")
            $valor1 = 2;
        
        if ($eleccion_humano == "tijera")
            $valor1 = 3;
        $eleccion_ordenador = $entrada[array_rand($entrada)];
        print("El ordenador ha sacado $eleccion_ordenador");
        if ($eleccion_ordenador == "piedra")
            $valor = 1;
        if ($eleccion_ordenador == "papel")
            $valor = 2;
        
        if ($eleccion_ordenador == "tijera")
            $valor = 3;
        if (($valor==1&&$valor1==3)||($valor==2&&$valor1==1)||($valor==3&&$valor1==2)) {
            print(".Gana el ordenador");
            $contador_ordenador++;
        }
        if (($valor1==1&&$valor==3)||($valor1==2&&$valor==1)||($valor1==3&&$valor==2)) {
            print(".Ganas tu");
                 $contador_humano++;
                 
        }
         if ($valor = $valor1) {
                print(".Es empate.");
        }
        }
        while ($contador_humano < 3 || $contador_ordenador < 3);
 
    ?>

