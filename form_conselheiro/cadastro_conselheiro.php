<?php
   include "../conexao.php";

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = md5 ($_POST['senha']);
    $telefone = $_POST['telefone'];

     $sql = "INSERT INTO `conselheiro`( `nome`, `email`, `senha`, `telefone`) 
     VALUES ('$nome','$email','$senha','$telefone')";

     if (mysqli_query($conn, $sql)) {
        header("location: ../form_login/index.php");
     } else
     echo "$nome NÃO foi cadastrado";

    ?>
</body>
</html>