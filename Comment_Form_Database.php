<form method="post"> 
Name: <input type="text" name="name"><br><br>
E-mail: <input type="text" name="email"><br><br>
Comment: <textarea name="comment" rows="5" cols="40"></textarea>
<p><input type="submit"></p>
</form>

<?php

if(isset($_POST['name']) && isset ($_POST['email']) && isset ($_POST['comment']) && !empty ($_POST['comment']))
{

	$name = htmlspecialchars($_POST['name']) ;
	$email = htmlspecialchars($_POST['email']) ;
	$comment = htmlspecialchars($_POST['comment']) ;



	//ustanovim svjaz s bazoj dannih
$user = "root";
$pass = "";
$db = "test";
$host = "localhost";
$link = mysqli_connect($host, $user,$pass, $db) or die("ei saanudühendatud - " . mysqli_error());
	//formiruem zapros
$query = "INSERT INTO dlukas_comments(nimi, email, comment) VALUES ('$name', '$email', '$comment')";
	//osushestvlajem zapros k baze dannih
$result = mysqli_query($link, $query) or die("$query - ".mysqli_error($link));
	//kontroll kas komment on salvestatud
if ($result = 'true'){echo "komment salvestatud";}	else 	{echo "kommenteerimine eba6nnestus";}
	// 4istim massiv $_POST
unset($_POST); 

	//dlja vivoda spiska na ekran
$query = "SELECT nimi, email, comment FROM dlukas_comments";
$comlist = mysqli_query($link, $query) or die("$query - ".mysqli_error($link));
	//poka mysqli_fetch_assoc daet zna4enija - cikl piwet dannie massiva
while ($row = mysqli_fetch_assoc($comlist)) {
	echo "<br/> Kasutaja <strong>{$row['nimi']} </strong>e-mailiga {$row['email']} on jaanud komment: <i> {$row['comment']} </i>. <br/>";
		}
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
				$queryErase = "DELETE FROM dlukas_comments";
				$erase = mysqli_query($link, $queryErase) or die("Ei saa kustutada");
			}
		?>
</form>


