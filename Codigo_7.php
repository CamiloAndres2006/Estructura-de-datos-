<?php

$Informacion1 = array("nombre"=>"Carlos", "edad"=>20, "correo"=>"personal@gmail.com");

$Informacion2 = array("ciudad"=>"Medellín", "profesion"=>"diseñador");

$InformacionCompleta = array_merge($Informacion1, $Informacion2);

print_r($InformacionCompleta);

?>