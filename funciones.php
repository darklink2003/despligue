<?php

function consulta(){
    $salida = 0; //inicializa la variable

    $salida = 10 * 2 / 2; //calcula el area del trinagulo 


    return $salida; //retorna la variable 

}


function areac(){
    $salida = 0; //inicializa la variable
    $salida = 10 * 2; //calcula el area del cuadrado 


    return $salida; //retorna la variable 
}

function conexion(){
    $conexion = mysqli_connect('localhost','root','','aa');//conecta a la base de datos  
     $sql="SELECT 2+1 as suma;"; //calcula la suma de los numeros 
}
?>