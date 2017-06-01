<!-- "Loo lihtne veebilehe külastajate loendur. Andmed salvesta andmebaasi. Kuva lehel külastuste arvu." -->

<?php
session_start();

// Has visitor been counted in this session?
// If not, increase counter value by one

if(!isset($_SESSION['hasVisited']))
{
  $_SESSION['hasVisited']="yes";

  //zapisat v bazu dannih
  	$user = "root";
	$pass = "";
	$db = "test";
	$host = "localhost";
	$link = mysqli_connect($host, $user,$pass, $db) or die("ei saanudühendatud - " . mysqli_error());
		
	$query = "UPDATE counter SET count = count+1 WHERE id = 2";
		//osushestvlajem zapros k baze dannih
	$result = mysqli_query($link, $query) or die("$query - ".mysqli_error($link));
		//kontroll kas komment on salvestatud
	if ($result = 'true'){echo "counted <br/>";}	else 	{echo "fuck";}
	}

	$getCount = "SELECT count FROM counter WHERE id=2";
	$user = "root";
	$pass = "";
	$db = "test";
	$host = "localhost";
	$link = mysqli_connect($host, $user,$pass, $db) or die("ei saanudühendatud - " . mysqli_error());
		$res2 = mysqli_query($link, $getCount) or die("Not entered");
		
			$row = mysqli_fetch_assoc($res2);
	

	
			echo "Kylaliste arv on: ".$row['count'];




session_destroy(); //так при каждой перезагрузке он считает что мы новый посетитель

?>