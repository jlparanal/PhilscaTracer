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
						<h4>Employment Data</h4>
					</div>
					<div class="card-body">
					<form action="surveyDB.php" method="POST">
						<div>
						<label> If not, reasons for unemployment. (If EMPLOYED choose not applicable on the list) *</label><br><br>
						<select name="answer" class="form-select" aria-label="Default select example">
						  <option selected>--Select Year--</option>
						  <option value="Advance studies">Advance studies (i.e. Masters, Doctorate etc.) </option>
						  <option value="No job opportunity">No job opportunity </option>
						  <option value="Lack of Work Experience">Lack of Work Experience</option>
						  <option value="Personal Concerns">Personal Concerns</option>
						  <option value="Health Issues">Health Issues </option>
						  <option value="Did not look for a job">Did not look for a job </option>
						  <option value="Not applicable, I am employed.">Not applicable, I am employed. </option>
						</select>
						</div>
						<br>
						<div>
						  <label> Company Name (If NOT applicable, please write n/a) * </label><br>
						  <input type="company" name="company" placeholder="Company Name" class="form-control">
						</div>
						<br>
						<div class="form-group mb-3">
						<button type="next" name="next1" class="btn btn-primary">Next</button>
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