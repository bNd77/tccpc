<?php
   include "../conexao.php";

   $cpf = $_POST['cpf'];
   $nome = $_POST['nome'];
   $nome_pai = $_POST['nome_pai'];
   $nome_mae = $_POST['nome_mae'];
   $endereco = $_POST['endereco'];
   $escola = $_POST['escola'];
   $ano = $_POST['ano'];
   $data_nascimento = $_POST['data_nascimento'];
   $genero = $_POST['genero'];
   
   


    $sql = "INSERT INTO `vitima`( `cpf`, `nome`,`nome_pai`,`nome_mae`,`endereco`,`escola`,`ano`,`data_nascimento`, `genero`) 
     VALUES ('$cpf', '$nome', '$nome_pai', '$nome_mae', '$endereco', '$escola', '$ano', '$data_nascimento', '$genero')";

     if (mysqli_query($conn, $sql)) {
        header("location: ../index.php");
     } else{
     echo "$cpf NÃO foi cadastrado";
     }
    ?>
</body>
</html>