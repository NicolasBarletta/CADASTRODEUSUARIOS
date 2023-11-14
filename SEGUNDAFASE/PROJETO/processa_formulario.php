<?php

include_once("conexao.php");

$cpf = filter_input(INPUT_POST, 'cpf',FILTER_SANITIZE_STRING);
$creci = filter_input(INPUT_POST, 'creci',FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);

//echo "CPF: $cpf <br>";
//echo "Creci: $creci <br>";
//echo "Nome: $nome <br>";

$inserir = "INSERT INTO projeto (cpf, creci, nome) VALUES ('$cpf','$creci','$nome')";
$testar = mysqli_query($conn, $inserir);

if ($testar) {
    echo "Registro inserido com sucesso!";
} else {
    echo "Erro na inserção: " . mysqli_error($conn);
}


?>