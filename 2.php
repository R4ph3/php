<?php

    print("Dime la contraseña:");
    $pass = readline();
    print("Dimela otra vez:");
    $pass2 = readline();        
    
    
    
    for ($contador = 1; $contador <= 5; $contador++ ) {
        if ($pass2 != $pass) {
     print("No has acertado,dimela otra vez,llevas $contador intentos y solo hay 5.Dimela otra vez:");
        $pass2= readline();
        }
        elseif ($contador > 5) {
        break;
        
     }
    }
    if ($pass == $pass2)
            print("Contraseña cambiada con exito");
     
    
    
    
    
    
    
    
        
        
    
    
   
    

?>

