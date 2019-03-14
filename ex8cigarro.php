<?php
  Print" \n Fuma a quantos anos? ";
    $Anos_Fumados =(int)fgets(STDIN);

Print " \n Quantos cigarros por dia? ";
    $cigarros_dia =(int)fgets(STDIN);

    $cigaros = $cigarros_dia*365*$Anos_Fumados;
    
    $minutos_Perdidos = $cigaros*10;

    $horas_perdidas = $minutos_Perdidos/60;

    $Dias_Perdidos = round($horas_perdidas/24);

 
         print " \n Vai morrer $Dias_Perdidos dias mais cedo \n \n ";