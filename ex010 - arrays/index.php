<?php 

    $lista = [
        'nome' =>'Matheus',
        'idade' => 20,
        'atributos'=> [
            'forca'=> 60,
            'agilidade'=>80,
            'destreza'=>50
        ],
        'vida' => 1000,
        'mana' => 928
    ];
    echo "NOME:". $lista['nome']."<br/>";
    echo "FORÇA:". $lista['atributos']['forca']."<br/>";
    echo "VIDA:". $lista['vida']."<br/>";

?>