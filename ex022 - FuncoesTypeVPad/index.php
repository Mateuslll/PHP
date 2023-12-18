<?php 
    //Criando parametro opcional
    //o numero3 é um parametro opcial, caso esse parametro o 0 assume
    function somar($numero1=0, $numero2=0, $numero3 = 0){
        return $numero1 + $numero2 + $numero3;
    }

    $x = somar();
    $y = somar(5,7);
    $w = somar(10,8);

    echo somar($x,$y,$w);
?>