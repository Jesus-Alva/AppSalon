<?php

$db = mysqli_connect('localhost','root','jesusmysql','appsalon');

if(!$db){
    echo "Error en la Conexxion a la Base de Datos";
    exit;
}