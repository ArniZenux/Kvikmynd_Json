<?php 
	$data = "moives.json";
	$arr_data = array();

	try
	{
		$formdata = array(
			'Id'=> "2",	  
			'Title'=> "Léon: The Professional", 
			'Genre'=> "Crime, Drama",
			'Actors'=> "Jean Reno, Gary Oldman, Natalie Portman, Danny Aiello",
			'Plot'=> "Mathilda, a 12-year-old girl, is reluctantly taken in by Léon, a professional assassin, after her family is murdered. Léon and Mathilda form an unusual relationship, as she becomes his protégée and learns the assassin's trade.",
			'Language'=> "English, Icelandic",
			'Poster'=> "https://images-na.ssl-images-amazon.com/images/M/MV5BMjdjMGU3MGYtN2Y5ZC00MTE4LWE4YWQtMTBhMjc3MTk0ZDUwXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_SX300.jpg"
		);

		$jsondata = file_get_contents($data);
		$arr_data = json_decode($jsondata, true); 

		array_push($arr_data, $formdata);

		$jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);

		if(file_put_contents($data, $jsondata))
		{
			echo "Bingo\n";
		}
		else {
			echo "Ohhh\n";
		}

	}
	catch(Exception $e){
		echo "virkar ekki". $e->getMessage(); 
	}
?>