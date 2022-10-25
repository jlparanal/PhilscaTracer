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
						<div class="card-header">Gender</div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="bar_chart"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card mt-4 mb-4">
						<div class="card-header">Have you ever pursued advanced/post graduate studies?
						<br> (i.e. Masters, Doctorate Degree)* </div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="doughnut_chart"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card mt-4 mb-4">
						<div class="card-header">Which of the prominent programming languages were mainly taught within the curriculum? </div>
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

		var language = $('input[name=programming_language]:checked').val();

		$.ajax({
			url:"surveyData.php",
			method:"POST",
			data:{action:'insert', gender:gender},
			beforeSend:function()
			{
				$('#submit_data').attr('disabled', 'disabled');
			},
			success:function(data)
			{
				$('#submit_data').attr('disabled', false);

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
			url:"surveyData.php",
			method:"POST",
			data:{action:'fetch'},
			dataType:"JSON",
			success:function(data)
			{
				var gender = [];
				var total = [];
				var color = [];

				for(var count = 0; count < data.length; count++)
				{
					gender.push(data[count].gender);
					total.push(data[count].total);
					color.push(data[count].color);
				}

				var chart_data = {
					labels:gender,
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

		var gender = $('input[name=programming_language]:checked').val();

		$.ajax({
			url:"surveyData1.php",
			method:"POST",
			data:{action:'insert', gender:gender},
			beforeSend:function()
			{
				$('#submit_data').attr('disabled', 'disabled');
			},
			success:function(data)
			{
				window.location = "survey1.php";
				$('#submit_data1').attr('disabled', false);

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
			url:"surveyData1.php",
			method:"POST",
			data:{action:'fetch'},
			dataType:"JSON",
			success:function(data)
			{
				var yesno = [];
				var total = [];
				var color = [];

				for(var count = 0; count < data.length; count++)
				{
					yesno.push(data[count].yesno);
					total.push(data[count].total);
					color.push(data[count].color);
				}

				var chart_data = {
					labels:yesno,
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

				var group_chart2 = $('#doughnut_chart');

				var graph2 = new Chart(group_chart2, {
					type:"doughnut",
					data:chart_data
				});
			}
		})
	}

});

</script>

<script>
	
$(document).ready(function(){

	$('#submit_data2').click(function(){

		var yesno = $('input[name=programming_language]:checked').val();

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

<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" /> --/
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script	src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
	</head>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
					<div class="card mt-4">
						<div class="card-header">Are you presently employed?</div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="doughnut_chart3"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card mt-4">
						<div class="card-header">Employment Status</div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="pie_chart"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card mt-4 mb-4">
						<div class="card-header">Place of Work</div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="bar_chart5"></canvas>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>
<script>
	
$(document).ready(function(){

	$('#submit_data3').click(function(){

		var data1 = $('input[name=programming_language]:checked').val();

		$.ajax({
			url:"surveyData3.php",
			method:"POST",
			data:{action:'insert', data1:data1},
			beforeSend:function()
			{
				$('#submit_data3').attr('disabled', 'disabled');
			},
			success:function(data)
			{
				//window.location = "survey1.php";
				$('#submit_data3').attr('disabled', false);

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
			url:"surveyData3.php",
			method:"POST",
			data:{action:'fetch'},
			dataType:"JSON",
			success:function(data)
			{
				var data1 = [];
				var total = [];
				var color = [];

				for(var count = 0; count < data.length; count++)
				{
					data1.push(data[count].data1);
					total.push(data[count].total);
					color.push(data[count].color);
				}

				var chart_data = {
					labels:data1,
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

				var group_chart2 = $('#doughnut_chart3');

				var graph2 = new Chart(group_chart2, {
					type:"doughnut",
					data:chart_data
				});
			}
		})
	}

});

</script>

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

<script>

	
$(document).ready(function(){

	$('#submit_data5').click(function(){

		var place = $('input[name=programming_language]:checked').val();

		$.ajax({
			url:"surveyData5.php",
			method:"POST",
			data:{action:'insert', place:place},
			beforeSend:function()
			{
				$('#submit_data5').attr('disabled', 'disabled');
			},
			success:function(data)
			{
				window.location = "survey6.php";
				$('#submit_data5').attr('disabled', false);

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
			url:"surveyData5.php",
			method:"POST",
			data:{action:'fetch'},
			dataType:"JSON",
			success:function(data)
			{
				var place = [];
				var total = [];
				var color = [];

				for(var count = 0; count < data.length; count++)
				{
					place.push(data[count].place);
					total.push(data[count].total);
					color.push(data[count].color);
				}

				var chart_data = {
					labels:place,
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

				var group_chart3 = $('#bar_chart5');

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
						<div class="card-header">Is your current job related to the degree earned from PhilSCA?</div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="bar_chart7"></canvas>
							</div>
						</div>
					</div>
				</div>
			<div class="col-md-4">
					<div class="card mt-4">
						<div class="card-header">Which of the programming languages above were utilized in your career?</div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="pie_chart3"></canvas>
							</div>
						</div>
					</div>
				</div>
			<div class="col-md-4">
					<div class="card mt-4 mb-4">
						<div class="card-header">Year Graduated:</div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="bar_chart1-1"></canvas>
							</div>
						</div>
					</div>
				</div>
	</div>
</div>
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
				window.location = "survey6.php";
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

				var group_chart3 = $('#bar_chart7');

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

	$('#submit_data8').click(function(){

		var language1 = $('input[name=programming_language]:checked').val();

		$.ajax({
			url:"surveyData7.php",
			method:"POST",
			data:{action:'insert', language1:language1},
			beforeSend:function()
			{
				$('#submit_data8').attr('disabled', 'disabled');
			},
			success:function(data)
			{
				//window.location = "survey11.php";
				$('#submit_data8').attr('disabled', false);

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
			url:"surveyData7.php",
			method:"POST",
			data:{action:'fetch'},
			dataType:"JSON",
			success:function(data)
			{
				var language1 = [];
				var total = [];
				var color = [];

				for(var count = 0; count < data.length; count++)
				{
					language1.push(data[count].language1);
					total.push(data[count].total);
					color.push(data[count].color);
				}

				var chart_data = {
					labels:language1,
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

				var group_chart1 = $('#pie_chart3');

				var graph1 = new Chart(group_chart1, {
					type:"pie",
					data:chart_data
				});
			}
		})
	}

});

</script>

<script>

$(document).ready(function(){

	$('#submit_data111').click(function(){

		var year = $('input[name=programming_language]:checked').val();

		$.ajax({
			url:"surveyData111.php",
			method:"POST",
			data:{action:'insert', year:year},
			beforeSend:function()
			{
				$('#submit_data111').attr('disabled', 'disabled');
			},
			success:function(data)
			{
				window.location = "survey2.php";
				$('#submit_data111').attr('disabled', false);

				$('#programming_language_1').prop('checked', 'checked');

				$('#programming_language_2').prop('checked', false);
				
				$('#programming_language_3').prop('checked', false);
					
				$('#programming_language_4').prop('checked', false);
						
				$('#programming_language_5').prop('checked', false);
							
				$('#programming_language_6').prop('checked', false);
								
				$('#programming_language_7').prop('checked', false);
				

				alert("Your Feedback has been send...");

				makechart();
			}
		})
	});
	
	makechart();

	function makechart()
	{
		$.ajax({
			url:"surveyData1-1.php",
			method:"POST",
			data:{action:'fetch'},
			dataType:"JSON",
			success:function(data)
			{
				var year = [];
				var total = [];
				var color = [];

				for(var count = 0; count < data.length; count++)
				{
					year.push(data[count].year);
					total.push(data[count].total);
					color.push(data[count].color);
				}

				var chart_data = {
					labels:year,
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

				var group_chart3 = $('#bar_chart1-1');

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