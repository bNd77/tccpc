<?php
   include "../conexao.php";

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = md5 ($_POST['senha']);
    $telefone = $_POST['telefone'];
    $foto = $_POST['foto'];
    $sobre = $_POST['sobre'];
    $mandato = $_POST['mandato'];

     $sql = "INSERT INTO `conselheiro`( `nome`, `email`, `senha`, `telefone`, `foto`, `sobre`, `mandato`) 
     VALUES ('$nome','$email','$senha','$telefone','$foto','$sobre','$mandato')";

     if (mysqli_query($conn, $sql)) {
        header("location: ../form_login/index.php");
     } else
     echo "$nome NÃO foi cadastrado";

    ?>
</body>
</html>