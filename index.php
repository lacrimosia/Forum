<?php
	require_once('Forum.php');
	$f = new Forum();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="style.css"/>
</head>
<body>
	<section id="main"><?php require_once('menu.php')?></section>
	<?php echo "<section class='banner' style='background: " .$f->background('Honeydew'). ";'>
		<h1>Welcome to the Smart Forum</h1>
		<p> We are a forum dedicated to discussing smart topics on just about anything.</p>
	</section>"?>
</body>
</html>