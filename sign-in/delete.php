<?php

include('..\AdSide\config\dbconn.php');
if(isset($_POST['user-delete']))
 {
	 
	 $user_id = $_POST['user-delete'];
	 
	 $query = "DELETE FROM upload WHERE id='$user_id'";
	 $query_run = mysqli_query($conn, $query);
	 
	  if($query_run)
	 {
		 $_SESSION['message'] = 'User Deleted Successfully!';
		 header('Location: home.php');
		 exit(0);
	 }
	 else
	 {
		 $_SESSION['message'] = 'Something went wrong';
		 header('Location: home.php');
		 exit(0);
	 }
 }
?>