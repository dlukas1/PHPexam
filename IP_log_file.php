<!--"Loo veebilehe külastajate IP-aadressite log. Andmed salvesta tekstifaili. Kuva külastuste arvu."-->

<?php
		$ip = $_SERVER['REMOTE_ADDR'];
		echo "Sinu ip address on: ". $ip."<br/>";

		$file = 'iplog.txt';
		$current = $ip.PHP_EOL;
		file_put_contents($file, $current, FILE_APPEND | LOCK_EX);
		$logs = file($file);
			$nums = count($logs);
			echo "Kylaliste arv on " . $nums;

			
?>