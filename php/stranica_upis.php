<html>
<head>
		<title>Upis</title>
		<link rel="shortcut icon" href="favicon.ico" />
		<link rel="stylesheet" type ="text/css" href="stranica_upis.css" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
 <div id="upis">
 <?php
include 'stranica_spoj.php';

$sql="INSERT INTO korisnici (Ime, Prezime, Adresa, Email, Username)
VALUES ('$_POST[Ime]', '$_POST[Prezime]', '$_POST[Adresa]','$_POST[Email]','$_POST[Username]')";
if (!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
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