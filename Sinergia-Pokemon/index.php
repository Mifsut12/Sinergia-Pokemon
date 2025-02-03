<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinegia pokemon</title>
    <link rel="stylesheet" href="./estilos/estilos-index.css">
</head>
<body>
    <!-- Mensaje informativo -->
    <h1 name = "h1"> Bienvenido a la aplicación de sinegias pokemon</h1>

    <h2 name = "h2"> Introduce los tipos de los integrantes de tu equipo y pulsa el botón de ver sinergias</h2>


    <a href = /tabla-tipos.php> Tabla de tipos </a>
<!-- Cada equipo puede tener hasta un máximo de 6 pokemon -->

<!-- Un pokemon como mínimo tiene 1 tipo como máximo tiene 2 -->
    <form class = "form" id = "form" action = "sinergias.php" method = "post">

        <span> </span>
      
        <h4>Tipo primario</h4>

        <h4>Tipo secundario</h4>


        <p>Integrante 1</p>
        <select name="integrante-1-tipo-1" id="integrante-1-tipo-1">
                                    <option value="Normal">Normal</option>
                                    <option value="Fuego">Fuego</option>
                                    <option value="Agua">Agua</option>
                                    <option value="Planta">Planta</option>
                                    <option value="Electrico">Eléctrico</option>
                                    <option value="Hielo">Hielo</option>
                                    <option value="Lucha">Lucha</option>
                                    <option value="Veneno">Veneno</option>
                                    <option value="Tierra">Tierra</option>
                                    <option value="Volador">Volador</option>
                                    <option value="Psiquico">Psíquico</option>
                                    <option value="Bicho">Bicho</option>
                                    <option value="Roca">Roca</option>
                                    <option value="Fantasma">Fantasma</option>
                                    <option value="Dragon">Dragón</option>
                                    <option value="Siniestro">Siniestro</option>
                                    <option value="Acero">Acero</option>
                                    <option value="Hada">Hada</option>
                             </select></label>

        <select name="integrante-1-tipo-2" id="integrante-1-tipo-2">
                                    <option value="-">-</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Fuego">Fuego</option>
                                    <option value="Agua">Agua</option>
                                    <option value="Planta">Planta</option>
                                    <option value="Electrico">Eléctrico</option>
                                    <option value="Hielo">Hielo</option>
                                    <option value="Lucha">Lucha</option>
                                    <option value="Veneno">Veneno</option>
                                    <option value="Tierra">Tierra</option>
                                    <option value="Volador">Volador</option>
                                    <option value="Psiquico">Psíquico</option>
                                    <option value="Bicho">Bicho</option>
                                    <option value="Roca">Roca</option>
                                    <option value="Fantasma">Fantasma</option>
                                    <option value="Dragon">Dragón</option>
                                    <option value="Siniestro">Siniestro</option>
                                    <option value="Acero">Acero</option>
                                    <option value="Hada">Hada</option>
                             </select>

       <p>Integrante 2</p>
        <select name="integrante-2-tipo-1" id="integrante-2-tipo-1">
                                    <option value="Normal">Normal</option>
                                    <option value="Fuego">Fuego</option>
                                    <option value="Agua">Agua</option>
                                    <option value="Planta">Planta</option>
                                    <option value="Electrico">Eléctrico</option>
                                    <option value="Hielo">Hielo</option>
                                    <option value="Lucha">Lucha</option>
                                    <option value="Veneno">Veneno</option>
                                    <option value="Tierra">Tierra</option>
                                    <option value="Volador">Volador</option>
                                    <option value="Psiquico">Psíquico</option>
                                    <option value="Bicho">Bicho</option>
                                    <option value="Roca">Roca</option>
                                    <option value="Fantasma">Fantasma</option>
                                    <option value="Dragon">Dragón</option>
                                    <option value="Siniestro">Siniestro</option>
                                    <option value="Acero">Acero</option>
                                    <option value="Hada">Hada</option>
                             </select></label></label>

        <select name="integrante-2-tipo-2" id="integrante-2-tipo-2">
                                    <option value="-">-</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Fuego">Fuego</option>
                                    <option value="Agua">Agua</option>
                                    <option value="Planta">Planta</option>
                                    <option value="Electrico">Eléctrico</option>
                                    <option value="Hielo">Hielo</option>
                                    <option value="Lucha">Lucha</option>
                                    <option value="Veneno">Veneno</option>
                                    <option value="Tierra">Tierra</option>
                                    <option value="Volador">Volador</option>
                                    <option value="Psiquico">Psíquico</option>
                                    <option value="Bicho">Bicho</option>
                                    <option value="Roca">Roca</option>
                                    <option value="Fantasma">Fantasma</option>
                                    <option value="Dragon">Dragón</option>
                                    <option value="Siniestro">Siniestro</option>
                                    <option value="Acero">Acero</option>
                                    <option value="Hada">Hada</option>
                             </select>
        <p>Integrante 3</p>
        <select name="integrante-3-tipo-1" id="integrante-3-tipo-1">
                                    <option value="Normal">Normal</option>
                                    <option value="Fuego">Fuego</option>
                                    <option value="Agua">Agua</option>
                                    <option value="Planta">Planta</option>
                                    <option value="Electrico">Eléctrico</option>
                                    <option value="Hielo">Hielo</option>
                                    <option value="Lucha">Lucha</option>
                                    <option value="Veneno">Veneno</option>
                                    <option value="Tierra">Tierra</option>
                                    <option value="Volador">Volador</option>
                                    <option value="Psiquico">Psíquico</option>
                                    <option value="Bicho">Bicho</option>
                                    <option value="Roca">Roca</option>
                                    <option value="Fantasma">Fantasma</option>
                                    <option value="Dragon">Dragón</option>
                                    <option value="Siniestro">Siniestro</option>
                                    <option value="Acero">Acero</option>
                                    <option value="Hada">Hada</option>
                             </select></label></label>

        <select name="integrante-3-tipo-2" id="integrante-3-tipo-2">
                                    <option value="-">-</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Fuego">Fuego</option>
                                    <option value="Agua">Agua</option>
                                    <option value="Planta">Planta</option>
                                    <option value="Electrico">Eléctrico</option>
                                    <option value="Hielo">Hielo</option>
                                    <option value="Lucha">Lucha</option>
                                    <option value="Veneno">Veneno</option>
                                    <option value="Tierra">Tierra</option>
                                    <option value="Volador">Volador</option>
                                    <option value="Psiquico">Psíquico</option>
                                    <option value="Bicho">Bicho</option>
                                    <option value="Roca">Roca</option>
                                    <option value="Fantasma">Fantasma</option>
                                    <option value="Dragon">Dragón</option>
                                    <option value="Siniestro">Siniestro</option>
                                    <option value="Acero">Acero</option>
                                    <option value="Hada">Hada</option>
                             </select>


        <p>Integrante 4</p>
        <select name="integrante-4-tipo-1" id="integrante-4-tipo-1">
                                    <option value="Normal">Normal</option>
                                    <option value="Fuego">Fuego</option>
                                    <option value="Agua">Agua</option>
                                    <option value="Planta">Planta</option>
                                    <option value="Electrico">Eléctrico</option>
                                    <option value="Hielo">Hielo</option>
                                    <option value="Lucha">Lucha</option>
                                    <option value="Veneno">Veneno</option>
                                    <option value="Tierra">Tierra</option>
                                    <option value="Volador">Volador</option>
                                    <option value="Psiquico">Psíquico</option>
                                    <option value="Bicho">Bicho</option>
                                    <option value="Roca">Roca</option>
                                    <option value="Fantasma">Fantasma</option>
                                    <option value="Dragon">Dragón</option>
                                    <option value="Siniestro">Siniestro</option>
                                    <option value="Acero">Acero</option>
                                    <option value="Hada">Hada</option>
                             </select></label></label>

        <select name="integrante-4-tipo-2" id="integrante-4-tipo-2">
                                    <option value="-">-</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Fuego">Fuego</option>
                                    <option value="Agua">Agua</option>
                                    <option value="Planta">Planta</option>
                                    <option value="Electrico">Eléctrico</option>
                                    <option value="Hielo">Hielo</option>
                                    <option value="Lucha">Lucha</option>
                                    <option value="Veneno">Veneno</option>
                                    <option value="Tierra">Tierra</option>
                                    <option value="Volador">Volador</option>
                                    <option value="Psiquico">Psíquico</option>
                                    <option value="Bicho">Bicho</option>
                                    <option value="Roca">Roca</option>
                                    <option value="Fantasma">Fantasma</option>
                                    <option value="Dragon">Dragón</option>
                                    <option value="Siniestro">Siniestro</option>
                                    <option value="Acero">Acero</option>
                                    <option value="Hada">Hada</option>
                             </select>
        <p>Integrante 5</p>
        <select name="integrante-5-tipo-1" id="integrante-5-tipo-1">
                                    <option value="Normal">Normal</option>
                                    <option value="Fuego">Fuego</option>
                                    <option value="Agua">Agua</option>
                                    <option value="Planta">Planta</option>
                                    <option value="Electrico">Eléctrico</option>
                                    <option value="Hielo">Hielo</option>
                                    <option value="Lucha">Lucha</option>
                                    <option value="Veneno">Veneno</option>
                                    <option value="Tierra">Tierra</option>
                                    <option value="Volador">Volador</option>
                                    <option value="Psiquico">Psíquico</option>
                                    <option value="Bicho">Bicho</option>
                                    <option value="Roca">Roca</option>
                                    <option value="Fantasma">Fantasma</option>
                                    <option value="Dragon">Dragón</option>
                                    <option value="Siniestro">Siniestro</option>
                                    <option value="Acero">Acero</option>
                                    <option value="Hada">Hada</option>
                             </select></label></label>

        <select name="integrante-5-tipo-2" id="integrante-5-tipo-2">
                                    <option value="-">-</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Fuego">Fuego</option>
                                    <option value="Agua">Agua</option>
                                    <option value="Planta">Planta</option>
                                    <option value="Electrico">Eléctrico</option>
                                    <option value="Hielo">Hielo</option>
                                    <option value="Lucha">Lucha</option>
                                    <option value="Veneno">Veneno</option>
                                    <option value="Tierra">Tierra</option>
                                    <option value="Volador">Volador</option>
                                    <option value="Psiquico">Psíquico</option>
                                    <option value="Bicho">Bicho</option>
                                    <option value="Roca">Roca</option>
                                    <option value="Fantasma">Fantasma</option>
                                    <option value="Dragon">Dragón</option>
                                    <option value="Siniestro">Siniestro</option>
                                    <option value="Acero">Acero</option>
                                    <option value="Hada">Hada</option>
                             </select>
        <p>Integrante 6</p>
        <select name="integrante-6-tipo-1" id="integrante-6-tipo-1">
                                    <option value="Normal">Normal</option>
                                    <option value="Fuego">Fuego</option>
                                    <option value="Agua">Agua</option>
                                    <option value="Planta">Planta</option>
                                    <option value="Electrico">Eléctrico</option>
                                    <option value="Hielo">Hielo</option>
                                    <option value="Lucha">Lucha</option>
                                    <option value="Veneno">Veneno</option>
                                    <option value="Tierra">Tierra</option>
                                    <option value="Volador">Volador</option>
                                    <option value="Psiquico">Psíquico</option>
                                    <option value="Bicho">Bicho</option>
                                    <option value="Roca">Roca</option>
                                    <option value="Fantasma">Fantasma</option>
                                    <option value="Dragon">Dragón</option>
                                    <option value="Siniestro">Siniestro</option>
                                    <option value="Acero">Acero</option>
                                    <option value="Hada">Hada</option>
                             </select></label>

         <select name="integrante-6-tipo-2" id="integrante-6-tipo-2">
                                    <option value="-">-</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Fuego">Fuego</option>
                                    <option value="Agua">Agua</option>
                                    <option value="Planta">Planta</option>
                                    <option value="Electrico">Eléctrico</option>
                                    <option value="Hielo">Hielo</option>
                                    <option value="Lucha">Lucha</option>
                                    <option value="Veneno">Veneno</option>
                                    <option value="Tierra">Tierra</option>
                                    <option value="Volador">Volador</option>
                                    <option value="Psiquico">Psíquico</option>
                                    <option value="Bicho">Bicho</option>
                                    <option value="Roca">Roca</option>
                                    <option value="Fantasma">Fantasma</option>
                                    <option value="Dragon">Dragón</option>
                                    <option value="Siniestro">Siniestro</option>
                                    <option value="Acero">Acero</option>
                                    <option value="Hada">Hada</option>
                             </select> 

        
        <input id ="submit" type ="submit" name ="Enviar" value ="Ver sinergia">
                    
</body>
</html>