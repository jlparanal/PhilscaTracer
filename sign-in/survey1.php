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
						<h4>Educational Background</h4>
					</div>
					<div class="card-body">
					<form action="surveyDB.php" method="POST">
						<div>
						  <label> If yes, please provide the needed information: </label><br>
						  <label> (Course/Degree, School, & Inclusive years) </label><br><br>
						  <input type="ifys" name="ifys" placeholder="Course/Degree, School, & Inclusive years" class="form-control">
						</div><br>
						<div class="form-group mb-3">
						<button type="next" name="next" class="btn btn-primary">Next</button>
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