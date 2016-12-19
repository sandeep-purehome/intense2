<?php
	$url = "http://xml.propspace.com/feed/xml.php?cl=1946&pid=8245&acc=8807";
	$xml 	=	simplexml_load_file($url);
	var_dump($xml);
?>
