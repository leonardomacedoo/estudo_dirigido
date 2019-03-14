<?php

print " \n Digite o seu sálario: ";
$salario = (int) fgets(STDIN);

print " \n Digite o aumento do seu salário: ";
$aumento = (int) fgets(STDIN);

$valor_aumento = $salario*$aumento/100;

$salario_final  =  $salario + $valor_aumento;



print "\n Seu salário final vai ser: $salario_final ";
