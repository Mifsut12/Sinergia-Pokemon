<!-- Fichero dedicado a cargar un array asociativo, cada fila del array representa el tipo del ataque mientras que su contenido es otro array que indica las resistencias del resto de tipos -->

<?php
$compatibilidadTipos = array("Normal" =>array(1,1,1,1,1,1,2,1,1,1,1,1,1,0,1,1,1,1),
                "Fuego" =>array(1,0.5,2,0.5,1,0.5,1,1,1,1,1,0.5,2,1,1,1,0.5,0.5),
                "Agua" =>array(1,0.5,0.5,2,2,0.5,1,1,1,1,1,1,1,1,1,1,1,1),
                "Planta" =>array(1,2,0.5,0.5,0.5,2,1,2,0.5,2,1,2,1,1,1,1,1,1),
                "Electrico" =>array(1,1,1,1,0.5,1,1,1,2,1,1,1,1,1,1,1,0.5,1),
                "Hielo" =>array(1,2,1,1,1,0.5,2,1,1,1,1,1,2,1,1,1,2,1),
                "Lucha" =>array(1,1,1,1,1,1,1,1,1,2,2,0.5,0.5,1,1,0.5,1,2),
                "Veneno" =>array(1,1,1,0.5,1,1,0.5,0.5,2,1,2,0.5,1,1,1,1,1,0.5),
                "Tierra" =>array(1,1,2,2,0,2,1,0.5,1,1,1,1,0.5,1,1,1,1,1),
                "Volador" =>array(1,1,1,0.5,2,2,0.5,1,0,1,1,0.5,2,1,1,1,1,1),
                "Psiquico" =>array(1,1,1,1,1,1,0.5,1,1,1,0.5,2,2,1,1,2,1,1),
                "Bicho" =>array(1,2,1,0.5,1,1,0.5,1,0.5,2,1,1,2,1,1,1,1,1),
                "Roca" =>array(0.5,0.5,2,2,1,1,2,0.5,2,0.5,1,1,1,1,1,1,2,1),
                "Fantasma" =>array(0,1,1,1,1,1,0,0.5,1,1,1,0.5,1,2,1,2,1,1),
                "Dragon" =>array(1,0.5,0.5,0.5,0.5,2,1,1,1,1,1,1,1,1,2,1,1,2),
                "Siniestro" =>array(1,1,1,1,1,1,2,1,1,1,0,2,1,0.5,1,0.5,1,2),
                "Acero" =>array(0.5,2,1,0.5,1,0.5,2,0,2,0.5,0.5,0.5,0.5,1,0.5,1,0.5,0.5),
                "Hada" =>array(1,1,1,1,1,1,0.5,2,1,1,1,0.5,1,1,0,0.5,2,1)
);


$tipos = array("Normal","Fuego","Agua","Planta","Eléctrico","Hielo","Lucha","Veneno","Tierra","Volador","Psíquico","Bicho","Roca","Fantasma","Dragón","Siniestro","Acero","Hada")
?>
