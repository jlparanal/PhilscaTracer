<?php 
	
	include('../AdSide/config/dbconn.php');
	
if (isset($_POST['upload']) && isset($_FILES['image'])) {
	$description = $_POST['description'];
	$img_name = $_FILES['image']['name'];
	$img_size = $_FILES['image']['size'];
	$tmp_name = $_FILES['image']['tmp_name'];
	$error = $_FILES['image']['error'];

	if ($error === 0) {
		// limit 1mb only //
		if ($img_size > 125000) {
				$_SESSION['message'] = 'Something went wrong!';
				header("Location: home.php");
				exit(0);
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'image/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$sql = "INSERT INTO upload(image, description)
				        VALUES('$new_img_name', '$description')";
				mysqli_query($conn, $sql);
				//$SESSION['fname'] = $firstname
				header("Location: home.php");
			}else {
				$_SESSION['message'] = 'You cant upload files of this type';
				header("Location: home.php");
				exit(0);
			}
		}
	}else {
		 $_SESSION['message'] = 'unknown error occurred!';
		 header("Location: home.php");
		 exit(0);
	}

}else {
	header("Location: home.php");
}
?>