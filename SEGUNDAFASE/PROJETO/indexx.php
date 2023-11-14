<!DOCTYPE html>
<html lang="pt-br">
    <head>
<meta charset="UTF-8">
<title>Contato</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css" media="screen" />
</head>
<script src="script.js"></script>
<body>

<form action="processa_formulario.php" method="POST" id="formulario" name="formulario">

    <div class="page">
        <div class="quadrante">
    <h4 class="titulo">Cadastro de Corretor</h4>
            <div class="duo">
    <input type="text" name="cpf" class="cpf" placeholder="Digite seu CPF" required maxlength="11" minlength="11"></input>
    <input class="creci" name="creci" placeholder="Digite seu Creci" required  minlength="2"></input>
            </div>
        </div>
    </div>

<div class="final">
    <input type="text" name="nome" placeholder="Digite seu nome" required  minlength="2"></input>
    <button type="submit" class="botao" onclick="validar()">Enviar</button>
</div>
</form>
<div>
    <table class="table">
        <thead>
            <tr>
            <th>#</th>
            <th>CPF</th>
            <th class="crecith">Creci</th>
            <th>Nome</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $servidor= "localhost";
            $usuario = "root";
            $senha = "";
            $dbname = "projeto";
            
            $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
            $sql = "SELECT * FROM projeto ORDER BY id DESC";
            $result = $conn->query($sql);
            while($user_data = mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                echo "<td>".$user_data['id']."</td>";
                echo "<td>".$user_data['cpf']."</td>";
                echo "<td>".$user_data['creci']."</td>";
                echo "<td>".$user_data['nome']."</td>";
                echo "<td><a href='edit.php?id=".$user_data['id']."'><img src='edit.png' / class='img'></a></td>";
                echo "<td><a href='delete.php?id=".$user_data['id']."'><img src='delete.png' class='img'/></a></td>";
                echo "<tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>

</html>