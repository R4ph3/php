<?php
print("Dime un numero entero mayor");
$num1= readline();
print("Dime otro numero entero menor");
$num2= readline();

   if ($num1 < $num2) {
       print("El primer numero debe ser mayor!!"); 
       exit();
   }
   

while ($num1 >= $num2) {
     $resto = $num2 % 2;
     if ($resto == 0) { 
       print("El numero $num2 es par\n");
       
     }
       $num2 = $num2 + 1; 
}
    
       
       
?>
