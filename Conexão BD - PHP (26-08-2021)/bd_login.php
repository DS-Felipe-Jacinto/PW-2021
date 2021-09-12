<?php 
		// Verifica se usuário digitado é nulo
		if ($_POST["NomeDoUsuario"] == null) {
			// Usuário é enviado de volta ao formulário
			header("Location: bd_form_login.html");
		} else {
			// O usuário e senha digitados são colocados em suas respectivas variáveis
			$UsuarioDigitado = $_POST["NomeDoUsuario"];
			$SenhaDigitada = $_POST["SenhaDoUsuario"];
		}

	// Executa a conexão com o banco
	require  "bd_conectar.php";

	// Faz uma consulta a tbl_usuario e retorna a linha que contém o usuário digitado
	$strSQL = "SELECT EmailDoUsuario, SenhaDoUsuario FROM tbl_usuario WHERE EmailDoUsuario = '$UsuarioDigitado'";

	// Executa uma consulta(query) à variável $consulta contém o resultado da consulta	
	$consulta = mysqli_query($conexao, $strSQL);

	// Loop pelo resultado da consulta
	// Cada linha vai para um array ($row) usando mysqli_fetch_array
	// O usuário e senha encontrados no BD são armazenados nas novas variáveis
	while ($linha = mysqli_fetch_array($consulta)) {
		$UsuarioBD = $linha['EmailDoUsuario'];
		$SenhaBD = $linha['SenhaDoUsuario'];
	}

	// Encerra a conexão
	require "bd_desconectar.php";

	// Verifica usuário e senha
	if ($UsuarioDigitado == $UsuarioBD && $SenhaDigitada == $SenhaBD) {
		// Se estiver correta a conexão fica yes
		session_start();
		$_SESSION["Login"] = "SIM";
		$msg_body = "<h1>Você está logado</h1>";
		$msg_body = $msg_body . "<p><a href ='res_documento.php'>Link para arquivo retrito</a></p>";
	} else {
		// Se estiver errado fica no
		session_start();
		$_SESSION["Login"] = "NÃO";
		$msg_body = "<h1>Você NÃO está logado</h1>";
		$msg_body = $msg_body . "<p><a href ='res_documento.php'>Link para arquivo retrito</a></p>";
	}
?>
<!DOCTYPE html>
<HTML>
	<HEAD>
		<TITLE>LOGIN</TITLE>
		<meta charset="utf-8">
	</HEAD>	
	<BODY>
		<?php
			echo $msg_body; 
		?>	
	</BODY>
			
</HTML>