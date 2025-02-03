//El proposito de este código es resaltar las ataques que son supereficaces, poco eficaces e inmunidades de la tabla de tipos con el fin de facilitar el proposito de esta que es de informar sobre las interacciones entre tipos

//Obtener la tabla via id
let tablas = document.getElementById("tabla")

//Recorrer las celdas de la tabla como si se tratara de una matriz en busca de las siguientes expresiones: x2 x0.5 y x0. 

console.log(tablas.rows.length)
//Se empieza con uno para ignorar la cabeza y la 1ª columna ya que esa no tiene información relevante.
var dimensiones = tablas.rows.length




//Al ser una matriz cuya triangular superior es identica a la inferior, se puede recorrer en la mitad de iteraciones.

for(var i = 1; i < tablas.rows.length; i++){
    for(var j = 1; j < tablas.rows.length; j++){
        // Obtener las celdas 
        var celda = tablas.rows[i].cells[j];
    

        // Valorar su contenido
        //Caso de que sea supereficaz
        if(celda.innerText == "x2"){
            celda.classList.add('superEficaz')
        } else if(celda.innerText == "x0.5"){
            celda.classList.add('resistencia')
        }
    }
}





