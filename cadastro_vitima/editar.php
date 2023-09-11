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
    $cpf = $_POST["cpf"];
    $nome = $_POST["nome"];
    $nome_pai = $_POST["nome_pai"];
    $nome_mae = $POST["nome_mae"];
    $endereco = $_POST["endereco"];
    $escola = $_POST["escola"];
    $ano = $_POST["ano"];
    $data_nascimento = $_POST["data_nascimento"];
    $genero = $_POST["genero"];

    // Atualizar os dados no banco de dados
    $query = "UPDATE vitima SET cpf='$cpf', nome='$nome', nome_pai='$nome_pai', nome_mae='$nome_mae', 
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
    $id = $_GET["id"];

    // Buscar os dados do registro no banco de dados
    $query = "SELECT * FROM vitima  WHERE id_vitima='$id'";
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

              <input type="hidden" name="id" value="<?php echo $id; ?>">

              <div class="input-group">
                    <div class="input-box">
                        <label for="">Cpf</label>
                        <input id="cpf" type="text" name="cpf" value="<?php echo $cpf; ?>">
                    </div>

                    <div class="input-box">
                        <label for="">Nome</label>
                        <input id="nome" type="text" name="nome"<?php echo $nome; ?> >
                    </div>
                    <div class="input-box">
                        <label for="">Nome do Pai</label>
                        <input id="nome_pai" type="text" name="nome_pai" <?php echo $nome_pai; ?>>
                    </div>
                    <div class="input-box">
                        <label for="">Nome da Mãe</label>
                        <input id="nome_mae" type="text" name="nome_mae" <?php echo $nome_mae; ?>>
                    </div>

                    <div class="input-box">
                        <label for="">Endereço</label>
                        <input id="endereco" type="endereco" name="endereco" value="<?php echo $endereco; ?>" >
                    </div>

                    <div class="input-box">
                        <label for="">Escola</label>
                        <input id="escola" type="escola" name="escola" value="<?php echo $escola; ?>" >
                    </div>

                    <div class="input-box">
                        <label for="">ano</label>
                        <input id="ano" type="text" name="ano" value="<?php echo $ano; ?>">
                    </div>

                    <div class="input-box">
                        <label for="">Data de Nascimento</label>
                        <input id="data_nascimento" type="date" name="data_nascimento" value="<?php echo $data_nascimento; ?>">
                    </div>
                    
                    <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input id="genero" type="radio" name="genero" value="F">
                            <label for="F">Feminino</label>
                        </div>
                        <div class="gender-input">
                            <input id="genero" type="radio" name="genero" value="M">
                            <label for="M">Masculino</label>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        
                <div class="continue-button">
                    <button type="submit"><a>Salvar dados</a> </button>
                </div>
                <div class="continue-button">
                    <button><a href="dashboard.php">sair</a></button>
                </div>
            </form>
</body>

</html>