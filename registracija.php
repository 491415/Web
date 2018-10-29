<html>
	<head>
	<title>Registracija</title>
		<link rel="shortcut icon" href="favicon.ico" />
		<link rel="stylesheet" type ="text/css" href="registracija.css" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<style type="text/css">
		input:focus{ background-color:cyan; }
		</style>
	</head>
	
	
	<body>
	<div align="center" id="menu">
			<ul>
				
				<li><a href="pocetna.html">Početna</a></li>
				<li><a href="fakultet.html">Fakultet</a></li>
				<li><a href="privatno.html">Privatno</a></li>
				<li><a target="_blank" href="dino.pdf">Životopis</a></li>
				<li><a href="kontakt.html">Kontakt</a></li>
			</ul>
		</div>
		<div id="reg">
			<h1>Unesite tražene podatke</h1>

				<form method="post" action="stranica_upis.php">
				Ime : <input type="text" name="Ime">
				<br>
				<br>
				Prezime : <input type="text" name="Prezime">
				<br>
				<br>
				Adresa : <input type="text" name="Adresa">
				<br>
				<br>
				E-mail :<input type="text" name="Email">
				<br>
				<br>
				Username : <input type="text" name="Username">
				<br>
				<br>
				<input type="submit" value="Završi">
			</form>
</div>
<div id="footer">
<a href="stranica_ispis.php">Svi korisnici</a>
</div>
</body>
</html>