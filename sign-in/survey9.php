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
						<label> If NOT, what are the reasons behind you taking a job that is not related to your field of study? </label><br><br>
						<select name="answer" class="form-select" aria-label="Default select example">
						  <option selected>--Select Year--</option>
						  <option value="Could not get a job in my field of specialization ">Could not get a job in my field of specialization </option>
						  <option value="The salary is low ">The salary is low </option>
						  <option value="Don't like the job ">Don't like the job </option>
						  <option value="Actual training is inadequate ">Actual training is inadequate </option>
						  <option value="Could not compete with other graduates from other institutions in the same field ">Could not compete with other graduates from other institutions in the same field </option>
						  <option value="Other">Other</option>
						</select>
						</div>
						<br>
						<br>
						<div class="form-group mb-3">
						<button type="next" name="next3" class="btn btn-primary">Next</button>
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