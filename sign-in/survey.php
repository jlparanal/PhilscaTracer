<?php 
	include('..\AdSide\config\dbconn.php');
	include('includes/header.php');
	include('includes/navbar.php');
?>
<div class="py-5"> 
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-5">
				
				<div class="card">
					<div class="card-header">
						<h4>Personal Information</h4>
					</div>
					<div class="card-body">
					<form action="surveyDB.php" method="POST">
						<div class="form-group mb-3">
						<label>Gmail:</label>
						<input type="gmail" name="gmail" placeholder="admin@gmail.com" class="form-control">
						</div>
						<div class="form-group mb-3">
						<label>Permanent Address:</label>
						<input type="address" name="address" placeholder="Enter address" class="form-control">
						</div>
						<div>
						<label>Age:</label><br>
						<select name="age" class="form-select" aria-label="Default select example">
						  <option selected>--Select Status--</option>
						  <option value="21">21</option>
						  <option value="22">22</option>
						  <option value="23">23</option>
						  <option value="24">24</option>
						  <option value="25 above">25/ yrs old above</option>
						</select>
						</div>
						<div>
						<label>Civil Status:</label><br>
						<select name="status" class="form-select" aria-label="Default select example">
						  <option selected>--Select Status--</option>
						  <option value="Single">Single</option>
						  <option value="Married">Married</option>
						  <option value="Widowed">Widowed</option>
						  <option value="Separated">Separated</option>
						  <option value="Single Parent">Single Parent</option>
						</select>
						</div><br>
						<div class="form-group mb-3">
						<button type="submit" name="submit" class="btn btn-primary">Next</button>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php 
	include('includes/footer.php');
?>