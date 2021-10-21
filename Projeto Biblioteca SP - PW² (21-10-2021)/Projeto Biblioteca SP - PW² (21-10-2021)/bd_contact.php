<?php 

    //Executa a conexão com o bando
    require "bd_conectar.php";

    //O usuario e senha digitados são colocados e suas respectvas váriaveis 
    $nome = $_POST["nome_usuario"];
    $email = $_POST["email_usuario"];
    $mensagem = $_POST["mensagem_usuario"];

    //Insere os dados do banco
    $sql = mysqli_query($conectar, "INSERT INTO tbl_feedback VALUES ('', '".$nome."', '".$email."', '".$mensagem."')");
    
    //Se os dados forem inseridos com sucesso
    if ($sql){
    require "contact_principal.php";
    header("Location: contact_principal.php");
    echo '<script>alert("Enviado com sucesso!");</script>';
    }else{
   	echo '<script>alert("Ocorreu um erro!");</script>';
    }
   
    //Encerra a conexão
    require "bd_desconectar.php";
?>