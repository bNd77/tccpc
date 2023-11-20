<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Processar os dados enviados

    // Conectar ao banco de dados
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "mydb";
    $conexao = mysqli_connect($host, $usuario, $senha, $banco);

    // Verificar se a conexão foi estabelecida com sucesso
    if (mysqli_connect_errno()) {
        echo "Falha na conexão com o MySQL: " . mysqli_connect_error();
        exit();
    }

    // Obter os dados do formulário
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $telefone = $_POST["telefone"];
    $sobre = $_POST["sobre"];

    // Atualizar os dados no banco de dados
    $query = "UPDATE conselheiro SET nome='$nome', email='$email', senha='$senha', telefone='$telefone', sobre='$sobre' WHERE id_conselheiro=$id";
    $resultado = mysqli_query($conexao, $query);

    // Verificar se a atualização foi bem-sucedida
    if ($resultado) {
        echo "Dados atualizados com sucesso!";
    } else {
        echo "Erro ao atualizar os dados: " . mysqli_error($conexao);
    }

    // Fechar a conexão com o banco de dados
    mysqli_close($conexao);
} else {
    // Formulário inicial de edição de dados

    // Conectar ao banco de dados
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "mydb";
    $conexao = mysqli_connect($host, $usuario, $senha, $banco);

    // Verificar se a conexão foi estabelecida com sucesso
    if (mysqli_connect_errno()) {
        echo "Falha na conexão com o MySQL: " . mysqli_connect_error();
        exit();
    }

    // Obter o ID do registro a ser editado
    $id = $_GET["id"];

    // Buscar os dados do registro no banco de dados
    $query = "SELECT * FROM conselheiro WHERE id_conselheiro='$id'";
    $resultado = mysqli_query($conexao, $query);

    // Verificar se o registro foi encontrado
    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_assoc($resultado);
        $nome = $row["nome"];
        $email = $row["email"];
        $senha = $row["senha"];
        $telefone = $row["telefone"];
        $sobre = $row["sobre"];
    } else {
        echo "Registro não encontrado.";
        exit();
    }

    // Fechar a conexão com o banco de dados
    mysqli_close($conexao);
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Editar Dados</title>
</head>

<body>
    
    <div class="container">
        <div class="form-image">
            <img src="assets/img//conselho-tutelar.jpg" alt="">
        </div>
        <div class="form">
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <div class="input-group">
            <div class="input-box">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" value="<?php echo $nome; ?>">
            </div>
        </div>
        <div class="input-box">
        <label for="email">Email:</label>
        <input type="text" name="email" value="<?php echo $email; ?>">
        </div>

        <div class="input-box">
        <label for="email">Senha:</label>
        <input type="text" name="senha" value="<?php echo $senha; ?>">
        </div>

        <div class="input-box">
        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" value="<?php echo $telefone; ?>">
        </div>

        <div class="input-box">
        <label for="sobre">Sobre:</label>
        <input type="text" name="sobre" id="sobre" value="<?php echo $sobre; ?>">
        </div>

        <div class="continue-button">
        <button type="submit" value="Atualizar"><a href="">atualizar</a></button>
        </div>
        
        <div class="continue-button">
        <button><a href="../form_login/dashbord.php">sair</a></button>
        </div>
    </form>
</body>

</html>