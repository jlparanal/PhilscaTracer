<?php 
	session_start();	
	include('config/dbconn.php');
	
	
	if(!isset($_SESSION['auth']))
	{
		$_SESSION['message'] = 'Login to Access the Dashboard';
		header("Location: ../sign-in/login.php");
		exit(0);
	}
	else
	{
		if($_SESSION['auth_role'] != "1")
		{
		$_SESSION['message'] = 'You are not authorized as ADMIN';
		header("Location: ../sign-in/login.php");
		exit(0);
		}
	}
?>