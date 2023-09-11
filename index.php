<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SISTEMA DE DENUNCIAS ONLINE</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.jpg" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!--  Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- alerta-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>

<body id="page-top">
    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#inicio">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#informacoes">Informaçôes</a></li>
                    <li class="nav-item"><a class="nav-link" href="#formulario">Denúncie já</a></li>
                    <li class="nav-item"><a class="nav-link" href="#conselheiro">Conselheiros</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contatos">Contatos</a></li>
                    <li class="nav-item"><a class="nav-link" href="/tcc/form_login/index.php">Area Administrativa</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Inicio-->
    <header class="masthead" id="inicio">
        <div class="container">
            <div class="masthead-subheading">Bem-vindo ao Sistema de denuncias online do Conselho Tutelar de</div>
            <div class="masthead-heading text-uppercase">São Borja</div>
            <a class="btn btn-danger btn-xl text-uppercase" href="#formulario">denuncie já</a>
        </div>
    </header>
    <!-- Informaçoes-->
    <section class="page-section" id="informacoes">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Conselho Tutelar</h2>
                <h3 class="section-subheading text-muted">Informaçôes</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-solid fa-question fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Como surgiu?</h4>
                    <p class="text-muted">Os conselhos tutelares foram criados em 1990, com a publicação do Estatuto da Criança e do Adolescente (ECA), para desempenhar uma função estratégica: zelar pelo cumprimento dos direitos da criança e do adolescente.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fas fa-solid fa-info  fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">O que é o Conselho Tutelar?</h4>
                    <p class="text-muted">Segundo o art 131 do ECA(Estatuto da Criança e Adolescente) "O Conselho Tutelar é órgão permanente e autônomo, não
                        jurisdicional, encarregado pela sociedade de zelar pelo cumprimento dos direitos da
                        criança e do adolescente, definidos nesta Lei".</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-solid fa-users fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Como atua?</h4>
                    <p class="text-muted">Atende situações envolvendo crianças, adolescentes, famílias e comunidade em geral, no que tange qualquer direito violado. Exerce as funções de escutar, orientar, aconselhar, encaminhar e acompanhar os casos. Aplica as medidas protetivas pertinentes a cada caso.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Formulario -->
    <section class="page-section" id="formulario">

        <div class="container text-center">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Área de denúncia</h2>
                <h3 class="section-subheading text-muted">Somente o tipo de denúncia é obrigatorio, os outros são opcionais</h3>
                <form action="./cadastro_denuncias/cadastro_denuncias.php" method="POST">
                    <div class="row">
                        <div class="col">
                            <label for="inputEmail4" class="form-label">Nome da Vitima</label>
                            <input type="text" class="form-control" id="nome_vitima" name="nome_vitima" placeholder="Ex: Luizinho Soares">
                        </div>
                        <div class="col">
                            <label for="nome_pai" class="form-label">Nome do Pai</label>
                            <input type="text" class="form-control" id="nome_pai" name="nome_pai" placeholder="Ex: Joãozinho Soares">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="nome_mae" class="form-label">Nome da Mãe</label>
                            <input type="text" class="form-control" id="nome_mae" name="nome_mae" placeholder="Ex: Luluzinha Soares">
                        </div>
                        <div class="col">
                            <label for="endereco" class="form-label">Endereço da Vitima</label>
                            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Ex: Rua dos Bobos numero: 0">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="escola_vitima" class="form-label">Escola da Vitima</label>
                            <input type="text" class="form-control" id="escola_vitima" name="escola_vitima" placeholder="Ex: Escola da dell">
                        </div>
                        <div class="col">
                            <label for="idade" class="form-label">Idade</label>
                            <input type="text" class="form-control" id="idade" name="idade" placeholder="Ex: 11">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="motivo" class="form-label">Tipo da Denuncia</label>
                            <select id="motivo" name="motivo" class="form-select">
                                <option selected>Selecione</option>
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

                                ?>

                                        <option value="<?php echo  $row["id_motivo"]; ?>"><?php echo  $row["nome"]; ?></option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col">
                            <label for="inputState" class="form-label">Genero</label>

                            <select id="genero" name="genero" class="form-select">
                                <option selected>Selecione</option>
                                <option value="M">Masculino/Menino</option>
                                <option value="F">Feminino/Menina</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="relato" class="form-label">Relato</label>
                            <textarea class="form-control" id="relato" name="relato" placeholder="Descrever a situação Ex: A criança esta sendo abusada sexualmente pelo pai" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Enviar Denúnia</button>
                    </div>

            </div>
            </form>
        </div>
    </section>
    </div>
    </div>
    </div>
    <!-- Conselheiros-->
    <section class="page-section bg-light" id="conselheiro">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Quem são os conselheiros do mandato 2020/24</h2>
                <h3 class="section-subheading text-muted">Seus meios de Contatos</h3>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/usuario.png" alt="..." />
                        <h4>Nome</h4>
                        <p class="text-muted">Sobre mim:</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/usuario.png" alt="..." />
                        <h4>nome</h4>
                        <p class="text-muted">Sobre mim:</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/usuario.png" alt="..." />
                        <h4>nome </h4>
                        <p class="text-muted">Alguma info a mais</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <p class="large text-muted"></p>
                    </div>
                </div>
            </div>
    </section>
    <!-- Footer-->

    <section id="contatos" class="contatos">
        <div class="container">

            <div class="text-center">
                <h2 class="section-heading text-uppercase">Conselho Tutelar de São Borja</h2>

            </div>
            <div>
                <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d343.29695412040275!2d-56.00791192722841!3d-28.65068154211011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9455c6373455839f%3A0x5f71962ca8e78dbf!2sR.%20Gen.%20Marques%2C%2087%20-%20Centro%2C%20S%C3%A3o%20Borja%20-%20RS%2C%2097670-000!5e0!3m2!1spt-BR!2sbr!4v1692623874639!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="row mt-5">

                <div class="col-lg-4" data-aos="fade-right">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Localização:</h4>
                            <p>Rua General Marques, 87 - Centro</p>
                        </div>

                        <a class="btn btn-dark btn-social mx-2" href="mailto:sbconselhotutelar@gmail.com" aria-label="email CT"><i class="bi bi-envelope-at"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/people/Conselho-Tutelar-de-S%C3%A3o-Borja/100064533679136/?paipv=0&eav=AfYQfhUs6cojnGPhUgWjg0HzHL6EDgUvGG17jqwM93tljfHMQYazwEvA98E4EjwP3e0&_rdr" aria-label="Facebook CT"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://instagram.com/sbconselhotutelar?igshid=MzRlODBiNWFlZA==" aria-label="Ig CT"><i class="bi bi-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://wa.me/555599863968" aria-label="Whatsapp CT"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Bernardo Gomes Dorneles 2023</span>
                    </div>
                </div>
            </footer>
                

                <!-- Bootstrap core JS-->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
                <!-- Core theme JS-->
                <script src="js/scripts.js"></script>
                <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
                <!-- * *                               SB Forms JS                               * *-->
                <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
                <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
                <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
                <?php if (!isset($_GET['e'])) {
                } else if ($_GET['e'] == md5(1)) {
                ?>
                    <script>
                        Swal.fire({
                            title: 'Sucesso',
                            text: "Sua denúncia anônima foi realizada com sucesso!",
                            icon: 'success',

                        }).then((result) => {
                            window.location.href = "index.php";
                        })
                    </script>
                <?php } ?>
</body>

</html>