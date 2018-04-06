<?php
require_once('Forum.php');

class Topics extends Forum{

	public $topics = array(
	array( 
		"name" => "Technology Thread",
		"url" => "tech"
	),
	array( 
		"name" => "Gaming Thread",
		"url" => "gaming"
	),
	array( 
		"name" => "Movie Thread",
		"url" => "movies"
	),
	array( 
		"name" => "Foodie Thread",
		"url" => "foodie"
	),
	array( 
		"name" => "Music Thread",
		"url" => "music"
	),
	array( 
		"name" => "Sports Thread",
		"url" => "sports"
	),
	array( 
		"name" => "Political Thread (Keep it clean)",
		"url" => "politics"
	)
  );
} 
?>