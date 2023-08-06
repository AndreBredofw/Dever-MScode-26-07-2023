<?php 


function encontrarSegundoMaior($lista) {
    // Remover duplicatas e ordenar a lista em ordem decrescente
    $listaOrdenada = array_unique($lista);
    rsort($listaOrdenada); // rsort é usada para ordenar um array em ordem decrescente

    // O segundo maior número é o elemento no índice 1
    $segundoMaior = $listaOrdenada[1];
    
    return $segundoMaior;
}

$listan = [ 14, 375, 744, 502, 6, 89, 87, 120];
$segundoMaior = encontrarSegundoMaior($listan);
echo "Segundo maior número na lista :   $segundoMaior" ;

//fiz com a ajuda do chatgpt, irei praticar mais com alguns formatos diferentes, comentei nos códigos para ficar mais claro qual a funcionalidade de cada funçao nova que foi utlizada
?>