<?php 
session_start();
include('../AdSide/config/dbconn.php');
//include('../AdSide/authentication.php');

if(isset($_POST['submit']))
{
	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	
	$login_query = " SELECT * FROM users1 WHERE username='$username' AND password='$password' LIMIT 1 ";
	$login_query_run = mysqli_query($conn, $login_query);
	
	if(mysqli_num_rows($login_query_run) > 0)
	{
		foreach($login_query_run as $data)
		{
			$user_id = $data['id'];
			$user_name = $data['fname'].' '.$data['lname'];
			$user_email = $data['email'];
			$role_as = $data['role_as'];
		}
		
		$_SESSION['auth'] = true;
		$_SESSION['auth_role'] = "$role_as";
		$_SESSION['auth_user'] =[
			'user_id' => $user_id,
			'user_name' => $user_name,
			'user_email' => $user_email
			];
			
			if($_SESSION['auth_role'] == '1')
			{
				$_SESSION['message'] = 'Welcome to PHILSCA TRACER ADMIN MODE';
				header("Location: ../AdSide/index.php");
				exit(0);
			}
			elseif($_SESSION['auth_role'] == '0')
			{
				$_SESSION['message'] = 'Welcome to PHILSCA TRACER';
				header("Location: index.php");
				exit(0);
			}
	}
	else
	{
		$_SESSION['message'] = 'Invalid ID or Password';
		header("Location: login.php");
		exit(0);
	}
}
else
{
	$_SESSION['message'] = 'You are not allowed to access this file';
	header("Location: login.php");
	exit(0);
}
?>