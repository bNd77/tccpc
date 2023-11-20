<?php
   include "../conexao.php";

    echo $nome = $_POST['nome'];
   


    $sql = "INSERT INTO `motivo`( `nome`) 
     VALUES ('$nome')";

     if (mysqli_query($conn, $sql)) {
        header("location: ../index.php");
     } else{
     echo "$nome NÃO foi cadastrado";
     }
    ?>
</body>
</html>