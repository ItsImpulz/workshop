<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="styles.css">
		<title>Gratis workshop webdesign!</title>
		<style>
			h1 {color:teal;}
			h4 {color:teal;}
			select{
			display: block;
			margin: 0 auto;
			}
		</style>
	</head>
	
	<body>
		<?php include ("WebdesignExtern.php"); ?>
		<center><h1>Hallo, welkom op de website en leuk dat je je in wilt schrijven voor de gratis workshop.<br>We zouden eerst graag wat gegevens willen hebben.</h1>
	
		<br>
		
		<form method='POST'>
			<select name="geslacht">
			<option value='Dhr.'>Dhr.</option>
			<option value='Mevr.'>Mevr.</option>
			</select>
			
			<p>Voornaam</p>			<p><input type="text" name="voornaam"/></p>
			<p>Achternaam</p>  		<p><input type="text" name="achternaam"/></p>
			<p>Woonplaats </p>		<p><input type="text" name="woonplaats"/></p>
			<p>Telefoonnummer</p> 	<p><input type="text" name="telefoonnummer"/></p>
			<p>Email</p> 			<p><input type="text" name="email"/></p>
			<p><input type="submit" name="btnVersturen" value="Verzenden"/></p>
			
			<h4><p align ="center">Om je in te schrijven, zul je moeten kiezen tussen de volgende twee dat.</p></h4>
			<p>Dinsdag 12 Februari 2019 van 09:00u - 13:30u  <input type="submit"/></p>
			<p>Woensdag 13 Februari 2019 van 13:00u - 17:30u <input type="submit"/></p>
			<br>
		</form>
			
		<?php
		error_reporting(0);
		
		if(isset($_POST["btnVersturen"]))
		{
			$firstname = $_POST["voornaam"];
			$lastname = $_POST["achternaam"];
			$city = $_POST["woonplaats"];
			$phonenumber = $_POST["telefoonnummer"];
			$email = $_POST["email"];
			
			$query = "INSERT INTO participants (firstname, lastname, city, phonenumber, email) ".
             "VALUES ('$firstname', '$lastname', '$city', '$phonenumber', '$email')";

			// var_dump($query);
			
			$stm = $con->prepare($query);
			
			if($stm->execute()){
				echo "De inschrijving is succesvol opgeslagen!";
			} else {
				echo "Er is helaas iets mis gegaan!";
			}
		}



		?>
		</center>
	</body>		
</html>