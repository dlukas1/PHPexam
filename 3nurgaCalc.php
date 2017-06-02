<!--"Loo lihtne kalkulaator, mis arvutab täisnurkse kolmnurga kahe kaateti järgi välja hüpotenuusi pikkuse."
1. Form to enter lengths
2. Get data
3. Count & echo-->

<form method="post">
	<input type="text" name="a" placeholder="side A">
	<input type="text" name="b" placeholder="side B">
	<input type="submit" name="submit">
</form>

<?php
	if (isset($_POST['a']) &&!empty($_POST['a']) && isset ($_POST['b']) && !empty($_POST['b'])) {
		$a = $_POST['a'];
		$b = $_POST['b'];
		$c = hypot($a, $b);
		echo "Kaateti pikkus on: " . number_format((float)$c, 2);
		
	}


?>