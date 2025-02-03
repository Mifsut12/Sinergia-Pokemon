<!-- Fichero dedicado a obtener informacion de index php para calcular las sinergias de los integrantes -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href = "./estilos/estilos-sinergias.css">
</head>
<body>
        <?php


        
        echo "<span id = 'analisisIndividual'>";
        //Obtener el fichero para obtener la tabla de tipos
        require("datos.php");
        require("funciones.php");

       
        $integranteT1 = $_POST["integrante-1-tipo-1"];
        $integranteT2 = $_POST["integrante-1-tipo-2"];



        //Control de errores, tipo 1 y tipo 2 coinciden(No es posible)

        if($integranteT1 == $integranteT2){
            $integranteT2 = "-";
        }

        
        //Cálculo de sinergias del primer integrante.
        echo "<span class = 'analisisIndividualIntegrante1'>";
        if($integranteT2 != "-"){
            echo "<h3> Integrante 1 con tipo " . $integranteT1 . " y " . $integranteT2 . "</h3> <br>";
        }else{
            echo "<h3> Integrante 1 con tipo " . $integranteT1 . "</h3> <br>";
        }

        $resultado = sinergia($integranteT1,$integranteT2,$compatibilidadTipos);


        //Array que continen los valores a nivel global

        $inmunidadesTotal = array();
        $muyResistenteTotal = array();
        $resistenciasTotal = array();
        $debilidadesTotal = array();
        $muyDebilTotal = array();

        //Array que contienen lo que su propio nombre indica

        $inmunidades = array();
        $muyResistente = array();
        $resistencias = array();
        $debilidades = array();
        $muyDebil = array();




        tipos(sinergia($integranteT1,$integranteT2,$compatibilidadTipos), $inmunidades, $muyResistente, $resistencias, $debilidades, $muyDebil, $tipos);


        $inmunidadesTotal = $inmunidades ;
        $muyResistenteTotal = $muyResistente;
        $resistenciasTotal = $resistencias;
        $debilidadesTotal = $debilidades;
        $muyDebilTotal = $muyDebil;


        imprimir($inmunidades, $muyResistente, $resistencias, $debilidades, $muyDebil);


        echo "</span>";

        // -----2do integrante.

        $integranteT1 = $_POST["integrante-2-tipo-1"];
        $integranteT2 = $_POST["integrante-2-tipo-2"];

        if($integranteT1 == $integranteT2){
            $integranteT2 = "-";
        }


        //Cálculo de sinergias.

        echo "<span class = 'analisisIndividualIntegrante2'>";
        if($integranteT2 != "-"){
            echo "<h3> Integrante 2 con tipo " . $integranteT1 . " y " . $integranteT2 . "</h3> <br>";
        }else{
            echo "<h3> Integrante 2 con tipo " . $integranteT1 . "</h3> <br>";
        }
        sinergia($integranteT1,$integranteT2,$compatibilidadTipos);



        //Array que contienen lo que su propio nombre indica

        $inmunidades = array();
        $muyResistente = array();
        $resistencias = array();
        $debilidades = array();
        $muyDebil = array();




        tipos(sinergia($integranteT1,$integranteT2,$compatibilidadTipos), $inmunidades, $muyResistente, $resistencias, $debilidades, $muyDebil, $tipos);

        $inmunidadesTotal = array_merge($inmunidadesTotal,$inmunidades);
        $muyResistenteTotal = array_merge($muyResistenteTotal,$muyResistente);
        $resistenciasTotal = array_merge($resistenciasTotal, $resistencias);
        $debilidadesTotal = array_merge($debilidadesTotal,$debilidades);
        $muyDebilTotal = array_merge($muyDebilTotal,$muyDebil);

        imprimir($inmunidades, $muyResistente, $resistencias, $debilidades, $muyDebil);
        echo "</span>";


        //-----3er integrante.

        $integranteT1 = $_POST["integrante-3-tipo-1"];
        $integranteT2 = $_POST["integrante-3-tipo-2"];

        if($integranteT1 == $integranteT2){
            $integranteT2 = "-";
        }

        echo "<span class = 'analisisIndividualIntegrante3'>";

        if($integranteT2 != "-"){
            echo "<h3> Integrante 3 con tipo " . $integranteT1 . " y " . $integranteT2 . "</h3> <br>";
        }else{
            echo "<h3> Integrante 3 con tipo " . $integranteT1 . "</h3> <br>";
        }
        //Cálculo de sinergias.

        sinergia($integranteT1,$integranteT2,$compatibilidadTipos);



        //Array que contienen lo que su propio nombre indica

        $inmunidades = array();
        $muyResistente = array();
        $resistencias = array();
        $debilidades = array();
        $muyDebil = array();




        tipos(sinergia($integranteT1,$integranteT2,$compatibilidadTipos), $inmunidades, $muyResistente, $resistencias, $debilidades, $muyDebil, $tipos);

        $inmunidadesTotal = array_merge($inmunidadesTotal,$inmunidades);
        $muyResistenteTotal = array_merge($muyResistenteTotal,$muyResistente);
        $resistenciasTotal = array_merge($resistenciasTotal, $resistencias);
        $debilidadesTotal = array_merge($debilidadesTotal,$debilidades);
        $muyDebilTotal = array_merge($muyDebilTotal,$muyDebil);

        imprimir($inmunidades, $muyResistente, $resistencias, $debilidades, $muyDebil);
        echo "</span>";

        //-----4to integrante.

        $integranteT1 = $_POST["integrante-4-tipo-1"];
        $integranteT2 = $_POST["integrante-4-tipo-2"];

        if($integranteT1 == $integranteT2){
            $integranteT2 = "-";
        }
        echo "<span class = 'analisisIndividualIntegrante4'>";


        

        if($integranteT2 != "-"){
            echo "<h3> Integrante 4 con tipo " . $integranteT1 . " y " . $integranteT2 . "</h3> <br>";
        }else{
            echo "<h3> Integrante 4 con tipo " . $integranteT1 . "</h3> <br>";
        }
        //Cálculo de sinergias.

        sinergia($integranteT1,$integranteT2,$compatibilidadTipos);



        //Array que contienen lo que su propio nombre indica

        $inmunidades = array();
        $muyResistente = array();
        $resistencias = array();
        $debilidades = array();
        $muyDebil = array();




        tipos(sinergia($integranteT1,$integranteT2,$compatibilidadTipos), $inmunidades, $muyResistente, $resistencias, $debilidades, $muyDebil, $tipos);

        $inmunidadesTotal = array_merge($inmunidadesTotal,$inmunidades);
        $muyResistenteTotal = array_merge($muyResistenteTotal,$muyResistente);
        $resistenciasTotal = array_merge($resistenciasTotal, $resistencias);
        $debilidadesTotal = array_merge($debilidadesTotal,$debilidades);
        $muyDebilTotal = array_merge($muyDebilTotal,$muyDebil);

        imprimir($inmunidades, $muyResistente, $resistencias, $debilidades, $muyDebil);
        echo "</span>";


        //-----5to integrante.

        $integranteT1 = $_POST["integrante-5-tipo-1"];
        $integranteT2 = $_POST["integrante-5-tipo-2"];

        if($integranteT1 == $integranteT2){
            $integranteT2 = "-";
        }
        echo "<span class = 'analisisIndividualIntegrante5'>";

        if($integranteT2 != "-"){
            echo "<h3> Integrante 5 con tipo " . $integranteT1 . " y " . $integranteT2 . "</h3> <br>";
        }else{
            echo "<h3> Integrante 5 con tipo " . $integranteT1 . "</h3> <br>";
        }
        //Cálculo de sinergias.

        sinergia($integranteT1,$integranteT2,$compatibilidadTipos);



        //Array que contienen lo que su propio nombre indica

        $inmunidades = array();
        $muyResistente = array();
        $resistencias = array();
        $debilidades = array();
        $muyDebil = array();




        tipos(sinergia($integranteT1,$integranteT2,$compatibilidadTipos), $inmunidades, $muyResistente, $resistencias, $debilidades, $muyDebil, $tipos);

        $inmunidadesTotal = array_merge($inmunidadesTotal,$inmunidades);
        $muyResistenteTotal = array_merge($muyResistenteTotal,$muyResistente);
        $resistenciasTotal = array_merge($resistenciasTotal, $resistencias);
        $debilidadesTotal = array_merge($debilidadesTotal,$debilidades);
        $muyDebilTotal = array_merge($muyDebilTotal,$muyDebil);

        imprimir($inmunidades, $muyResistente, $resistencias, $debilidades, $muyDebil);

        echo "</span>";

        //-----6to integrante.

        echo "<span class = 'analisisIndividualIntegrante6'>";


        $integranteT1 = $_POST["integrante-6-tipo-1"];
        $integranteT2 = $_POST["integrante-6-tipo-2"];

        if($integranteT1 == $integranteT2){
            $integranteT2 = "-";
        }

        if($integranteT2 != "-"){
            echo "<h3> Integrante 6 con tipo " . $integranteT1 . " y " . $integranteT2 . "</h3> <br>";
        }else{
            echo "<h3> Integrante 6 con tipo " . $integranteT1 . "</h3> <br>";
        }
        //Cálculo de sinergias.

        sinergia($integranteT1,$integranteT2,$compatibilidadTipos);



        //Array que contienen lo que su propio nombre indica

        $inmunidades = array();
        $muyResistente = array();
        $resistencias = array();
        $debilidades = array();
        $muyDebil = array();




        tipos(sinergia($integranteT1,$integranteT2,$compatibilidadTipos), $inmunidades, $muyResistente, $resistencias, $debilidades, $muyDebil, $tipos);

        $inmunidadesTotal = array_merge($inmunidadesTotal,$inmunidades);
        $muyResistenteTotal = array_merge($muyResistenteTotal,$muyResistente);
        $resistenciasTotal = array_merge($resistenciasTotal, $resistencias);
        $debilidadesTotal = array_merge($debilidadesTotal,$debilidades);
        $muyDebilTotal = array_merge($muyDebilTotal,$muyDebil);

        imprimir($inmunidades, $muyResistente, $resistencias, $debilidades, $muyDebil);
        echo "</span>";


        echo "</span>";

        echo "<h2 class = 'titulo'> Análisis individual </h2>";
        //A continuación se procede al cálculo de sinergia global(De los 6 integrantes).

        if(!empty($inmunidadesTotal)){

            echo "<main class = 'main' >";
            echo "<h2>Analisis global del equipo</h2>";
            echo "<h3>Inmunidades totales </h2><br>";


            foreach(array_count_values($inmunidadesTotal) as $it => $iti){
                echo $iti . " al tipo " . $it . " <br>";
            }

                    

        }

        if(!empty($muyResistenteTotal)){

            echo "<h3>Resistencias fuertes totales </h3><br>";


            foreach(array_count_values($muyResistenteTotal) as $mrt => $mrti){
                echo $mrti . " al tipo " . $mrt . " <br>";
            }

                    

        }

        if(!empty($resistenciasTotal)){

            echo "<h3>Resistencias totales </h3><br>";


            foreach(array_count_values($resistenciasTotal) as $rt => $rti){
                echo $rti . " al tipo " . $rt . " <br>";
            }

                    

        }


        if(!empty($debilidadesTotal)){

            echo "<h3>Debilidades totales </h3><br>";


            foreach(array_count_values($debilidadesTotal) as $dt => $dti){
                echo $dti . " al tipo " . $dt . " <br>";
            }

                    

        }


        if(!empty($muyDebilTotal)){

            echo "<h3>Debilidades fuertes totales </h3><br>";


            foreach(array_count_values($muyDebilTotal) as $mdt => $mdti){
                echo $mdti . " al tipo " . $mdt . " <br>";
            }

                    

        }

        echo "</main>";

        ?>
</body>
</html>
