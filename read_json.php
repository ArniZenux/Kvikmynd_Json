<?php
	try{
		$data = file_get_contents("moives.json"); 
		$arr = json_decode($data, true);
		
		foreach ($arr as $i) {
			 echo $i['Title']."\n";
			 echo $i['Genre']."\n";
			 echo $i['Actors']."\n";
			 echo $i['Plot']."\n";
			 echo $i['Language']."\n";
			 
		}

	}
	catch(Exception $ex){
		echo "Virkar ekki".$ex->getMessage(); 
	}
?>

