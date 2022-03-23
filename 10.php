<?php
                
                $numeros = array();
                $contador = 0;
                while (true) {
                    print("Dime un numero:");
                    $eleccion = readline();
                    
                        if ($eleccion == "fin") {
                            
                            break;
                        }
                    else {
                            $contador += $eleccion;               
                            array_push($numeros, $eleccion);
                                 }
                    
                    }
                    
                    
                            //unset($numeros["fin"]);
                            
                            $minimo = min($numeros);
                            $maximo = max($numeros);
                            $total = $contador / count($numeros); 
                             echo "El minimo es $minimo.\n"; 
                             print("El maximo es $maximo.\n");
                            print("La media es $total.");
                            
                    
                    
                    
                
?>