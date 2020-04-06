<!DOCTYPE html>
<html>
<head>

    <title>Ispis</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="shortcut icon" href="../resources/images/favicon.ico" />
    <link rel="stylesheet" type ="text/css" href="../resources/styles/stranica_ispis.css" />

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
		
    <div id="ispis">
	<?php
	$con=mysqli_connect("localhost","root","","user_db");
	// Check connection
	if (mysqli_connect_errno())
	{
	    echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$result = mysqli_query($con,"SELECT * FROM korisnici");

	echo "<table border='1'>
	<tr>
	<th>Ime</th>
	<th>Prezime</th>
	<th>Adresa</th>
	<th>E-mail</th>
	<th>Username</th>
	</tr>";

	while($row = mysqli_fetch_array($result))
	{
	    echo "<tr>";
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
	<a href="../html/registracija.html">Registracija</a>
    </div>
</body>
</html>
