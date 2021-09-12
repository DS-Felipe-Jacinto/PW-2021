<?php
  //Iniciar Session PHP
  session_start();

  //Finalizando a sessao
  session_destroy();
  
  //Limpamos as variáveis globais das sessões 
  session_unset();
  
  //Direcione o usuario para o formulário LOGIN
  header("Location: bd_form_login.html");
?>
