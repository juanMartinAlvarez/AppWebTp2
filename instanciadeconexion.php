<?php

    function conectar(){
        $s = "localhost";
        $u = "root";
        $p = "";
        $db = "jueves";
    
        $conexion = new mysqli($s, $u, $p, $db);

        return $conexion;
    }
?>