<?php
	session_start();
	include('..\AdSide\config\dbconn.php');
	
	if(isset($_POST['submit']))
	{
		$gmail = $_POST['gmail'];
		$address = $_POST['address'];
		$age = $_POST['age'];
		$status = $_POST['status'];
		
		$query = "INSERT INTO `survey` (`gmail`, `address`, `age`, `status`) VALUES ('$gmail', '$address', '$age', '$status')";
		$query_run = mysqli_query($conn, $query);
		
		if($query_run)
		{
			header("Location: survey0.php");
			exit(0);
		}
	}	
 ?>
 
<?php
	session_start();
	include('..\AdSide\config\dbconn.php');
	
	if(isset($_POST['next']))
	{
		//$year = $_POST['year'];
		$ifys = $_POST['ifys'];
	
		$query = "INSERT INTO `survey1` (`ifys`) VALUES ('$ifys')";
		$query_run = mysqli_query($conn, $query);
		
		if($query_run)
		{
			header("Location: survey1-1.php");
			exit(0);
		}
	}
 ?>
 
<?php
	session_start();
	include('..\AdSide\config\dbconn.php');
	
	if(isset($_POST['next1']))
	{
		$answer = $_POST['answer'];
		$company = $_POST['company'];
	
		$query = "INSERT INTO `survey4` (`answer`, `company`) VALUES ('$answer', '$company')";
		$query_run = mysqli_query($conn, $query);
		
		if($query_run)
		{
			header("Location: survey5.php");
			exit(0);
		}
	}	
 ?>
 
<?php
	session_start();
	include('..\AdSide\config\dbconn.php');
	
	if(isset($_POST['next2']))
	{
		$answer = $_POST['answer'];
		$answer1 = $_POST['answer1'];
		$answer2 = $_POST['answer2'];
		
	
		$query = "INSERT INTO `survey7` (`answer`, `answer1`, `answer2`) VALUES ('$answer', '$answer1', '$answer2')";
		$query_run = mysqli_query($conn, $query);
		
		if($query_run)
		{
			header("Location: survey8.php");
			exit(0);
		}
	}	
 ?>
 
 <?php
	session_start();
	include('..\AdSide\config\dbconn.php');
	
	if(isset($_POST['next3']))
	{
		$answer = $_POST['answer'];
		
	
		$query = "INSERT INTO `survey9` (`answer`) VALUES ('$answer')";
		$query_run = mysqli_query($conn, $query);
		
		if($query_run)
		{
			header("Location: survey10.php");
			exit(0);
		}
	}	
 ?>
 