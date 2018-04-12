<?php session_start(); ?>
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

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		&nbsp;<input type="text" placeholder="enter a name..." name="newerName"/>
		<button type="submit">Change Name</button>
	</form>
	<?php

		// reading multiple files
		// then printing them to screen
	/*
		$student = array();
		for($x=1; $x<=2; $x++){
			$student[$x] = fopen("student".$x.".txt", 'r') or die("no file found");
			$name = fgets($student[$x]);
			$age = fgets($student[$x]);
			$school = fgets($student[$x]);

			echo "Name: ".$name."<br>";
			echo "Age: ".$age."<br>";
			echo "College/University: ".$school."<br>";
			echo "<br><br>";


			fclose($student[$x]);
		}
		*/
		// echo fread($student,filesize("student.txt"));
		
		// write to file from multiple files
		/*$pdf = fopen("students.txt", "w") or die("unable to create file.");
		$students = array();

		for($x=1; $x<=2; $x++){
			$student[$x] = fopen("student".$x.".txt", 'r') or die("no file found");
			$name = fgets($student[$x]);
			$age = fgets($student[$x]);
			$school = fgets($student[$x]);

			$textToFile = "Name: ".$name."\n"."Age: ".$age."\n"."College/University: ".$school."\n"."\n\n";

			fwrite($pdf, $textToFile);

			fclose($student[$x]);
		}
		fclose($pdf);*/

		// setting cookies 
		// cookies are used to store data on the computer
		// sessions are used to store information across multiple pages without storing on users computer.

		//$cookie_name = "user";
		//$cookie_value = "popo";
		//setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");


		// sessions are great because it stores values on multiple pages and holds it
		// sessions can be set using the session_start()

		if(isset($_POST["newerName"])){
			$_SESSION["name"] = $_POST["newerName"];
			setcookie("lastNameUpdated", $_POST["newerName"], time() + (86400 * 30), "localhost/forum/");
		}
		$_SESSION["age"] = 37;
		if(isset($_SESSION["name"])){
			echo "<h3>".$_SESSION["name"]." is set. </h3>";
		}
		
	?>
</body>
</html>