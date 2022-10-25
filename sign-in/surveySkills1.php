<?php 
	include('../AdSide/config/dbconn.php');
	include('includes1/header.php');
?>
<head>
		<meta charset="utf-8" />
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script	src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
	</head> 
<div class="container-fluid">
			<div class="row">
				<div class="col-md-4">
					<div class="card mt-4 mb-4">
						<div class="card-header">Relevance to your profession *</div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="bar_chart"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card mt-4 mb-4">
						<div class="card-header">Teaching and Learning Environment * </div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="bar_chart1"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card mt-4 mb-4">
						<div class="card-header">Quality of Instruction *</div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="bar_chart2"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>
</div>
<script>
	
$(document).ready(function(){

	$('#submit_data').click(function(){

		var rating = $('input[name=programming_language]:checked').val();

		$.ajax({
			url:"surveyData12.php",
			method:"POST",
			data:{action:'insert', rating:rating},
			beforeSend:function()
			{
				$('#submit_data').attr('disabled', 'disabled');
			},
			success:function(data)
			{
				//window.location = "survey12.php";
				$('#submit_data').attr('disabled', false);

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
			url:"surveyData12.php",
			method:"POST",
			data:{action:'fetch'},
			dataType:"JSON",
			success:function(data)
			{
				var rating = [];
				var total = [];
				var color = [];

				for(var count = 0; count < data.length; count++)
				{
					rating.push(data[count].rating);
					total.push(data[count].total);
					color.push(data[count].color);
				}

				var chart_data = {
					labels:rating,
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

<script>
	
$(document).ready(function(){

	$('#submit_data1').click(function(){

		var rating1 = $('input[name=programming_language]:checked').val();

		$.ajax({
			url:"surveyData13.php",
			method:"POST",
			data:{action:'insert', rating1:rating1},
			beforeSend:function()
			{
				$('#submit_data1').attr('disabled', 'disabled');
			},
			success:function(data)
			{
				//window.location = "survey12.php";
				$('#submit_data1').attr('disabled', false);

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
			url:"surveyData13.php",
			method:"POST",
			data:{action:'fetch'},
			dataType:"JSON",
			success:function(data)
			{
				var rating1 = [];
				var total = [];
				var color = [];

				for(var count = 0; count < data.length; count++)
				{
					rating1.push(data[count].rating1);
					total.push(data[count].total);
					color.push(data[count].color);
				}

				var chart_data = {
					labels:rating1,
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

				var group_chart3 = $('#bar_chart1');

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

<script>
	
$(document).ready(function(){

	$('#submit_data2').click(function(){

		var rating2 = $('input[name=programming_language]:checked').val();

		$.ajax({
			url:"surveyData14.php",
			method:"POST",
			data:{action:'insert', rating2:rating2},
			beforeSend:function()
			{
				$('#submit_data2').attr('disabled', 'disabled');
			},
			success:function(data)
			{
				//window.location = "survey12.php";
				$('#submit_data2').attr('disabled', false);

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
			url:"surveyData14.php",
			method:"POST",
			data:{action:'fetch'},
			dataType:"JSON",
			success:function(data)
			{
				var rating2 = [];
				var total = [];
				var color = [];

				for(var count = 0; count < data.length; count++)
				{
					rating2.push(data[count].rating2);
					total.push(data[count].total);
					color.push(data[count].color);
				}

				var chart_data = {
					labels:rating2,
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
	include('includes1/footer.php');
	include('includes1/scripts.php');
?>