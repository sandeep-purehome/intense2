<?php
	$url = "http://xml.propspace.com/feed/xml.php?cl=1946&pid=8245&acc=8807";
	$xml 	=	simplexml_load_file($url);
	//print_r((string) $listings->Listing[0]->Property_Title);
 	foreach ($xml as $listing){
 		echo "<h1>$listing->count</h1>";
 		echo $listing->Property_Title;
 		echo "<br>";
 		echo $listing->Ad_Type;
 		echo "<br>";
 		echo $listing->Unit_Type;
 		echo "<br>";
 		echo $listing->Unit_Builtup_Area;
 		echo "<br>";
 		echo $listing->No_of_Bathroom;
 		echo "<br>";
 		echo $listing->Bedrooms;
 		echo "<br>";
 		foreach ($listing->Images->image as $image){
 			echo $image;
 			echo "<br>";
 		}
 		echo "<br>";
 		foreach ($listing->Facilities->facility as $facility){
 			echo $facility;
 			echo "<br>";
 		}
 		echo "<br>";
 		echo "<br>";
 		echo "<br>";
 	}
 	
	?><pre><?php //print_r($xml); ?></pre><?php
	
?>
