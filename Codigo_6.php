<?php

$Personas = array("Miguel"=>23, "Laura"=>21, "Antonio"=>15, "Roberto"=>18, "Daniel"=>15);
asort($Personas);

print_r($Personas);

$PersonasMayores = array_filter($Personas, function($Edad): bool {
    return $Edad > 18;
});

print_r($PersonasMayores);

?>