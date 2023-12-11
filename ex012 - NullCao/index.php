<?php  
$nome = 'Mateus';



$nomeCompleto = $nome;
//jeito antigo do NullCAO = condicional null collection assigning operator null
//$nomeCompleto .= isset ($sobrenome) ? $sobrenome : ' Sem sobrenome informado no banco';

//Jeito mais simples

$nomeCompleto .= ($sobrenome) ?? '';
echo $nomeCompleto;
//echo $nomeCompleto;

//Abstração do NullCAO "se a variavel existir, caso o contrario ?? 'conteudo' "

?>