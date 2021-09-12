<?php 
	
	// Executa a conexão com o banco
	require "bd_conectar.php";

	// Recupera os dados dos campos
	$Nome = $_POST['NomeDoUsuario'];
	$Sobrenome = $_POST['SobrenomeDoUsuario'];
	$Celular = $_POST['CelularDoUsuario'];
	$Data = $_POST['DataDeNascimentoDoUsuario'];
	$Email = $_POST['EmailDoUsuario'];
	$Senha = $_POST['SenhaDoUsuario'];

	// Insere os dados no banco
	$sql = mysqli_query($conexao, "INSERT INTO tbl_usuario VALUES ('', '".$Nome."', '".$Sobrenome."', '".$Celular."', '".$Data."', '".$Email."', '".$Senha."')");

		// Se os dados forem inseridos com sucesso
		if($sql){
			$msg = "Você foi cadastrado com sucesso!";
		}else{
			$msg = "Houve um erro! Veja o último cliente cadastrado com sucesso.";
		}
?>
<!DOCTYPE html>
<HTML>
	<HEAD>
		<meta charset="UTF-8">
		<TITLE>Inserindo Dados</TITLE>
		<META name="author" content="Felipe Jacinto">
		<meta name="description" content="Criando um Sistema de Login">
		<meta name="keywords" content="Aula, Inserção de Dados, HTML, PHP, Programação Web">
	</HEAD>
	<BODY>
		<?php 
			echo "<H1>$msg</H1>";
			// Seleciona todos os usuários
			$sql = mysqli_query($conexao, "SELECT * FROM tbl_usuario ORDER BY ID DESC limit 1");

			// Exibe as informações de cada usuário
			while ($usuario = mysqli_fetch_object($sql)) {
				// Exibindo as informações
				echo "<b>Nome: </b>" . $usuario->NomeDoUsuario . "<br>";
				echo "<br><b>Sobrenome: </b>" . $usuario->SobrenomeDoUsuario . "<br>";
				echo "<br><b>Celular: </b>" . $usuario->CelularDoUsuario . "<br>";
				echo "<br><b>Data: </b>" . $usuario->DataDeNascimentoDoUsuario . "<br>";
				echo "<br><b>E-mail: </b>" . $usuario->EmailDoUsuario;
			}
				// Encerra a conexão
			require "bd_desconectar.php";

		?>
	</BODY>
</HTML>