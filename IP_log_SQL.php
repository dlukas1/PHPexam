<!--"Loo veebilehe külastajate IP-aadressite log. Andmed salvesta andmebaasi. Kuva erinevate IP-aadressite arvu."-->

<?php
		$ip = $_SERVER['REMOTE_ADDR'];
		echo "Sinu ip address on: ". $ip."<br/>";

		$user = "test";
		$pass = "t3st3r123";
		$db = "test";
		$host = "localhost";
		$link = mysqli_connect($host, $user,$pass, $db) or die("ei saanudühendatud - " . mysqli_error());
		
		//$query = "INSERT INTO counter(nimi) VALUES ('$ip')";
		$query = "INSERT INTO dlukas_iplog(user_ip) VALUES ('$ip')";
		
		$result = mysqli_query($link, $query) or die("$query - ".mysqli_error($link));
		$queryDist = "SELECT DISTINCT user_ip FROM dlukas_iplog";
		$resultDist = mysqli_query($link, $queryDist);
		while ($row = mysqli_fetch_assoc($resultDist)) {
			echo "<br/> Kasutaja {$row['user_ip']}  <br/>";
		}

			
?>