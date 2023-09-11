<?php


    // Obtém o ID do usuário a ser excluído
    $idUsuario = $_GET["id"];

   include_once "../conexao.php";

    // Executa a consulta para excluir o usuário
    $sql = "DELETE FROM vitima WHERE id_vitima = $idUsuario";
    $resultado = $conn->query($sql);

    // Verifica se a exclusão foi bem-sucedida
    if ($resultado) {
        // A exclusão foi bem-sucedida
        echo "Usuário excluído com sucesso!";
    } else {
        // A exclusão falhou
        echo "Erro ao excluir o usuário: " . $conn->error;
    }

    // Fecha a conexão com o banco de dados
    $conn->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<button><a href="dashboard.php">sair</a></button>
    
</body>
</html>