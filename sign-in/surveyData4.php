<?php

//data.php

$conn = new PDO("mysql:host=localhost;dbname=philscatrace", "root", "");

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'insert')
	{
		$data = array(
			':status'		=>	$_POST["status"]
		);

		$query = "
		INSERT INTO survey5
		(status) VALUES (:status)
		";

		$statement = $conn->prepare($query);

		$statement->execute($data);

		echo 'done';
	}

	if($_POST["action"] == 'fetch')
	{
		$query = "
		SELECT status, COUNT(survey_id) AS Total 
		FROM survey5 
		GROUP BY status
		";

		$result = $conn->query($query);

		$data = array();

		foreach($result as $row)
		{
			$data[] = array(
				'status'		=>	$row["status"],
				'total'			=>	$row["Total"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}

		echo json_encode($data);
	}
}


?>

