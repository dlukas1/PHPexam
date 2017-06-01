<!--//"Loo lehekülje hindamise võimalus (skaalal 1-5 näiteks). Kuva välja leheküljele antud keskmist hinnet. Andmed salvesta andmebaasi.",-->

<form method="post">
    <input type="radio" name="voice" value="1" /> 1<br />
    <input type="radio" name="voice" value="2" /> 2<br />
    <input type="radio" name="voice" value="3"/> 3<br />
    <input type="radio" name="voice" value="4" /> 4<br />
    <input type="radio" name="voice" value="5" /> 5<br />
    <input type="submit" name = "submit" value="Haaleta!" />
</form>

<?php
if( isset( $_POST['voice'] ) )
	{	$hinne = $_POST['voice'];
		echo "Sinu hinne on: " . $hinne . "<br/>";	
			$user = "root";
			$pass = "";
			$db = "test";
			$host = "localhost";
			$link = mysqli_connect($host, $user,$pass, $db) or die("ei saanudühendatud - " . mysqli_error());
			$query = "INSERT INTO dlukas_hinne(hinne) VALUES ('$hinne')";
			$result = mysqli_query($link, $query) or die("$query - ".mysqli_error($link));
			if ($result){echo "Hinne salvestatud andmebaasile <br/>";
						$query2 = "SELECT AVG (hinne) FROM dlukas_hinne";
						$result2 = mysqli_query($link, $query2) or die("$query - ".mysqli_error($link));
						$keskmine = implode(mysqli_fetch_assoc($result2)) ;
						echo "Keskmine hinne on: " . $keskmine;
		}	else 	{echo "Hinne ei ole salvestatud <br/>";}
}
?>