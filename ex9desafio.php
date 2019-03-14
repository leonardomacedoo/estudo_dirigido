<?php

print " \n Quantos m² você irá pintar?: ";
 $area = (float) fgets(STDIN);
 $area_ac = $area + $area*0.10;
 $litros = $area / 6;
 $litros_ac = $area_ac / 6;

print "\n Qual maneira você deseja comprar as tintas?";
    print "\n 1 - Apenas latas de 18 litros.";
    print "\n 2 - Apenas galões de 3,6 litros.";
    print "\n 3 - Misturar latas e galões. \n";    
    
$decisao = (int) fgets(STDIN);

#Decisão 1
//-------------------------------------------------------------------------------------------------------------------//

if ($decisao == 1) {
    
    if ($litros <= 18){
        echo "\n Para a área de $area m² será necessário uma lata de 18L que custará 80 reais \n \n";
    }

    else{
        $latas = ceil($litros / 18);
        $preco = $latas * 80;
        echo "\n Para a área de $area m² será necessário $latas latas de 18L, que custarão $preco reais. \n \n";
        
    }

}
//-------------------------------------------------------------------------------------------------------------------//


#Decisão 2
//-------------------------------------------------------------------------------------------------------------------//
if ($decisao == 2) {

    if($litros <= 3.6) {
        echo "\n Para a área de $area m² séra necessário um galão de 3,6L que custará 25 reais \n \n";
    }

    else {
        $galoes = ceil($litros / 3.6);
        $preco = $galoes * 25;
        echo "\n Para a área de $area m² será necessário $galoes galoes de 3,6L que custarão $preco reais. \n \n";

    }
}

//-------------------------------------------------------------------------------------------------------------------//


#Decisão 3
//-------------------------------------------------------------------------------------------------------------------//
if ($decisao == 3) {

    $latas = ceil($litros_ac / 18);
    $resto_latas = $latas%18;
    $galoes = ceil($resto_latas/3.6);
    $preco = (($latas * 80 ) + ($galoes * 25 ));

    echo "\n Misturando latas de 18L ($latas) e galões de 3,6L ($galoes) você irá gastar $preco reais  ";
}

//-------------------------------------------------------------------------------------------------------------------//

    
