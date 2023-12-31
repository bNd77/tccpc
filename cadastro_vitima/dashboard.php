<?php
session_start();
if (empty($_SESSION)) {
    print "<script>location:href='index.php'</script>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Tabela Bootstrap com dados do MySQL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <div class="container">
        <h1>Vitimas</h1>
        <a href="/tcc/admin/index.php"> <button type="submit" class="bi bi-box-arrow-left btn btn-danger"> Sair</button></a>


        <table class="table table-striped table-bordered table-group-divider">
            <thead>
                <tr>
                    <th>CPF</th>
                    <th>Nome</th>
                    <th>Nome do pai</th>
                    <th>Nome mae</th>
                    <th>Endereço</th>
                    <th>Escola</th>
                    <th>Ano</th>
                    <th>Data Nasc</th>
                    <th>Gênero</th>
                    <th>Opções</th>

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
                $sql = "SELECT * FROM vitima order by nome asc";
                $result = $conn->query($sql);

                // Verifica se existem registros retornados pela consulta
                if ($result->num_rows > 0) {
                    // Loop para exibir cada linha de dados
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["cpf"] . "</td>";
                        echo "<td class='text-capitalize'>" . $row["nome"] . "</td>";
                        echo "<td>" . $row["nome_pai"] . "</td>";
                        echo "<td>" . $row["nome_mae"] . "</td>";
                        echo "<td>" . $row["endereco"] . "</td>";
                        echo "<td>" . $row["escola"] . "</td>";
                        echo "<td>" . $row["escola"] . "</td>";
                        echo "<td>" . $row["data_nascimento"] . "</td>";
                        echo "<td>" . $row["genero"] . "</td>";
                        echo "<td> 
                    
                        <a class='btn btn-primary mr-5' type='submit' href='editar.php?id=" . $row["cpf"] . "''>
                        <i class='bi bi-pencil'></i>
                        
                        
                        </a>
                        <a class='btn btn-danger' href='excluir.php?id=" . $row["cpf"] . "''>
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