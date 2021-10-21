<?php
	session_start();

	session_destroy();

	session_unset();

	header("Location: bd_form_login.html");
?>