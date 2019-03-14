<?php

print "Digite a quantidade de metros que deseja converter em milimetros: ";

$metros = (int) fgets(STDIN);
$milimetros = $metros * 1000;

print " \n $metros metros correspondem a: $milimetros milimetros \n \n";