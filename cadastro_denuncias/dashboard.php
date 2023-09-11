<!DOCTYPE html>
<html>
<head>
    <title>Tabela Bootstrap com dados do MySQL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="assets/favicon.jpg" />
    
</head>
<body>
    <div class="container">
        <h1>Dashboard Denuncias</h1>
      
                        <button><a href="/tcc/admin/index.php" class="bi bi-box-arrow-left btn btn-danger"> Sair</a></button>
                    
                    
        <table class="table table-striped table-bordered table-group-divider">
            <thead>
                <tr>
                    <th>id</th>
                    <th>nome vitima</th>
                    <th>nome do pai</th>	
                    <th>nome mae</th>	
                    <th>endereço</th>	
                    <th>escola</th>	
                    <th>idade</th>	
                    <th>genero</th>	
                    <th>relato</th>
                    <th>id_motivo</th>
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
                $sql = "SELECT * , motivo.nome as nome_motivo
                FROM denuncia
                INNER JOIN motivo
                ON denuncia.motivo_id_motivo = motivo.id_motivo"; 
                $result = $conn->query($sql);

                // Verifica se existem registros retornados pela consulta
                if ($result->num_rows > 0) {
                    // Loop para exibir cada linha de dados
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id_denuncia"] . "</td>";
                        echo "<td>" . $row["nome_vitima"] . "</td>";
                        echo "<td>" . $row["nome_pai_vitima"] . "</td>";
                        echo "<td>" . $row["nome_mae_vitima"] . "</td>";
                        echo "<td>" . $row["endereco_vitima"] . "</td>";
                        echo "<td>" . $row["escola_vitima"] . "</td>";
                        echo "<td>" . $row["idade_vitima"] . "</td>";
	                    echo "<td>" . $row["genero_vitima"] . "</td>";
                        echo "<td>" . $row["relato"] . "</td>";
                        echo "<td>" . $row["nome_motivo"] . "</td>";
                        echo "<td> 
                    
                        
                        
                        
                        </a>
                        <a class='btn btn-danger' href='excluir.php?id=" . $row["id_denuncia"] . "''>
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
