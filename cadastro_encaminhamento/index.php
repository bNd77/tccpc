

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Adicionando um Motivo</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="assets/img/conselho-tutelar.jpg" alt="">
        </div>
        <div class="form">
            <form action="cadastro_encaminhamento.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Adicionar Encaminhamento</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="/tcc/admin/index.php" class="bi bi-box-arrow-left btn btn-danger">Sair</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="">Data</label>
                        <input id="data" type="datetime-local" name="data">
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="">Texto</label>
                        <textarea id="texto" name="texto"></textarea>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="mp">Medida Protetiva</label>
                        <select id="mp" name="mp">
                            <option selected>Escolher MP...</option>
                            <?php
                                $host = "localhost";
                                $usuario = "root";
                                $senha = "";
                                $banco = "mydb";
                                $conexao = mysqli_connect($host, $usuario, $senha, $banco);

                                $selmp = mysqli_query($conexao,"SELECT * FROM medida_protetiva");
                                while ($mp = mysqli_fetch_array($selmp)) { ?>
                                    <option value="<?php echo $mp['id_medida']; ?>"><?php echo $mp['nome'] ?></option>
                                <?php } ?>
                            ?>
                        </select>
                    </div>
                </div>
                <div class="continue-button">
                    <button type="submit"><a>Continuar</a> </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>




