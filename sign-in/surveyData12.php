<?php

//data.php

$conn = new PDO("mysql:host=localhost;dbname=philscatrace", "root", "");

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'insert')
	{
		$data = array(
			':rating'		=>	$_POST["rating"]
		);

		$query = "
		INSERT INTO survey15
		(rating) VALUES (:rating)
		";

		$statement = $conn->prepare($query);

		$statement->execute($data);

		echo 'done';
	}

	if($_POST["action"] == 'fetch')
	{
		$query = "
		SELECT rating, COUNT(survey_id) AS Total 
		FROM survey15 
		GROUP BY rating
		";

		$result = $conn->query($query);

		$data = array();

		foreach($result as $row)
		{
			$data[] = array(
				'rating'		=>	$row["rating"],
				'total'			=>	$row["Total"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}

		echo json_encode($data);
	}
}


?>

