<?php

print " \n Quantos m² você irá pintar?: ";
 $area = (float) fgets(STDIN);

 $eficiencia_lata = (108);
 $preco_lata = 80;

 $eficiencia_galao = (21.6);
 $preco_galao = 25;

 $area_folga = $area * 1.1;

print "\n Qual maneira você deseja comprar as tintas?";
    print "\n 1 - Apenas latas de 18 litros.";
    print "\n 2 - Apenas galões de 3,6 litros.";
    print "\n 3 - Misturar latas e galões. \n";    
    
$decisao = (int) fgets(STDIN);

#Decisão 1 (só latas)
//-------------------------------------------------------------------------------------------------------------------//

if ($decisao == 1) {

$latas = ceil($area / $eficiencia_lata);
$preco_total = $latas * $preco_lata;
echo "Para uma área de $area será necessário um total de $latas latas, que custarão $preco_total reais. ";

}
//-------------------------------------------------------------------------------------------------------------------//


#Decisão 2 (só galões)
//-------------------------------------------------------------------------------------------------------------------//

if ($decisao == 2) {

$galoes = ceil($area / $eficiencia_galao);
$preco_total = $preco_galao * $galoes;
echo "Para uma área de $area m² será necessário um total de $galoes galões, que custarão $preco_total reais.";

}
//-------------------------------------------------------------------------------------------------------------------//


#Decisão 3 (latas e galões)
//-------------------------------------------------------------------------------------------------------------------//
if ($decisao == 3) {

    $latas = floor($area_folga / $eficiencia_lata);
    $resto_latas = $area_folga % $eficiencia_lata;
    $galoes = ceil($resto_latas / $eficiencia_galao);
    $preco = (($latas * 80 ) + ($galoes * 25 ));

    echo "\n Misturando latas de 18L ($latas) e galões de 3,6L ($galoes) você irá gastar $preco reais  ";
}

//-------------------------------------------------------------------------------------------------------------------//

    
    
