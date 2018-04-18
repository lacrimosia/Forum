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

	//	$_SESSION["name"] = "Jane"; // initialize

		if(isset($_POST["newerName"])){

			$_SESSION["name"] = filter_var($_POST["newerName"], FILTER_SANITIZE_STRING);
			setcookie("lastNameUpdated", $_POST["newerName"], time() + (86400 * 30), "localhost/forum/");
		}
		$_SESSION["age"] = 37;

		if(isset($_SESSION["name"])){
			echo "<h3>".$_SESSION["name"]." is set. </h3>";
		}else{
			echo "<h3> Name not set. </h3>";
		}


		// filter_var() - sanitize and validate text and/or numbers and data

	//	$s = "<script>alert('hello');</script>";
	//	$stripped = filter_var($s, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	//	$stripped .= "<!---";
	//	echo $s." to <br>".$stripped;
	//	$d = b("Time");
	//	function b($word){
	//		if(strlen($word)>4){
	//			throw new Exception("Word is too long.", 1);	
	//		}
	//		echo "My word is: $word.";
	//	}

	// error handling function
	//$x = 2;

	//if($x > 0){
		// trigger_error("x must be less than 0.", E_USER_WARNING); // this triggers an error for illegal input
		// the second parameter is the error type. This ranges from User_Error, User_warning, and User_Notice
	//}

	// the error function
	//function getError($errorLevel, $errorMessage, $errorFile, $errorLine){
	//	echo "You have a level $errorLevel error stating: \"$errorMessage \" within $errorFile on line $errorLine";
	//	die();
	//}

	// set the error handler
	//set_error_handler("getError");

    // connecting php to mySQL
	$serverName = "localhost";
	$userName = "root";
	$password = "";

	// create connection
	$conn = new mysqli($serverName, $userName, $password);

	//check connection
	if($conn->connect_error){
		die("Connection failed: ".$conn->connect_error);
	}else{
		echo "Connected Successfully";
	}
	//$conn->close(); 

	// create the database
	$sql = "CREATE DATABASE IF NOT EXISTS Candy";

	// check query and see if database exists or create it
	if($conn->query($sql) === TRUE){
		echo "Database created";
	}else{
		echo "Database creation error: ".$conn->error;
	}

	
	?>
</body>
</html>