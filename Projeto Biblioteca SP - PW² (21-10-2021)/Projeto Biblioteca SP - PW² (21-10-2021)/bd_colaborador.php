<?php
     
     //Executa a conexão com o banco
     require "bd_conectar.php";

     //Recupera os dados dos campos
     $nome = $_POST['nome_colaborador'];
     $email = $_POST['email_colaborador'];
     $telefone = $_POST['telefone_colaborador'];
     $cnpj = $_POST['cnpj_colaborador'];
     $mensagem = $_POST['mensagem_colaborador'];

     //Insere os dados do banco
     $sql = mysqli_query($conectar, "INSERT INTO tbl_colaborador VALUES ('', '".$nome."', '".$email."', '".$telefone."', '".$cnpj."', '".$mensagem."')");

     require "bd_desconectar.php";
     
     require "colaborador.php";
     
     //Se os dados forem inseridos com sucesso
     if ($sql){
             echo '<script>alert("Parabéns, você entrou para nossa equipe de colaboradores!");</script>';
     }else{
             echo '<script>alert("Veja se você inseriu as informações corretas!");</script>';
     }
?>