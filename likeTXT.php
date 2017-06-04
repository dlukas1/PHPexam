<!--"Loo leheküljele \"like\" nupp. Kuva välja \"like\"-ide arvu. Andmed salvesta tekstifaili.",-->

<div align="middle" class="brd">
	<form method="post">
		<input type="image" src="like.jpeg" name="like" value="like">
	</form>
</div>

<?php
	if(isset($_POST['like'])) {
		$file = 'like.txt';
		$current = file_get_contents($file);


		$current = $current + 1;
		file_put_contents($file, $current);
		$logs = file($file);
			
			echo "Likede arv on  " . $current;


		}
 ?>