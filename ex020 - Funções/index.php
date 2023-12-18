<?php 
 //funcao que vai somar, recebe 1 e 2
 //internamente pega numero 1 e 2
 //Resultado a soma dos dois numeros
 $lista = [10,25,3];
    print_r($lista);

    function subsequente (){
        for($q=0; $q<10; $q++){
            echo $q. "<br/>";
        }
    }  
    //linha horizontal
    echo "<hr/>";
    subsequente();
    echo "<hr/>";

    function latir (){
        echo "au au ";
        echo "<hr/>";
    }
    for($i =0; $i<10; $i++){
        latir();
        echo "<br/>";
        
    }
?>