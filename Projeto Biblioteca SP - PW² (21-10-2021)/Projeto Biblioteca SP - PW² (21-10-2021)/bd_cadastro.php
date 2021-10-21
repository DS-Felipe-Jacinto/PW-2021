<?php
     
     //Executa a conexão com o banco
     require "bd_conectar.php";

     //Recupera os dados dos campos
     $nome = $_POST['nome_usuario'];
     $email = $_POST['email_usuario'];
     $senha = $_POST['senha_usuario'];

     //Insere os dados do banco
     $sql = mysqli_query($conectar, "INSERT INTO tbl_cadastro_usuario VALUES ('', '".$nome."', '".$email."', '".$senha."')");

         //Se os dados forem inseridos com sucesso
         if ($sql){
            header("Location: form_login.html");
         	echo '<script>alert("Cadastrado com sucesso!");</script>';
         }else{
         	echo '<script>alert("Usuário já cadastrado!");</script>';
         }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        Inserindo Dados
    </title>
</head>
    <body>
        <?php
        include("form_cadastro.html");
        ?>
    </body>
</html>