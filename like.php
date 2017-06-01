<style type="text/css">
	

}
</style>

<div align="middle" class="brd">
	<form method="post">
		<input type="image" src="like.jpeg" name="like" value="like">
	</form>
</div>

<?php
	if(isset($_POST['like'])) {
		
		$user = "root";
		$pass = "";
		$db = "test";
		$host = "localhost";
		$link = mysqli_connect($host, $user,$pass, $db) or die("ei saanudühendatud - " . mysqli_error());
		
		$query = "UPDATE counter SET count = count+1 WHERE id = 1";
			//osushestvlajem zapros k baze dannih
		$result = mysqli_query($link, $query) or die("$query - ".mysqli_error($link));


		$getCount = "SELECT count FROM counter WHERE id=1";
		$res2 = mysqli_query($link, $getCount) or die("Not entered");
		
			$row = mysqli_fetch_assoc($res2);
	

	
			echo "Likede arv on: ".$row['count'];
			unset($_POST['like']);
	}

 ?>

 <form method="post"> 
	<p><input type="submit" name="Kustuta" value="Kustuta"></p>
		<?php 
			if (isset($_POST['Kustuta'])) {
				$user = "root";
				$pass = "";
				$db = "test";
				$host = "localhost";
				$link = mysqli_connect($host, $user,$pass, $db) or die("ei saanudühendatud - " . mysqli_error());
				$queryErase = "UPDATE counter SET count = 0 WHERE id = 1";
				$erase = mysqli_query($link, $queryErase) or die("Ei saa kustutada");
			}
		?>
</form>
