<?php

$Secuencia = array(0,1,2,3,4,5,6,7,8,9);

$SecuenciaMenores = array_filter($Secuencia, function ($Valor): bool {
    return $Valor <= 5;
});

$SecuenciaMayores = array_filter($Secuencia, function ($Valor): bool {
    return $Valor >= 5;
});

print_r($SecuenciaMenores);
print_r($SecuenciaMayores);

?>
