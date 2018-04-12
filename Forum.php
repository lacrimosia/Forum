<?php
class Forum{
	public $background;
	public $links = array
	(
		array(
			"page" => "index.php", 
			"name" => "Home"
		),
		array(
			"page" => "topic.php", 
			"name" => "Topics"
		)
	);

	public function background($background){
		$this->background = $background;
		return $this->background;
	}

	public function activeClass(){
		$pageName = explode("/", $_SERVER['REQUEST_URI']);
		foreach($this->links as $value){
			if($value["page"] == $pageName[2]){
				return "active";
			}
		}
	}
}
?>