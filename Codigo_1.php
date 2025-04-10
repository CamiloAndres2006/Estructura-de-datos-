<?php

echo "Quiz";
//$ListaJuegos = array ("Minecraft", "Fortnite", "FIFA", "Call_of_Duty", "Mario_Kart");
//%ListaJuegos[]="Zelda";

//print_r ($ListaJuegos);

$ListaJuegos=["Minecraft", "Fortnite", "FIFA", "Call_of_Duty", "Mario_Kart"];
unset ($ListaJuegos[3]);
print_r($ListaJuegos);

?>