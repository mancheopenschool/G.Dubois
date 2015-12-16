<?php
	session_start();
	if (isset($_SESSION['login']))
	{
		$name = $_SESSION['login'];
		session_destroy();
		header("Location: login.php?l=".$name);
		exit;
	}
	else
	{
		header("Location: login.php");
		exit;
	}
?>