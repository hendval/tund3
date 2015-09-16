<?php

	// LOGIN.PHP
	$email_error = "";
	$password_repeat_error = "";
	$password_error = "";
	// echo $_POST["email"];

	// kontrollime, et keegi vajutas input nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		//echo "keegi vajutas nuppu";
		
		
		if(empty($_POST["email"]))  {
			$email_error = "VEATEADE: Email on kohustuslik!";
		}
		
		if(empty($_POST["password"])) {
			$password_error = "VEATEADE: Parool on kohustuslik!";
		} else {
			//kui oleme siia jõudnud siis parool ei ole tühi
			//kontrollin et olek vähemalt 8 sümbolit pikk
			if(strlen($_POST["password"]) < 8) {
				$password_error = "VEATEADE: Parool peab olema vähemalt 8 tähemärki pikk!";
			}
			if($_POST["password"] != $_POST["password_repeat"]) {
				$password_repeat_error = "VEATEADE: Paroolid peavad kattuma!";
			}
		}
		
		
	}






?>
<html>
<head>
	<title>HV Register page</title>
	<meta charset="UTF-8">
</head>
<body>
	<center>
		<h1>Registreeri</h1>
			<form action="registreeri.php" method="post">
				Kasutajanimi:<br>
				<input name="email" type="email" placeholder="E-post"> <br>
				Parool:<br>
				<input name="password" type="password" placeholder="Parool"><br>
				Parool uuesti:<br>
				<input name="password_repeat" type="password" placeholder="Parool uuesti"><br><br>
				<input type="submit" value="Registreeri"><br><br>
				<?php echo $password_repeat_error; ?><?php echo $password_error; ?><?php echo $email_error; ?>
			</form>
	</center>
<center><a href="login.php">Kasutaja olemas? Logi sisse siin!</a></center>
<br>
<center><p>Plaanin teha jackpot lehekülje. Idee seisneb selles, et teed kasutaja ja logid sisse. Iga kasutaja saab 1000 krediiti. Siis algab jackpot pihta. <br>Näiteks 10 inimest panustavad X summa ja sellest sõltub poti suurus. Panustuse ja kogupoti suhe on iga inimese võiduvõimalus. <br>Näiteks panustad 1000 krediiti ja kokku on potis 10 000 krediiti - sinu võiduvõimalus on 10%.</p></center>
</body>
</html>