<?php
include_once('conexao.php');

if(isset($_POST['delete']) || isset($_POST['submit']))
{
    $id = $_POST['id'];
    $cpf = $_POST['cpf'];
    $creci = $_POST['creci'];
    $nome = $_POST['nome'];

    $sqlDelete = "DELETE projeto SET cpf='$cpf', creci='$creci', nome='$nome' WHERE id='$id'";
    $result = $conn->query($sqlDelete);
}

header('Location: indexx.php');
?>
