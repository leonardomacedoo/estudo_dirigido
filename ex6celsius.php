<?php

print " \n Quantos graus deseja converter para Fahrenheit: ";
$celsius = (int) fgets(STDIN);

$fahrenheit = 9*$celsius/5 + 32;

print "\n temperatura em Fahrenheit: $fahrenheit \n \n";
