<?php



print("Dime un numero N para el programa");
$n = readline();
print("Dime un numero entero maximo");
$max= readline();
print("Dime un numero entero minimo");
$min= readline();
    
    $multiplos = array();
    $contar = $min;
    
    
    while ($contar < $max) {
         if ($n < $contar) {
        if (($contar % $n) == 0) {
            $multiple[] = $contar;
            $contar = $contar + 1;
        }
        else {
            $contar = $contar + 1;
        }
    }
    else {
        if (($n % $contar) == 0) {
            $multiplos[] = $contar;
            $contar = $contar + 1;
        }
        else {
            $contar = $contar + 1;
        }

    }
        
        
        
    }
            //esto es para escribir la respuesta
    $suma_array = array_sum($multiplos);

print("Los multiplos de $n son:");
print_r($multiplos);
print("\n.Suma de todos los múltimos:");
print_r($suma_array);


?>