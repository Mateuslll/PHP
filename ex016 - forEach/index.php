<?php 
$ingredientes = [
    'açucar',
    'farina de trigo',
    'manteiga',
    'ovo',
    'leite',
    'fermento'
];
//lista de ingredientes fazendo looping dentro do array, fazendo com quem ingrediente assuma um valor
foreach ($ingredientes as $ingrediente) {
    echo "Item: " .$ingrediente. "<br />";
}
//agora tenho acesso a chave e o valor do item
foreach ($ingredientes as $chave => $ingrediente) {
    echo "Item: ".$chave." " .$ingrediente. "<br />";
}
print_r($ingredientes);
?>