<?php

print "Digite o preço a ser pago: ";
$preco = (int) fgets(STDIN);

print "Digite a porcentagem de desconto: ";
$desconto = (int) fgets(STDIN);


$valordesconto = ($preco * $desconto) /100;

$precofinal = $preco - $valordesconto;

print " \n Total de desconto obtido: $valordesconto \n \n";

print " \n Valor do produto com desconto: $precofinal \n \n";