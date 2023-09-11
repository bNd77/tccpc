<?php
   include "../conexao.php";

    $nome_vitima = $_POST['nome_vitima'];
    $nome_pai = $_POST['nome_pai'];
    $nome_mae = $_POST['nome_mae'];
    $endereco = $_POST['endereco'];
    $escola_vitima = $_POST['escola_vitima'];
    $idade = $_POST['idade'];
    $genero = $_POST['genero'];
    $motivo = $_POST['motivo'];
    $relato = $_POST['relato'];


     $sql = "INSERT INTO `denuncia`(`nome_vitima`,`nome_pai_vitima`,`nome_mae_vitima`,
    `endereco_vitima`,`escola_vitima`,`idade_vitima`,`genero_vitima`,`motivo_id_motivo`,`relato`) 
     VALUES ('$nome_vitima','$nome_pai','$nome_mae','$endereco','$escola_vitima','$idade','$genero', '$motivo','$relato')";

     if (mysqli_query($conn, $sql)) {
        header("location: ../index.php?e=c4ca4238a0b923820dcc509a6f75849b");
     } else{
     echo "$nome NÃO foi cadastrado";
     }
    ?>
</body>
</html>