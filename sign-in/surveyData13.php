<?php

//data.php

$conn = new PDO("mysql:host=localhost;dbname=philscatrace", "root", "");

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'insert')
	{
		$data = array(
			':rating1'		=>	$_POST["rating1"]
		);

		$query = "
		INSERT INTO survey16
		(rating1) VALUES (:rating1)
		";

		$statement = $conn->prepare($query);

		$statement->execute($data);

		echo 'done';
	}

	if($_POST["action"] == 'fetch')
	{
		$query = "
		SELECT rating1, COUNT(survey_id) AS Total 
		FROM survey16 
		GROUP BY rating1
		";

		$result = $conn->query($query);

		$data = array();

		foreach($result as $row)
		{
			$data[] = array(
				'rating1'		=>	$row["rating1"],
				'total'			=>	$row["Total"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}

		echo json_encode($data);
	}
}


?>

