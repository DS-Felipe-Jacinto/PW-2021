<?php
     
     //Executa a conexão com o banco
     require "bd_conectar.php";

     //Recupera os dados dos campos
     $nomelivro = $_POST['nome_livro'];
     $autor = $_POST['autor_livro'];
     $nome = $_POST['nome_usuario'];
     $email = $_POST['email_usuario'];
     $mensagem = $_POST['mensagem_usuario'];

     //Insere os dados do banco
     $sql = mysqli_query($conectar, "INSERT INTO tbl_indicar_livro VALUES ('', '".$nomelivro."', '".$autor."', '".$nome."', '".$email."', '".$mensagem."')");

         //Se os dados forem inseridos com sucesso
         if ($sql){
            header("Location: categoria.php");
          echo '<script>alert("Livro indicado com sucesso!");</script>';
         }else{
          echo '<script>alert("Veja se você inseriu as informações corretas!");</script>';
         }
?>
