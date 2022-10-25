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
						<label>Is this your first job after graduation from PhilSCA?*</label><br><br>
								<input type="radio" name="answer" value="Yes"> Yes <br>
								<input type="radio" name="answer" value="No"> No <br>
								<input type="radio" name="answer" value="Not applicable"> Not applicable 
						</div>
						<br>
						<div>
						<label> After graduation, how long did it take for you to get your first job? * </label><br><br>
						<select name="answer1" class="form-select" aria-label="Default select example">
						  <option selected>--Option--</option>
						  <option value="Less than a month ">Less than a month  </option>
						  <option value="1-6 months">1-6 months </option>
						  <option value="7-11 months">7-11 months</option>
						  <option value="1 year to less than 2 years">1 year to less than 2 years</option>
						  <option value="2 years and above ">2 years and above </option>
						  <option value="Others">Others</option>
						  <option value="Not applicable">Not applicable</option>
						</select>
						</div>
						<br>
						<div>
						<label>How did you acquire your first job? *</label><br><br>
						<select name="answer2" class="form-select" aria-label="Default select example">
						  <option selected>--Option--</option>
						  <option value="Personally applied for the job">Personally applied for the job</option>
						  <option value=" Recommended by Faculty/Dean "> Recommended by Faculty/Dean </option>
						  <option value="Arranged by school's job placement ">Arranged by school's job placement </option>
						  <option value="Directly Invited by the Company">Directly Invited by the Company</option>
						  <option value="Others">Others</option>
						  <option value="Not applicable">Not applicable</option>
						</select>
						</div>
						<br>
						<div class="form-group mb-3">
						<button type="next" name="next2" class="btn btn-primary">Next</button>
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