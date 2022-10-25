<?php 
	include('..\AdSide\config\dbconn.php');
	include('includes/header.php');
	include('includes/navbar.php');
?>
<html>
	<head>
		<meta charset="utf-8" />
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script	src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
	</head>
	<body>
<div class="py-5"> 
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-5">	
		<div class="container">
			<div class="card">
				<div class="card-header">Employment Data</div>
				<div class="card-body">
					<div class="form-group mb-3">
						<label>How relevant are the school-acquired skills and competencies to your professional career? <br>
						(1-Strongly Irrelevant 2-Irrelevant 3-Relevant 4-Strongly Relevant) </label><br><br>
						<label>Critical thinking Skill*</label>
						<div class="form-check">
									<input class="form-check-input" type="radio" name="programming_language" class="programming_language" id="programming_language_1" value="Strongly Irrelevant" checked>
									<label class="form-check-label mb-3" for="programming_language_1">1</label>
						</div>
						<div class="form-check">						
									<input type="radio" name="programming_language" id="programming_language_2" class="form-check-input" value="Irrelevant">
									<label class="form-check-label mb-3" for="programming_language_2">2</label>
						</div>			
						<div class="form-check">	
									<input type="radio" name="programming_language" id="programming_language_3" class="form-check-input" value="Relevant">
									<label class="form-check-label mb-3" for="programming_language_3">3</label>
						</div>		
						<div class="form-check">		
									<input type="radio" name="programming_language" id="programming_language_4" class="form-check-input" value="Strongly Relevant">
									<label class="form-check-label mb-3" for="programming_language_4">4</label>
						</div>						
					<div class="form-group">
						<button type="button" name="submit_data12" class="btn btn-primary" id="submit_data12">Next</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
</div>
	</body>
</html>
<script>
	
$(document).ready(function(){

	$('#submit_data12').click(function(){

		var rating3 = $('input[name=programming_language]:checked').val();

		$.ajax({
			url:"surveyData11.php",
			method:"POST",
			data:{action:'insert', rating3:rating3},
			beforeSend:function()
			{
				$('#submit_data12').attr('disabled', 'disabled');
			},
			success:function(data)
			{
				window.location = "survey15.php";
				$('#submit_data12').attr('disabled', false);

				$('#programming_language_1').prop('checked', 'checked');

				$('#programming_language_2').prop('checked', false);
				
				$('#programming_language_3').prop('checked', false);
					
				$('#programming_language_4').prop('checked', false);
				
				alert("Your Feedback has been send...");

				makechart();
			}
		})
	});
	
	makechart();

	function makechart()
	{
		$.ajax({
			url:"surveyData11.php",
			method:"POST",
			data:{action:'fetch'},
			dataType:"JSON",
			success:function(data)
			{
				var rating3 = [];
				var total = [];
				var color = [];

				for(var count = 0; count < data.length; count++)
				{
					rating3.push(data[count].rating3);
					total.push(data[count].total);
					color.push(data[count].color);
				}

				var chart_data = {
					labels:rating3,
					datasets:[
						{
							label:'Vote',
							backgroundColor:color,
							color:'#fff',
							data:total
						}
					]
				};

				var options = {
					responsive:true,
					scales:{
						yAxes:[{
							ticks:{
								min:0
							}
						}]
					}
				};

				var group_chart3 = $('#bar_chart3');

				var graph3 = new Chart(group_chart3, {
					type:'bar',
					data:chart_data,
					options:options
				});
			}
		})
	}

});

</script>


<?php 
	include('includes/footer.php');
?>