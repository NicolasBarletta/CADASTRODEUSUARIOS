<?php


if(!empty($_GET['id']))
{
    include_once('conexao.php');

    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM projeto WHERE id=$id";

    $result = $conn->query($sqlSelect);

    if($result->num_rows > 0)
    {
        $sqlDelete = "DELETE FROM projeto WHERE id=$id";
        $resultDelete = $conn->query($sqlDelete);
    }
}
header('Location: indexx.php');
?>
