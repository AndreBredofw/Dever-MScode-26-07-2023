<?php 
$nome_servidor = "localhost";
$nome_usuario = "root";
$senha = "";
$nomebancodd= "ex_ms5";

$conexao = new mysqli($nome_servidor,$nome_usuario,$senha,$nomebancodd);
if ($conexao->connect_error){
    die("Conexão Falho:" .$conexao->connect_error);  
}else {
    echo "A conexão Funcionou!";
}


$cria_tabela = "CREATE TABLE produtos (
    id INT(6),
    titulo VARCHAR(50) NOT NULL,
    pagamento VARCHAR(15) NOT NULL,
    valor INT(10)
)";


$inserir_valores = "INSERT INTO produtos (id,título,pagamento,valor)
VALUES 
(1, 'RX 6600', '2023-08-02', 1600),
(2, 'MONITOR', '2023-04-03', 639),
(3, 'TV', '2023-07/06', 2300),
(4, 'SMARTPHONE ', '2022-06-09', 2200),
(5, 'HEADSET', '2022-01-05', 170),
(6, 'MOLETOM', '2022-07-03', 89)";

if ($conexao->query($inserir_valores) === TRUE){
    echo "A consulta foi realizada com sucesso!";
}else {
    echo "Erro na consulta: " .$conexao->error;
}
$conexao->close(); //encerra a conexão

//foi utilizado uma tabela semelhante que o professor já passou para a realização deste dever!


?>