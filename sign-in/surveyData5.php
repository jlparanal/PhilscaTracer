<?php

//data.php

$conn = new PDO("mysql:host=localhost;dbname=philscatrace", "root", "");

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'insert')
	{
		$data = array(
			':place'		=>	$_POST["place"]
		);

		$query = "
		INSERT INTO survey6
		(place) VALUES (:place)
		";

		$statement = $conn->prepare($query);

		$statement->execute($data);

		echo 'done';
	}

	if($_POST["action"] == 'fetch')
	{
		$query = "
		SELECT place, COUNT(survey_id) AS Total 
		FROM survey6 
		GROUP BY place
		";

		$result = $conn->query($query);

		$data = array();

		foreach($result as $row)
		{
			$data[] = array(
				'place'		=>	$row["place"],
				'total'			=>	$row["Total"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}

		echo json_encode($data);
	}
}


?>

