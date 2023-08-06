
<?php 
    function produto_impares($lista) {
        $produto = 1;
    
        foreach ($lista as $num) { // forech irá percorrer cada elemento da lista
            if ($num % 2 != 0) {  // Faz a verificação e se o resto for diferente de zero, significa que o número é ímpar.
                $produto *= $num;
            }
        }
    
        return $produto;
    }
    
    
    $lista_exemplo = [1, 2, 3, 25, 5, 8, 4];
    $resultado = produto_impares($lista_exemplo);
    echo $resultado;  
    
?>