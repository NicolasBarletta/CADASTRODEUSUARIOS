<?php
include_once('conexao.php');

if(isset($_POST['update']) || isset($_POST['submit']))
{
    $id = $_POST['id'];
    $cpf = $_POST['cpf'];
    $creci = $_POST['creci'];
    $nome = $_POST['nome'];

    $sqlUpdate = "UPDATE projeto SET cpf='$cpf', creci='$creci', nome='$nome' WHERE id='$id'";
    $result = $conn->query($sqlUpdate);
}

header('Location: indexx.php');
?>
