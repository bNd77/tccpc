<?php
   include "../conexao.php";

    echo $data = $_POST['data'];
    echo $texto = $_POST['texto'];
    echo $mp = $_POST['mp'];

    $sql = "INSERT INTO `encaminhamento`( `data_encaminhamento`, `observacoes`, `medida_protetiva_id_medida`) 
     VALUES ('$data', '$texto', '$mp')";

     
     if (mysqli_query($conn, $sql)) {
        header("location: ../index.php");
     } else{
     echo "$nome NÃO foi cadastrado";
     }
    ?>
</body>
</html>