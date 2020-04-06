<!DOCTYPE html>
<html>
<head>

	<title>Upis</title>
	<link rel="shortcut icon" href="../resources/images/favicon.ico" />
	<link rel="stylesheet" type ="text/css" href="../resources/styles/stranica_upis.css" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<body>
	<div align="center" id="menu">
		<ul>
			<li><a href="../html/pocetna.html">Početna</a></li>
			<li><a href="../html/fakultet.html">Fakultet</a></li>
			<li><a href="../html/privatno.html">Privatno</a></li>
			<li><a target="_blank" href="https://www.linkedin.com/in/dino-kralj-582a04128/">Životopis</a></li>
			<li><a href="../html/kontakt.html">Kontakt</a></li>
		</ul>
	</div>

	<div id="upis">
		<?php

			$con = mysqli_connect("localhost", "root", "", "user_db");
			//Check database connection
			if (mysqli_connect_errno())
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}

			$ime = $_POST['Ime'];
			$prezime = $_POST['Prezime'];
			$adresa = $_POST['Adresa'];
			$email = $_POST['Email'];
			$username = $_POST['Username'];

			$sql="INSERT INTO korisnici (Ime, Prezime, Adresa, Email, Username)
			VALUES ('$ime', '$prezime', '$adresa','$email','$username')";

			if (!mysqli_query($con,$sql))
			{
				echo('Error: ' . mysqli_error($con));
			}

			echo "Upisani ste!";

		?>
	</div>

	<br>

	<div id="footer">
		<a href="stranica_ispis.php">Svi korisnici</a>
	</div>
</body>
</html>