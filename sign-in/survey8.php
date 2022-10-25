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
						<label> Is your current job related to the degree earned from PhilSCA?</label>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="programming_language" class="programming_language" id="programming_language_1" value="Yes" checked>
							<label class="form-check-label mb-3" for="programming_language_1">Yes</label>
						</div>
						<div class="form-check">
							<input type="radio" name="programming_language" id="programming_language_2" class="form-check-input" value="No">
							<label class="form-check-label mb-3" for="programming_language_2">No</label>
						</div>
					</div>
					<div class="form-group">
						<button type="button" name="submit_data6" class="btn btn-primary" id="submit_data6">Next</button>
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

	$('#submit_data6').click(function(){

		var degree = $('input[name=programming_language]:checked').val();

		$.ajax({
			url:"surveyData6.php",
			method:"POST",
			data:{action:'insert', degree:degree},
			beforeSend:function()
			{
				$('#submit_data6').attr('disabled', 'disabled');
			},
			success:function(data)
			{
				window.location = "survey9.php";
				$('#submit_data6').attr('disabled', false);

				$('#programming_language_1').prop('checked', 'checked');

				$('#programming_language_2').prop('checked', false);

				alert("Your Feedback has been send...");

				makechart();
			}
		})
	});
	
	makechart();

	function makechart()
	{
		$.ajax({
			url:"surveyData6.php",
			method:"POST",
			data:{action:'fetch'},
			dataType:"JSON",
			success:function(data)
			{
				var degree = [];
				var total = [];
				var color = [];

				for(var count = 0; count < data.length; count++)
				{
					degree.push(data[count].degree);
					total.push(data[count].total);
					color.push(data[count].color);
				}

				var chart_data = {
					labels:degree,
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

				var group_chart3 = $('#bar_chart');

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