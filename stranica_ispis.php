<html>
<head>
	<title>Ispis</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" type ="text/css" href="stranica_ispis.css" />
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
		
<div id="ispis">
<?php
$con=mysqli_connect("localhost","root","","stranica");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM korisnici");

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Ime</th>
<th>Prezime</th>
<th>Adresa</th>
<th>E-mail</th>
<th>Username</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['ID'] . "</td>";
echo "<td>" . $row['Ime'] . "</td>";
echo "<td>" . $row['Prezime'] . "</td>";
echo "<td>" . $row['Adresa'] . "</td>";
echo "<td>" . $row['Email'] . "</td>";
echo "<td>" . $row['Username'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
</div>
<br>
<div id="footer">
<a href="registracija.php">Registracija</a>
</div>
</body>
</html>