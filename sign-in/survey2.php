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
						<div class="card-header">Educational Background</div>
						<div class="card-body">
							<div class="form-group mb-3">
								<label>Which of the prominent programming languages were mainly taught within the curriculum?</label>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="programming_language" class="programming_language" id="programming_language_1" value="Javascript" checked>
									<label class="form-check-label mb-3" for="programming_language_1">Javascript</label>
								</div>
								<div class="form-check">
									<input type="radio" name="programming_language" id="programming_language_2" class="form-check-input" value="Python">
									<label class="form-check-label mb-3" for="programming_language_2">Python</label>
								</div>
								<div class="form-check">
									<input type="radio" name="programming_language" id="programming_language_3" class="form-check-input" value="HTML">
									<label class="form-check-label mb-3" for="programming_language_3">HTML</label>
								</div>
								<div class="form-check">
									<input type="radio" name="programming_language" id="programming_language_4" class="form-check-input" value="CSS">
									<label class="form-check-label mb-3" for="programming_language_4">CSS</label>
								</div>
								<div class="form-check">
									<input type="radio" name="programming_language" id="programming_language_5" class="form-check-input" value="PHP">
									<label class="form-check-label mb-3" for="programming_language_5">PHP</label>
								</div>
								<div class="form-check">
									<input type="radio" name="programming_language" id="programming_language_6" class="form-check-input" value="SQLandMYSQL">
									<label class="form-check-label mb-3" for="programming_language_6">SQL & MYSQL</label>
								</div>
								<div class="form-check">
									<input type="radio" name="programming_language" id="programming_language_7" class="form-check-input" value="C#">
									<label class="form-check-label mb-3" for="programming_language_7">C#</label>
								</div>
								<div class="form-check">
									<input type="radio" name="programming_language" id="programming_language_8" class="form-check-input" value="C++">
									<label class="form-check-label mb-3" for="programming_language_8">C++</label>
								</div>
							</div>
							<div class="form-group">
								<button type="button" name="submit_data2" class="btn btn-primary" id="submit_data2">Next</button>
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

	$('#submit_data2').click(function(){

		var language = $('input[name=programming_language]:checked').val();

		$.ajax({
			url:"surveyData2.php",
			method:"POST",
			data:{action:'insert', language:language},
			beforeSend:function()
			{
				$('#submit_data2').attr('disabled', 'disabled');
			},
			success:function(data)
			{
				window.location = "survey3.php";
				$('#submit_data2').attr('disabled', false);

				$('#programming_language_1').prop('checked', 'checked');

				$('#programming_language_2').prop('checked', false);
				
				$('#programming_language_3').prop('checked', false);
					
				$('#programming_language_4').prop('checked', false);
						
				$('#programming_language_5').prop('checked', false);
							
				$('#programming_language_6').prop('checked', false);
								
				$('#programming_language_7').prop('checked', false);
				
				$('#programming_language_8').prop('checked', false);

				alert("Your Feedback has been send...");

				makechart();
			}
		})
	});
	
	makechart();

	function makechart()
	{
		$.ajax({
			url:"surveyData2.php",
			method:"POST",
			data:{action:'fetch'},
			dataType:"JSON",
			success:function(data)
			{
				var language = [];
				var total = [];
				var color = [];

				for(var count = 0; count < data.length; count++)
				{
					language.push(data[count].language);
					total.push(data[count].total);
					color.push(data[count].color);
				}

				var chart_data = {
					labels:language,
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

				var group_chart3 = $('#bar_chart2');

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