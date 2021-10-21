<?php
      //Verifica se o usuario digitado é nullo
      if ($_POST["email_usuario"] == null) {

	  //Usuário e enviado de volta ao formulario
	  header("Location: form_login.html");
      }
      else{

      	//O usuario e senha digitados são colocados e suas respectvas váriaveis 
      	$UsuarioDigitado = $_POST["email_usuario"];
      	$SenhaDigitada = $_POST["senha_usuario"];
      }

      //Executa a conexão com o bando
      require "bd_conectar.php";

      //Faz uma consulta a tbl_usuario e retorna a linha que contem o usuario digitado
      $strSQL = "SELECT email_usuario, senha_usuario FROM tbl_cadastro_usuario where email_usuario = '$UsuarioDigitado'";

      //Execura a consulta(query) a váriavel $consulta contém o resultado da consulta
      $consulta = mysqli_query($conectar, $strSQL);

      //Loop pelo resultado da $consulta
      //Cada linha vai para um array ($row) usando mysql_fetch_array
      //O usuario e senha encontardos no BD são armazenadas nas novas variáveis
      while($linha = mysqli_fetch_array($consulta)){
      	$UsuarioBD = $linha['email_usuario'];
      	$SenhaBD = $linha['senha_usuario'];
      }

      //Encerra a conexão
      require "bd_desconectar.php";

      //Veriifica usuario e senha
      if ($UsuarioDigitado == $UsuarioBD && $SenhaDigitada == $SenhaBD) {

      	//Se estiver correto a sessão fica yes
      	session_start();
      	$_SESSION["Login"] = "SIM";
        header("Location: index_principal.php");
      	echo '<script>alert("Seja bem-vindo(a)");</script>';
      }

      else{
      	//Se estiver errado fica NO
        session_start();
      	$_SESSION["Login"] = "NÃO";
      	echo '<script>alert("Verifique se seu E-mail e sua senha estão corretos!");</script>'; 
      }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        
    </title>
</head>
    <body>
        <?php
        include("form_login.html");
        ?>
    </body>
</html>