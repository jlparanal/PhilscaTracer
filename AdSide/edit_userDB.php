<?php 
 include('authentication.php');
 
 if(isset($_POST['user_delete']))
 {
	 $user_id = $_POST['user_delete'];
	 
	 $query = "DELETE FROM users1 WHERE id='$user_id'";
	 $query_run = mysqli_query($conn, $query);
	 
	  if($query_run)
	 {
		 $_SESSION['message'] = 'User Deleted Successfully!';
		 header('Location: view_user.php');
		 exit(0);
	 }
	 else
	 {
		 $_SESSION['message'] = 'Something went wrong';
		 header('Location: view_user.php');
		 exit(0);
	 }
 }
 if(isset($_POST['update_btn']))
 {
	 $user_id = $_POST['user_id'];
	 $fname = $_POST['fname'];
	 $mname = $_POST['mname'];
	 $lname = $_POST['lname'];
	 $course = $_POST['course'];
	 $section = $_POST['section'];
	 $batch = $_POST['batch'];
	 $email = $_POST['email'];
	 $username = $_POST['username'];
	 $password = $_POST['password'];
	 $role_as = $_POST['role_as'];
	 $status = $_POST['status'] == true ? '1':'0';
	 
	 $query = "UPDATE users1 SET fname='$fname', mname='$mname', lname='$lname', course='$course', section='$section', batch='$batch', email='$email', username='$username', password='$password', role_as='$role_as', 
	 status='$status' WHERE id='$user_id' ";
	 $query_run = mysqli_query($conn, $query);
	 
	 if($query_run)
	 {
		 $_SESSION['message'] = 'Updated Successfully';
		 header('Location: view_user.php');
		 exit(0);
	 }
 }
?>