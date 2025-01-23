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



    //MANEJO DE ARRAYS
    $arrayNumbers = [1,2,3,4,5,6,7,8,9,10];

    //array_map 
    echo "<br/> array_map pares";
    function arrayMapPares ($value) {
        if($value % 2 == 0){
            return true;
        }
        return false;
    }
    print_r(array_map("arrayMapPares", $arrayNumbers));



    echo "<br/> array_map pares duplicados";
    function arrayMapParesDuplicados ($value) {
        if($value % 2 == 0){
            return $value * 2;
        }
        return $value;
    }
    print_r(array_map("arrayMapParesDuplicados", $arrayNumbers));


    echo "<br/> array_map pares suma";
    function arrayMapParesSuma ($value) {
        static $sumaPares = 0;
        if($value % 2 == 0){
            $sumaPares += $value;
            return $sumaPares;
        }
        // return $value;
    }
    print_r(array_map("arrayMapParesSuma", $arrayNumbers));

    
?>