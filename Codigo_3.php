<?php

echo "Quiz\n";
$Juegos = array ("Minecraft", "Fortnite", "FIFA", "Call_of_Duty", "Mario_Kart");
$Juegos[]="Zelda";

print_r ($Juegos);

$Juegos=["Minecraft", "Fortnite", "FIFA", "Call_of_Duty", "Mario_Kart"];
unset ($Juegos[3]);
print_r($Juegos);

$JuegoEliminar = "Call_of_Duty";
$Posicion = array_search ($JuegoEliminar, $Juegos);

if($Posicion == false)
{
    unset ($Juegos[$Posicion]);
}

print_r ($Juegos);
$Juegos[0]="Minecraft";
print_r($Juegos);

$Juegos[2] = "Terraria";
print_r ($Juegos);

$JuegosSeleccionados = array_slice ($Juegos,0,2);
print_r ($JuegosSeleccionados);


?>