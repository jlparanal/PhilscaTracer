<?php 
	session_start();
	if(isset($_SESSION['auth']))
	{
		if(!isset($_SESSION['message']))
		{
		$_SESSION['message'] = 'Your are already logged in';
		}
		header("Location: home.php");
		exit(0);
	}
	include('includes/header.php');
	include('includes/navbar1.php');
?>

<div class="box-area">			
	<div class="banner-area">
		<h2>" WELCOME TO PHILSCA TRACER "</h2>
		</div>
	<div class="content-area">
		<div class="wrapper">
			<h2></h2>
<div class="py-5"> 
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-5">
			
				<?php include('../AdSide/message.php'); ?>
				
				<div class="card">
					<div class="card-header">
						<h4>Login</h4>
					</div>
					<div class="card-body">
					<form action="loginDB.php" method="POST">
						<div class="form-group mb-3">
						<label>ID</label>
						<input type="username" name="username" placeholder="11819-013722" class="form-control">
						</div>
						<div class="form-group mb-3">
						<label>Password</label>
						<input type="password" name="password" placeholder="Enter Password" class="form-control">
						</div>
						<div class="form-group mb-3">
						<button type="submit" name="submit" class="btn btn-primary">Login</button>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>

<?php 
	include('includes/footer.php');
?>