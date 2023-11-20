<?php
session_start();
if (empty($_SESSION)) {
    print "<script>location:href='index.php'</script>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Tabela relatorio de medidas tomadas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <div class="container">
    <img src="conselho.png" alt="ctimg">
        <h1>Medida Protetiva tomadas</h1>
        
        <a href="/tcc/admin/index.php"> 
            <button type="submit" class="bi bi-box-arrow-left btn btn-danger"> Sair</button>
        </a>
        <button class="btn btn-primary" onclick="printContent()">Imprimir</button>
    <script>
        function printContent() {
        // Aciona a função de impressão quando o botão é clicado
        window.print();
    }
</script>


        <table class="table table-striped table-bordered table-group-divider">
            <thead>
                <tr>
                    <th>Medida tomada</th>
                    <th>Quantidade</th>
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
                $sql = "SELECT medida_protetiva.nome as nome, COUNT(*) as total_casos FROM encaminhamento INNER JOIN medida_protetiva ON encaminhamento.medida_protetiva_id_medida = medida_protetiva.id_medida GROUP BY(medida_protetiva_id_medida);";
                $result = $conn->query($sql);

                // Verifica se existem registros retornados pela consulta
                if ($result->num_rows > 0) {
                    // Loop para exibir cada linha de dados
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["nome"] . "</td>";
                        echo "<td>" . $row["total_casos"] . "</td>";
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