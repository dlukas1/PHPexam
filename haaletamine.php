<!--"Loo lihtne hääletuse süsteem. Kasutaja saab hääletada kas \"jah\"/\"ei\". Kuva välja \"jah\"-ide ja \"ei\"-de arv.",-->

<form method="get">
	<input type="radio" name="haal" value="yes">YES<br>
	<input type="radio" name="haal" value="no">NO<br><br>
	<input type="submit" name="submit" value="haaleta">
	
</form>

<?php
$yes = 0;
$no = 0;
if (isset($_GET['haal'])) {
	$haal = $_GET['haal'];
	echo "Sina haalesid: ".$haal. "<br/>";

			$user = "root";
			$pass = "";
			$db = "test";
			$host = "localhost";
			$link = mysqli_connect($host, $user,$pass, $db) or die("ei saanudühendatud - " . mysqli_error());
			if ($haal=='yes') {
				$put = "UPDATE dlukas_vote SET yes = yes + 1;";
			} else {
				$put = "UPDATE dlukas_vote SET no = no + 1";
			}
			$insert = mysqli_query($link, $put) or die(mysqli_error($link));


			$yesquery = "SELECT * FROM dlukas_vote";
			$yesres = mysqli_query($link, $yesquery) or die("$query - ".mysqli_error($link));
			
						$row = mysqli_fetch_assoc($yesres);
						echo "Haaleid YES on: " . $row['yes']. "<br/>";
						echo "Haaleid NO on: " . $row['no']. "<br/>";


}

	

	

?>