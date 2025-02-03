<?php



    require("datos.php");


    function sinergia($tipo1, $tipo2, $datos){
        //Variable a devolver es un array indicando las debilidades, resistencias e inmunidades.
       

       
        //Buscar el tipo en la tabla de $datos
        
        if($tipo2 == "-"){
            //Si es un monotipo solo se requiere de su fila de $datos
            
            return $datos[$tipo1];
        }else{
            //Mirar la columna en este caso para las x4 y x0.25

            // $contador = array_search($tipo,$datos);
            // echo ($contador);
            $contador = 0;
            foreach($datos[$tipo2] as $d){
                $datos[$tipo1][$contador] = $datos[$tipo1][$contador] * $d;
                $contador++;
            }
        }
        

        return $datos[$tipo1];
    }


    function tipos($resultado, &$inmunidades, &$muyResistente, &$resistencias, &$debilidades, &$muyDebil, $tipos){

        $contador = 0;
        foreach($resultado as $r){

            if($r != 1){
                if($r == 0){
                    $inmunidades[] = $tipos[$contador];
                }else if($r == 0.25){
                    $muyResistente[] = $tipos[$contador];
                }else if($r == 0.5){
                    $resistencias[] = $tipos[$contador];
                }else if($r == 2){
                    $debilidades[] = $tipos[$contador];
                }else if($r == 4){
                    $muyDebil[] = $tipos[$contador];
                }
                
            }

            $contador++;    
            
        }

        return null;
    }


    function imprimir($inmunidades, $muyResistente, $resistencias, $debilidades, $muyDebil){

      


        if(!empty($inmunidades)){

            echo  "Inmunidades(x0): <br>";
            foreach($inmunidades as $i){
                echo $i . "<br>";
            }
        
            echo "------<br>" ;
        }
        



        if(!empty($muyResistente)){
        
            echo " Muy resistente(x0.25) a : <br>";
            foreach($muyResistente as $mr){
                echo $mr . "<br>";
            }
        
            echo "------<br>" ;
        }
        
        if(!empty($resistencias)){
        
            echo " Resiste(x0.5) a : <br>";
            foreach($resistencias as $r){
                echo $r . "<br>";
            }
        
            echo "------<br>" ;
        }
        if(!empty($debilidades)){
        
            echo " Debil(x2) a : <br>";
            foreach($debilidades as $d){
                echo $d . "<br>";
            }
        
            echo "------<br>" ;
        }
        if(!empty($muyDebil)){
        
            echo " Muy debil(x4) a : <br>";
            foreach($muyDebil as $md){
                echo $md . "<br>";
            }
        
            echo "------<br>" ;
        }

        return null;
    }


?>