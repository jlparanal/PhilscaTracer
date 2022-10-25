<?php

//data.php

$conn = new PDO("mysql:host=localhost;dbname=philscatrace", "root", "");

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'insert')
	{
		$data = array(
			':rating3'		=>	$_POST["rating3"]
		);

		$query = "
		INSERT INTO survey14
		(rating3) VALUES (:rating3)
		";

		$statement = $conn->prepare($query);

		$statement->execute($data);

		echo 'done';
	}

	if($_POST["action"] == 'fetch')
	{
		$query = "
		SELECT rating3, COUNT(survey_id) AS Total 
		FROM survey14 
		GROUP BY rating3
		";

		$result = $conn->query($query);

		$data = array();

		foreach($result as $row)
		{
			$data[] = array(
				'rating3'		=>	$row["rating3"],
				'total'			=>	$row["Total"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}

		echo json_encode($data);
	}
}


?>

