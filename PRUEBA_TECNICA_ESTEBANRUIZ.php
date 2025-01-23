<?php 
    // Funcion que devuelve el valor del servicio de alojamiento
    function buscar($tipo){
        $varlorAlojamiento = [
            "habitacion" => 120000,
            "normal" => 50000,
            "suite" => 250000 
        ];

        foreach ($varlorAlojamiento as $index => $value) {
            if($tipo == $index){
                return "El alojamiento seleccionado es: " . $tipo ." y su valor es: $" . $value;
            }
        }
        return "La tipo " . $tipo . " no coincide con ninguno de los alojamientos";
    }
?>