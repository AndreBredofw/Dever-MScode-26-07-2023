<?php 
function encontrar_numero_ausente($lista) {
    $soma_esperada = (10 * (10 + 1)) / 2; // Soma dos números de 1 a 10

    // Calcula a soma dos números na lista fornecida
    $soma_real = array_sum($lista); //array_sum calcula a soma todos os númericos dentro de uma array

    // O número ausente é dado pela diferença entre a soma esperada e a soma real
    $numero_ausente = $soma_esperada - $soma_real;

    return $numero_ausente;
}

// Exemplo de uso:
$lista_exemplo1 = [1, 2, 3, 4, 5, 6, 7, 9, 10];
$resultado1 = encontrar_numero_ausente($lista_exemplo1);
echo $resultado1;  


?>