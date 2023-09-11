<!--O que temos nesse arquivo:
Este arquivo contem os elementos do menu, separados do restante do código-->

<nav id="sidebar" class="active">
    <div class="p-4 pt-2">
        <div class="sidebar-header">
            <img src="conselho-tutelar.jpg" class="img-fluid" alt="Logomarca">
        </div>

        <button><a href="../index.php" class="bi bi-box-arrow-left btn btn-danger"> Sair</a></button>

        <ul class="list-unstyled components md-5">
            <li class="active">
                <a href="#users" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">
                    <i class="fas fa-users"></i> Conselheiro
                </a>
                <ul class="collapse list-unstyled" id="users">
                    <li><a href="/tcc/form_login/dashbord.php">Minha Conta</a></li>
                </ul>
            </li>
            <li class="active">
                <a href="#denuncias" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed ">
                    <i class="fas fa-exclamation-triangle"></i> Denúncias
                </a>
                <ul class="collapse list-unstyled" id="denuncias">
                    <li><a href="../cadastro_denuncias/dashboard.php">Gerenciar </a></li>

                </ul>
            </li>
            <li class="active">
                <a href="#motivos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed ">
                    <i class="fas fa-solid fa-pen"></i> Motivos
                </a>
                <ul class="collapse list-unstyled" id="motivos">
                    <li><a href="../cadastro_motivo/index.html">Novo </a></li>

                    <li><a href="../cadastro_motivo/dashboard.php">Gerenciar </a></li>
                </ul>
            </li>
            <li class="active">
                <a href="#vitima" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed ">
                    <i class="fas fa-solid fa-child"></i> Vitimas
                </a>
                <ul class="collapse list-unstyled" id="vitima">
                    <li><a href="../cadastro_vitima/index.html">Novo </a></li>
                    <li><a href="../cadastro_vitima/dashboard.php"> Gerenciar </a></li>
                </ul>
            </li>
            <li class="active">
                <a href="#medida_protetiva" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed ">
                    <i class="fas fa-solid fa-lock"></i> Medida Protetivas
                </a>
                <ul class="collapse list-unstyled" id="medida_protetiva">
                    <li><a href="../cadastro_medidas_protetiva/index.html">Novo </a></li>
                    <li><a href="../cadastro_medidas_protetiva/dashbord.php">Gerenciar </a></li>
                </ul>
            </li>
            <li class="active">
                <a href="#ct" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed ">
                    <i class="fas fa-solid fa-house-user"></i> CT
                </a>
                <ul class="collapse list-unstyled" id="ct">
                    <li><a href="#">Novo </a></li>
                    <li><a href="#">Gerenciar </a></li>
                </ul>
            </li>
            <li class="active">
                <a href="#encaminhamentos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">
                    <i class="fas fa-share"></i> Encaminhamentos
                </a>
                <ul class="collapse list-unstyled" id="encaminhamentos">
                    <li><a href="#">Novo </a></li>
                    <li><a href="#">Gerenciar </a></li>
                </ul>
            </li>
            <li class="active">
                <a href="#relatorios" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-chart-bar"></i> Relatórios
                </a>
                <ul class="collapse list-unstyled" id="relatorios">
                    <li><a href="#">Chamados por conselheiro</a></li>
                    <li><a href="#">Denúncias por tipo</a></li>
                    <li><a href="#">Total de chamados por período do ano</a></li>
                    <li><a href="#">Denúncias por vitima</a></li>
                    <li><a href="#">Denúncias por genero</a></li>
                    <li><a href="#">Denúncias por faixa etaria</a></li>
                    <li><a href="#">Chamados por encaminhamentos</a></li>

                </ul>
            </li>
        </ul>
    </div>
</nav>