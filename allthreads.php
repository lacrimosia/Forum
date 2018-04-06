<?php
	require_once('Topics.php');
	$t = new Topics();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Topics</title>
	<link rel="stylesheet" href="style.css"/>
</head>
<body>
	<section id="main"><?php require_once('menu.php')?></section>
	<?php echo "<section class='banner' style='background: " .$t->background('Honeydew'). ";'>
		<h1>All Threads</h1>
	</section>" ?>
	<?php
   echo $_GET['q'];
?>
</body>
</html>