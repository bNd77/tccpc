<?php
session_start();
if(empty($_POST) or (empty($_POST["email"]) or (empty($_POST['senha'])))){


print"<script>location.href=index.php</script>";
}
include('config.php');

$email = $_POST["email"];
$senha = md5($_POST["senha"]);

$sql = "SELECT * FROM conselheiro
        WHERE email = '$email'
        AND senha = '$senha'";

$res =$conn->query($sql) or die($conn->error);

$row = $res->fetch_object();

$qtd = $res->num_rows;

if($qtd > 0){
    $_SESSION["email"] = $email;
    $_SESSION["nome"] = $row->nome;
    $_SESSION["id_conselheiro"] = $row->id_conselheiro;

print"<script>location.href='/tcc/admin/index.php';</script>";
}else{
    print"<script>alert('Usuario e/ou senha incorreto(s)');</script>";
    print"<script>location.href='index.php';</script>";
}

?>

