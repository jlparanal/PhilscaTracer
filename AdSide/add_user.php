<?php 
	session_start();
	include('config/dbconn.php');
	include('includes/header.php');
?>
<div class="py-5"> 
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php include('message.php'); ?>
				<div class="card">
					<div class="card-header">
						<h4>Add User</h4>
					</div>
					<form action="add_userDB.php" method="POST">
					<div class="card-body">
						<div class="form-group mb-3">
							<label for="" class="control-label">First Name</label>
							<input required type="text" name="fname" class="form-control">
						</div>
						<div class="form-group mb-3">
							<label for="" class="control-label">Middle Name</label>
							<input required type="text" name="mname" class="form-control ">
						</div>
						<div class="form-group mb-3">
							<label for="" class="control-label">Last Name</label>
							<input required type="text" name="lname" class="form-control ">
						</div>
						<div class="row mb-3">
						<div class="col">
							<label for="" class="control-label">Course</label>
							<input required type="text" name="course" placeholder="BSAIT" class="form-control ">
						</div>
						<div class="col">
							<label for="" class="control-label">Section</label>
							<input required type="text" name="section" placeholder="4-3" class="form-control ">
						</div>
						</div>
						<div class="form-group mb-3">
							<label for="" class="control-label">Batch</label>
							<input required type="text" name="batch" placeholder="2019-2020"class="form-control ">
						</div>
						<div class="form-group mb-3">
							<label for="" class="control-label">Email</label>
							<input required type="email" name="email" placeholder="Admin@gmail.com"class="form-control ">
						</div>
						<div class="form-group mb-3">
							<label for="" class="control-label">ID no.</label>
							<input required type="username" name="username" placeholder="11819-013722" class="form-control ">
						</div>
						<div class="row mb-3">
							<div class="col">Password
							<input required type="password" name="password" placeholder="Enter Password" class="form-control">
							</div>
							<div class="col-sm mb-3">Confirm Password
							<input required type="password" name="cpassword" placeholder="Confirm Password" class="form-control">
						</div>
						<div class="form-group mb-3">
						<button type="submit" name="submit" class="btn btn-primary">ADD</button>
						</div>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php 
	include('includes/footer.php');
	include('includes/scripts.php');
?>