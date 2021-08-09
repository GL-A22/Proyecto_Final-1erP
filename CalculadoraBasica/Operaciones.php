<?php

class Operaciones {
    
    public static function Operacion($operador, $Numero1,$Numero2){
        
        
        
        switch ($operador){
            case 0: 
                $suma=$Numero1+$Numero2; 
                echo "La respuesta de la suma es: " . $suma; 
                break;
            
            case 1: 
                $resta=$Numero1-$Numero2; 
                echo "La respuesta de la resta es: " . $resta; 
                break;
            
            case 2: 
                $multiplicacion=$Numero1*$Numero2; 
                echo "La respuesta de la multiplicacion es: " . $multiplicacion; 
                break;
            
            case 3: 
                $division=$Numero1/$Numero2; 
                echo "La respuesta de la division es: " . $division; 
                break;
            
        }
        
    } 
    
}
