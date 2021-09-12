<?php  

        // Iniciar sessão PHP
        session_start();
        
        // Se o usuario não estiver logado mande ele para o formulario de login
        if ($_SESSION["Login"] != "SIM") {
        header("Location: bd_form_login.html");
        }
?>

<html>
    <head>
    <title>Arquivo Restrito</title>
    </head>
      <body>
			<h1>Você está em um arquivo restrito!</h1> 
			<p>Permitindo somente para usuarios autorizados.</p> 
			<p><a href='bd_logoff.php'>LOGOFF</a></p>
     </body> 
</html>