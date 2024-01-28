<?php

//Definir las variables
$nombre = "Juan";
$edad = 25;


//Funciones simples
function saludar ($nombre, $edad){
    echo "Hola, $nombre. Tienes $edad años.<br>";
}

//LLamada
saludar($nombre, $edad);

//Estructura condicional
if ($edad>=18){
    echo 'Eres mayor de edad';
}else{
    echo 'Eres menor de edad';
}




