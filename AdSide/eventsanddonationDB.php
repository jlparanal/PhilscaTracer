<?php 
	session_start();
	include('config/dbconn.php');
	
if (isset($_POST['submit']) && isset($_FILES['my_image'])) {

	$description = $_POST['description'];
	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) {
		// limit 1mb only //
		if ($img_size > 125000) {
				$_SESSION['message'] = 'Something went wrong!';
				header("Location: eventsanddonation.php");
				exit(0);
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$sql = "INSERT INTO images(image_url, description)
				        VALUES('$new_img_name', '$description')";
				mysqli_query($conn, $sql);
				header("Location: eventsanddonation.php");
			}else {
				$_SESSION['message'] = 'You cant upload files of this type';
				header("Location: eventsanddonation.php");
				exit(0);
			}
		}
	}else {
		 $_SESSION['message'] = 'unknown error occurred!';
		 header("Location: eventsanddonation.php");
		 exit(0);
	}

}else {
	header("Location: eventsanddonation.php");
}
?>