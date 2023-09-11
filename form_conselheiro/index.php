<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Formulário de Cadastro de Conselheiro</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="assets/img//conselho-tutelar.jpg" alt="">
        </div>
        <div class="form">
            <form action="cadastro_conselheiro.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastro de Conselheiro</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="../form_login/index.php">Entrar</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="">Nome</label>
                        <input id="nome" type="text" name="nome" placeholder="Digite seu Nome" required>
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input id="telefone" type="telefone" name="telefone" placeholder="(xx) xxxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="senha" type="password" name="senha" placeholder="Digite sua Senha" required>
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