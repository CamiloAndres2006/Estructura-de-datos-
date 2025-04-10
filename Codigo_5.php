<?php

$Personas = array("Miguel"=>23, "Laura"=>21, "Antonio"=>15);
asort($Personas);

$Estudiantes = array("Miguel"=>23, "Laura"=>21, "Antonio"=>15);
ksort($Estudiantes);

// asort() ordena por valores, es decir: 15, 21, 23
// ksort() ordena por claves (alfabéticamente), es decir: Miguel, Antonio, Laura

print_r($Personas);
print_r($Estudiantes);

?>