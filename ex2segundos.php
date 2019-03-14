<?php

print "Digite o número de dias: ";
$dias = (int) fgets(STDIN);

print "Digite o número de horas: ";
$horas = (int) fgets(STDIN);

print "Digite o número de minutos: ";
$min = (int) fgets(STDIN);

print "Digite o número de segundos: ";
$seg = (int) fgets(STDIN);

$segdias = $dias*86400;

$seghoras = $horas*3600;

$segmin = $min*60;

$secperd = $segdias+$seghoras+$segmin+$seg;

print "O total de segundos perdidos é de $secperd \n";




