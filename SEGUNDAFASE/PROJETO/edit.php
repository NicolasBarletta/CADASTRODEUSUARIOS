<?php
if (!empty($_GET['id'])) {
    include_once("conexao.php");

    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM projeto WHERE id=$id";
    $result = $conn->query($sqlSelect);

    if ($result->num_rows > 0) {
        // Recupera os dados do usuário do banco de dados
        $user_data = mysqli_fetch_assoc($result);

        // Inicializa as variáveis com os valores atuais do banco de dados
        $cpf = $user_data['cpf'];
        $creci = $user_data['creci'];
        $nome = $user_data['nome'];

        // Verifica se o formulário foi enviado (método POST)
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Atualiza os valores apenas se o formulário foi enviado
            $cpf = $_POST['cpf'];
            $creci = $_POST['creci'];
            $nome = $_POST['nome'];

            // Execute a lógica para atualizar os dados no banco de dados aqui
            // ...

            // Exemplo de impressão para depurar
            print_r($cpf);
        }
    } else {
        header('Location: indexx.php');
    }
}
?>



<!DOCTYPE html>
<html lang="pt-br">
    <head>
<meta charset="UTF-8">
<title>Contato</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css" media="screen" />
</head>
<script src="script.js"></script>
<body>

<form action="saveEdit.php" method="POST" id="formulario" name="formulario">

    <div class="page">
        <div class="quadrante">
    <h4 class="titulo">Atualização de Corretor</h4>
            <div class="duo">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input value="<?php echo $cpf ?>" type="text" name="cpf" class="cpf" placeholder="Digite seu CPF" required maxlength="11" minlength="11"></input>
    <input value="<?php echo $creci ?>" class="creci" name="creci" placeholder="Digite seu Creci" required  minlength="2"></input>
            </div>
        </div>
    </div>

<div class="final">
    <input value="<?php echo $nome ?>" type="text" name="nome" placeholder="Digite seu nome" required  minlength="2"></input>
    <button type="submit" name="update" class="botao" onclick="validar()">Salvar</button>
</div>
</form>


</body>

</html>