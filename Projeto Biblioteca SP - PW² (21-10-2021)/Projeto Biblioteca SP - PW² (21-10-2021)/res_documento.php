<?php 
    
    session_start();

    if ($_SESSION["Login"] != "SIM"){
    	header("Location: bd_form_login.html");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        Arquivo Restrito
    </title>
</head>
    <body>
        <h1>Você está em um arquivo restrito!</h1>
        <p>Permitido somente para usuários autorizados.</p>
        <p><a href="bd_logoff.php">LOGOFF</a></p>
    </body>
</html>