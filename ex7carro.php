<?php

print "Quantos km você percorreu com o carro?: ";
$km = (int) fgets (STDIN);

print "Quantos dias você ficou com o carro?: ";
$dias = (int) fgets(STDIN);

$precokm = $km * 0.15;
$precodias = $dias * 60;

$precofinal = round($precokm + $precodias);

print "\n Você ira pagar: $precofinal reais pelo carro \n \n";
