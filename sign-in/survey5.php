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
						<label>Employment Status </label>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="programming_language" class="programming_language" id="programming_language_1" value="Full Time/Permanent/Regular " checked>
							<label class="form-check-label mb-3" for="programming_language_1">Full Time/Permanent/Regular </label>
						</div>
						<div class="form-check">
							<input type="radio" name="programming_language" id="programming_language_2" class="form-check-input" value="Probationary">
							<label class="form-check-label mb-3" for="programming_language_2">Probationary</label>
						</div>
						<div class="form-check">
							<input type="radio" name="programming_language" id="programming_language_3" class="form-check-input" value="Contractual">
							<label class="form-check-label mb-3" for="programming_language_3">Contractual</label>
						</div>
						<div class="form-check">
							<input type="radio" name="programming_language" id="programming_language_4" class="form-check-input" value="Part-Time">
							<label class="form-check-label mb-3" for="programming_language_4">Part-Time</label>
						</div>
						<div class="form-check">
							<input type="radio" name="programming_language" id="programming_language_5" class="form-check-input" value="Not applicable">
							<label class="form-check-label mb-3" for="programming_language_5">Not applicable</label>
						</div>
					</div>
					<div class="form-group">
						<button type="button" name="submit_data4" class="btn btn-primary" id="submit_data4">Next</button>
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

	$('#submit_data4').click(function(){

		var status = $('input[name=programming_language]:checked').val();

		$.ajax({
			url:"surveyData4.php",
			method:"POST",
			data:{action:'insert', status:status},
			beforeSend:function()
			{
				$('#submit_data4').attr('disabled', 'disabled');
			},
			success:function(data)
			{
				window.location = "survey6.php";
				$('#submit_data4').attr('disabled', false);

				$('#programming_language_1').prop('checked', 'checked');

				$('#programming_language_2').prop('checked', false);
				
				$('#programming_language_3').prop('checked', false);
				
				$('#programming_language_4').prop('checked', false);
				
				$('#programming_language_5').prop('checked', false);

				alert("Your Feedback has been send...");

				makechart();
			}
		})
	});
	
	makechart();

	function makechart()
	{
		$.ajax({
			url:"surveyData4.php",
			method:"POST",
			data:{action:'fetch'},
			dataType:"JSON",
			success:function(data)
			{
				var status = [];
				var total = [];
				var color = [];

				for(var count = 0; count < data.length; count++)
				{
					status.push(data[count].status);
					total.push(data[count].total);
					color.push(data[count].color);
				}

				var chart_data = {
					labels:status,
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

			var group_chart1 = $('#pie_chart');

				var graph1 = new Chart(group_chart1, {
					type:"pie",
					data:chart_data
				});
			}
		})
	}

});

</script>
<?php 
	include('includes/footer.php');
?>