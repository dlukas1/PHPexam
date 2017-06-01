<!--"Loo lehekülje hindamise võimalus (skaalal 1-5 näiteks). Kuva välja leheküljele antud keskmist hinnet. Andmed salvesta tekstifaili.",-->

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
		$file = 'hinne.txt';
		$current = file_get_contents($file);
		$current = $hinne.PHP_EOL;
		file_put_contents($file, $current, FILE_APPEND | LOCK_EX);
		$hinded = file($file);
		$sum = array_sum($hinded);
		$nums = count($hinded);
		$avg = $sum/$nums;
		echo "Keskmine hinne on " . number_format((float)$avg, 2);


		}
?>