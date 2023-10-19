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

function edad()
{
    $salida = ""; //inicializa la variable
    $conexion = mysqli_connect('localhost', 'root', '', 'aa'); //conecta a la base de datos
    $sql = "SELECT 21 as edad;"; //agrega los datos
    $resultado = $conexion->query($sql); //ejecuta la consulta.

    while ($fila = $resultado->fetch_assoc()) //cilo mientras para que muestre en pantalla.
    {

        if ($fila['edad'] >= 18) {
            $salida .= "Tienes " . $fila['edad'] . " Eres mayor de edad"; //los datos del sql al cual apodamos como "suma".
            //puede incrementar o acoumular
        } else {
            $salida .= "Tienes " . $fila['edad'] . " Eres menor de edad"; //los datos del sql al cual apodamos como "suma".
            //puede incrementar o acoumular
        }
    }

    $conexion->close(); //cierras la conexion 
    return $salida; //retorna las variables 

}

function contar_usuario()
{
    $salida = ""; //inicializa la variable
    $conexion = mysqli_connect('localhost', 'root', '', 'bd_ejercicio_estudiantes1'); //conecta a la base de datos
    $sql = "SELECT count(*) from tb_estudiantes;"; //agrega los datos
    $resultado = $conexion->query($sql); //ejecuta la consulta.
    while ($fila = $resultado->fetch_assoc()) //cilo mientras para que muestre en pantalla.
    {
        $salida = $fila["count(*)"]; //llama el contador 
    }

    $conexion->close(); //cierras la conexion 
    return $salida; //retorna las variables 

}

function InsertarPersona($nombre, $clave)
{
    $salida = ""; //se inicializa la salida 

    $conexion = mysqli_connect('localhost', 'root', '', 'aa'); //conexion a la base de datos.

    $sql = "INSERT into productos(nombre,clave) values('$nombre','$clave')"; // opera sql

    $resultado = $conexion->query($sql); //ejecuta la consulta.
    //recome el recorset 

    if ($conexion->affected_rows > 0) //si a sucedio algun cambio en la base 
    {
        $salida .= "Te has ingresado "; //mensaje si se registro de manera correcta
    } else {
        $salida .= "Error: 502"; //mensaje en caso dee erro 
    }

    $conexion->close(); //para terminar la conexion con la base de datos
    return $salida; //retorna 
}


function borrarPersona($nombre, $clave)
{
    $salida = ""; //se inicializa la salida 

    $conexion = mysqli_connect('localhost', 'root', '', 'aa'); //conexion a la base de datos.

    $sql = "DELETE FROM productos WHERE nombre = '$nombre' AND clave = '$clave'"; //opera sql

    $resultado = $conexion->query($sql); //ejecuta la consulta.
    //recome el recorset 

    if ($resultado) //si a sucedio algun cambio en la base 
    {
        $salida .= "Se ha borrado el registro correctamente"; //mensaje si se borro de manera correcta
    } else {
        $salida .= "Error: 502"; //mensaje en caso dee erro 
    }

    $conexion->close(); //para terminar la conexion con la base de datos
    return $salida; //retorna 
}

function actualizarSitio($sitio, $id = null)
{
    $salida = ""; //se inicializa la salida 

    $conexion = mysqli_connect('localhost', 'root', '', 'aa'); //conexion a la base de datos.

    $sql = "UPDATE productos SET sitio = '$sitio' WHERE id = '$id'"; //opera sql

    $resultado = $conexion->query($sql); //ejecuta la consulta.
    //recome el recorset 

    if ($resultado) //si a sucedio algun cambio en la base 
    {
        $salida .= "Se ha actualizado el registro correctamente"; //mensaje si se registro de manera correcta
    } else {
        $salida .= "Error: 502"; //mensaje en caso dee erro 
    }

    $conexion->close(); //para terminar la conexion con la base de datos
    return $salida; //retorna 
}

function mostrarSitio($id = null)
{
    $salida = ""; //se inicializa la salida 

    $conexion = mysqli_connect('localhost', 'root', '', 'aa'); //conexion a la base de datos.

    if ($id) //si el id no es nulo
    {
        $sql = "SELECT sitio FROM productos WHERE id = '$id'"; //opera sql
    } else {
        $sql = "SELECT sitio FROM productos"; //opera sql
    }

    $resultado = $conexion->query($sql); //ejecuta la consulta.
    //recome el recorset 

    if ($resultado) //si a sucedio algun cambio en la base 
    {
        while ($fila = $resultado->fetch_assoc()) //recorre el recorset 
        {
            $salida .= $fila["sitio"]; //llama el sitio
        }
    } else {
        $salida .= "Error: 502"; //mensaje en caso dee erro 
    }

    $conexion->close(); //para terminar la conexion con la base de datos
    return $salida; //retorna 
}

function imprimirEnlace($id)
{
    $salida = ""; //se inicializa la salida 

    $conexion = mysqli_connect('localhost', 'root', '', 'aa'); //conexion a la base de datos.

    $sql = "SELECT * FROM productos WHERE id = '$id'"; //opera sql

    $resultado = $conexion->query($sql); //ejecuta la consulta.

    while ($fila = $resultado->fetch_array()) {
        $salida .= "<a href='" . $fila['sitio'] . "'>";
        $salida .= $fila['invitacion'];
        $salida .= "</a>";
    }

    $conexion->close(); //para terminar la conexion con la base de datos
    return $salida; //retorna 
}



?>