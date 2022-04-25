<?php
	session_start();
	include('config/dbconn.php');
	
	if(isset($_POST['submit']))
	{
		$fname = mysqli_real_escape_string($conn,$_POST['fname']);
		$mname = mysqli_real_escape_string($conn,$_POST['mname']);
		$lname = mysqli_real_escape_string($conn,$_POST['lname']);
		$course = mysqli_real_escape_string($conn,$_POST['course']);
		$section = mysqli_real_escape_string($conn,$_POST['section']);
		$batch = mysqli_real_escape_string($conn,$_POST['batch']);
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		$password = mysqli_real_escape_string($conn,$_POST['password']);
		$cpassword = mysqli_real_escape_string($conn,$_POST['cpassword']);
		
		if($password == $cpassword)
		{
			// check email
			$checkemail = "SELECT email FROM users1 WHERE email='$email'";
			$checkemail_run = mysqli_query($conn, $checkemail);
			
			if(mysqli_num_rows($checkemail_run) > 0)
			{
				// already email exist
				$_SESSION['message'] = 'Already email exist!';
				header("Location: add_user.php");
				exit(0);
			}
			else{
				$user_query = "INSERT INTO users1 (fname, mname, lname, course, section, batch, email, username, password) 
				VALUES ('$fname', '$mname', '$lname', '$course', '$section', '$batch', '$email', '$username', '$password')";
				$user_query_run = mysqli_query($conn, $user_query);
				
				if($user_query_run)
				{
					$_SESSION['message'] = 'User is Added Successfully!';
					header("Location: add_user.php");
					exit(0);
				}
				else
				{
					$_SESSION['message'] = 'Something went wrong!';
					header("Location: add_user.php");
					exit(0);
				}
			}
		}
		else{
			$SESSION['message'] = 'Password and Conform password does not match';
			header("Location: add_user.php");
			exit(0);
		}
	}
	else{
		header("Location: add_user.php");
		exit(0);
	}
 ?>