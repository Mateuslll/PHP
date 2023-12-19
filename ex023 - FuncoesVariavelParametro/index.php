<?php 
    //Criando parametro opcional
    //o numero3 é um parametro opcial, caso esse parametro o 0 assume
    //para colocar variavel por parametro poe o &$Variavel
    function somar( $numero1,  $numero2, &$total=0){
        $numero1 = 10;
        $numero2 = 5;
        return $total =  $numero1 + $numero2 ;
    }

    //$x = somar();
    $x = 4;
    $y = 3;
    $soma = 0;
    somar($x,$y,$soma);
    echo "Total: ". somar($x,$y);

    $lista = [2,4,7];
    sort($lista);
    print_r($lista);
?>