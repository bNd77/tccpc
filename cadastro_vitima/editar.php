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
    $cpf = $_POST["cpf"];
    $nome = $_POST["nome"];
    $nome_pai = $_POST["nome_pai"];
    $nome_mae = $_POST["nome_mae"];
    $endereco = $_POST["endereco"];
    $escola = $_POST["escola"];
    $ano = $_POST["ano"];
    $data_nascimento = $_POST["data_nascimento"];
    $genero = $_POST["genero"];

    // Atualizar os dados no banco de dados
    $query = "UPDATE vitima SET cpf='$cpf' , nome='$nome', nome_pai='$nome_pai', nome_mae='$nome_mae', 
    endereco='$endereco', escola='$escola', ano='$ano', data_nascimento='$data_nascimento', genero='$genero' WHERE id_vitima=$id";
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
    $cpf = $_GET["cpf"];

    // Buscar os dados do registro no banco de dados
    $query = "SELECT * FROM vitima  WHERE cpf='$cpf'";
    $resultado = mysqli_query($conexao, $query);

    // Verificar se o registro foi encontrado
    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_assoc($resultado);
        $cpf = $row["cpf"];
        $nome = $row["nome"];
        $nome_pai = $row["nome_pai"];
        $nome_mae = $row["nome_mae"];
        $endereco = $row["endereco"];
        $escola = $row["escola"];
        $ano = $row["ano"];
        $data_nascimento = $row["data_nascimento"];
        $genero = $row["genero"];
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

                <div class="input-group">
                    <div class="input-box">
                        <label for="cpf">cpf:</label>
                        <input type="cpf" name="cpf" value="<?php echo $cpf; ?>">
                    </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" value="<?php echo $nome; ?>">
                    </div>
                </div>
                <div class="input-box">
                    <label for="nome_pai">Pai:</label>
                    <input type="text" name="nome_pai" value="<?php echo $nome_pai; ?>">
                </div>

                <div class="input-box">
                    <label for="nome_mae">Mãe:</label>
                    <input type="text" name="nome_mae" value="<?php echo $nome_mae; ?>">
                </div>

                <div class="input-box">
                    <label for="endereco">Endereço:</label>
                    <input type="text" name="endereco" id="endereco" value="<?php echo $endereco; ?>">
                </div>
                <div class="input-box">
                    <label for="escola">Escola:</label>
                    <input type="text" name="escola" id="escola" value="<?php echo $escola; ?>">
                </div>
                <div class="input-box">
                    <label for="telefone">Ano:</label>
                    <input type="ano" name="ano" id="ano" value="<?php echo $ano; ?>">
                </div>

                <div class="input-box">
                    <label for="data_nascimento">Data de Nascimento:</label>
                    <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $data_nascimento; ?>">
                </div>

                <div class="input-box">
                    <label for="genero">Telefone:</label>
                    <input type="text" name="genero" id="genero" value="<?php echo $genero; ?>">
                </div>


                <div class="continue-button">
                    <button type="submit" value="Atualizar"><a href="">atualizar</a></button>
                </div>

                <div class="continue-button">
                    <button><a href="dashboard.php">Voltar</a></button>
                </div>
            </form>
</body>

</html>