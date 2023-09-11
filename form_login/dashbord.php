<?php
session_start();
if (empty($_SESSION)) {
    print "<script>location:href='index.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <div class="container">
        <h1>Tabela Conselheiros Tutelares</h1>
        <a href="logout.php"> <button type="submit"  class="bi bi-box-arrow-left btn btn-danger"> Sair</button></a>
        <a href="../admin/index.php"> <button type="submit"  class="bi bi-arrow-return-left btn btn-warning"> Voltar</button></a>
        <a href="../form_conselheiro/index.php"> <button type="submit"  class="bi bi-person-fill-add btn btn-primary"> Adicionar</button></a>
        
                      
        
        <br>
        <table class="table table-striped table-bordered table-group-divider">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Opcoes</th>

                </tr>
            </thead>
            <tbody>
                <?php
                // Configurações do banco de dados
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "mydb";

                // Conexão com o banco de dados
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Verifica se a conexão foi estabelecida com sucesso
                if ($conn->connect_error) {
                    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
                }

                // Consulta SQL para obter os dados da tabela
                $sql = "SELECT * FROM conselheiro";
                $result = $conn->query($sql);

                // Verifica se existem registros retornados pela consulta
                if ($result->num_rows > 0) {
                    // Loop para exibir cada linha de dados
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id_conselheiro"] . "</td>";
                        echo "<td class='text-capitalize'>" . $row["nome"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["telefone"] . "</td>";
                        echo "<td> 
                    
                        <a class='btn btn-primary mr-5' type='submit' href='editar.php?id=" . $row["id_conselheiro"] . "''>
                        <i class='bi bi-pencil'></i>
                        
                        
                        </a>
                        <a class='btn btn-danger' href='excluir.php?id=" . $row["id_conselheiro"] . "''>
                        <i class='bi bi-trash'></i>
                        </a>

                        

</td>";


                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>Nenhum registro encontrado.</td></tr>";
                }

                // Fecha a conexão com o banco de dados
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>