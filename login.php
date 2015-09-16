<?php

	// LOGIN.PHP
	$email_error = "";
	$password_error = "";
	// echo $_POST["email"];

	// kontrollime, et keegi vajutas input nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		//echo "keegi vajutas nuppu";
		
		
		if(empty($_POST["email"]))  {
			$email_error = "Email on kohustuslik!";
			
			
		}
		
		if(empty($_POST["password"])) {
			$password_error = "Parool on kohustuslik!";
		} else {
			
			//kui oleme siia jõudnud siis parool ei ole tühi
			//kontrollin et olek vähemalt 8 sümbolit pikk
			if(strlen($_POST["password"]) < 8) {
				
				$password_error = "Parool peab olema vähemalt 8 tähemärki pikk!";
				
			}
		}
		
	}






?>
<html>
<head>
	<title>HV Login page</title>
	<meta charset="UTF-8">
</head>
<body>
	<center>
		<h1>Logi sisse</h1>
			<form action="login.php" method="post">
				Kasutajanimi:<br>
				<input name="email" type="email" placeholder="E-post"><br>
				Parool:<br>
				<input name="password" type="password" placeholder="Parool"><br><br>
				<input type="submit" value="Logi sisse"><br><br>
				<?php echo $password_error; ?>
			<?php echo $email_error; ?>
			</form>
	</center>
<center><a href="registreeri.php">Pole kasutajat? Registreeri siin!</a></center>
</body>
</html>