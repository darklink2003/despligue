<?php

function consulta()
{
    $salida = 0; //inicializa la variable

    $salida = 10 * 2 / 2; //calcula el area del trinagulo 


    return $salida; //retorna la variable 

}


function areac()
{
    $salida = 0; //inicializa la variable
    $salida = 10 * 2; //calcula el area del cuadrado 


    return $salida; //retorna la variable 
}

function visualizar()
{
    $salida = 0; //se inicializa la salida 
    $conexion = mysqli_connect('localhost', 'root', '', 'aa'); //conexion a la base de datos.
    $sql = "select 2+2 as suma"; // opera sql
    $resultado = $conexion->query($sql); //ejecuta la consulta.
    //recome el recorset 
    while ($fila = $resultado->fetch_assoc()) //cilo mientras para que muestre en pantalla.
    {
        $salida += $fila['suma']; //los datos del sql al cual apodamos como "suma".
        //puede incrementar o acoumular.
    }

    $conexion->close();
    return $salida; //retorna 

}


function calculovs2()
{
    $salida = 0; //inicializa la variable
    $conexion = mysqli_connect('localhost', 'root', '', 'aa'); //conecta a la base de datos
    $sql = "SELECT 10 as n1, 20  as n2;"; //agrega los datos
    $resultado = $conexion->query($sql); //ejecuta la consulta.

    while ($fila = $resultado->fetch_assoc()) //cilo mientras para que muestre en pantalla.
    {
        $salida += $fila['n1'];
        //suma las variables n1,n2
        $salida += $fila['n2'];
    }

    $conexion->close(); //cierras la conexion 
    return $salida; //retorna las variables 

}
?>