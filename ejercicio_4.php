<?php

// Función que lanza el dado y devuelve el resultado
function lanzarDado(){
    return rand(1, 6); // Generar número aleatorio entre 1 y 6 y devolverlo
}

function mostrarImgDado($numero){
    echo '<img src="img/dado'.$numero.'.svg" alt="">';
}

function numeroDadoEliminar (){
    $numero = rand(1, 6); // Generar número aleatorio entre 1 y 6 y devolverlo
    return $numero;
}



// Función para eliminar los dados que coincidan con el valor dado
function eliminarDados($tirada, $dadoAEliminar)
{
    $dadosRestantes = [];
    foreach ($tirada as $dado) {
        if ($dado != $dadoAEliminar) {
            $dadosRestantes[] = $dado; // Guardar solo los dados que no coinciden
        }
    }
    return $dadosRestantes;
}


/* Otra forma de hacer la función que elimine los dados con array_diff
function borrarDados ($array, $numero){
    // Con array_diff usamos los numero que le hayamos dicho.
    $resultado = array_diff($array, array($numero));
    // Con array_ values reindexamos los indices del array.
    $resultado = array_values($resultado);
    return $resultado;
}
*/


// Mostrar por pantalla.
echo '<p><strong>Tirada de 6 dados:</strong></p>';
$numeroDados=[];
for ($i=0; $i<6; $i++){
    $numeroDados[$i]= lanzarDado();
    mostrarImgDado($numeroDados[$i]);
};
echo '<br><br>';

echo '<p><strong>Dado a eliminar: </strong></p>';
$numeroEliminar = numeroDadoEliminar();
mostrarImgDado($numeroEliminar);
echo '<br><br>';

echo '<p><strong>Dados restantes: </strong></p>';
//$nuevoArraySinDadosBorrados = borrarDados($numeroDados, $numeroEliminar);
$nuevoArraySinDadosBorrados = eliminarDados($numeroDados, $numeroEliminar);
for ($i =0; $i<count($nuevoArraySinDadosBorrados); $i++){
    mostrarImgDado($nuevoArraySinDadosBorrados[$i]);
};

?>