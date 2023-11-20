<!DOCTYPE html>
<html>
<head>
    <title>Tabela Listagem de Motivos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
        <h1>Motivos</h1>
       
                        <button><a href="/tcc/admin/index.php" class="bi bi-box-arrow-left btn btn-danger">Sair</a></button>
                    
        <table class="table table-striped table-bordered table-group-divider">
            <thead>
                <tr>
                    <th>Nome</th>   
                    <th>Opcões</th>
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
                $sql = "SELECT * FROM motivo"; 
                $result = $conn->query($sql);

                // Verifica se existem registros retornados pela consulta
                if ($result->num_rows > 0) {
                    // Loop para exibir cada linha de dados
                    while ($row = $result->fetch_assoc()) {
                        echo "<t>";
                        echo "<td>" . $row["nome"] . "</td>";
                       

                    
                    
                        echo "<td>
                    
                        <a class='btn btn-primary mr-5' type='submit' href='editar.php?id=" . $row["id_motivo"] . "''>
                        <i class='bi bi-pencil'></i>
                        
                        
                        </a>
                        <a class='btn btn-danger' href='excluir.php?id=" . $row["id_motivo"] . "''>
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
    </div>
</body>
</html>