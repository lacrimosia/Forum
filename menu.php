<?php
	// require is identical to include, but require generates a fatal error, but include issues warnings
	require_once('Forum.php'); //php checks to see if the file is already loaded, and wont load again
	$menu = new Forum();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="style.css"/>
</head>
<body>
	<section id="menu">
	<ul>
		<li style="padding-right: 25px; font-family: sans-serif;"><strong>Smart Forum</strong></li>
		<?php 
		   foreach($menu->links as $value){
		   	echo "<li><a href='".$value["page"]."' class='".$menu->activeClass()."'>".$value["name"]."</a></li>";
		   }
		?>
	</ul>
</<section>
</body>
</html>