<?php

print "Quantos quilômetros você ira viajar?: ";
$km = (int) fgets(STDIN);

print "Qual a velocidade que irá percorrer?: ";
$velocidade = (int) fgets(STDIN);

$tempo = round($km / $velocidade) ;

print "Sua viagem irá durar aproximadamente: $tempo horas \n \n";