<?php
//"Loo lihtne lehekülg, mis kuvab välja kõik selle lehe külastuste ajad."

$time = date("d-m-Y H:i:s")."<br/>";
$file = 'timelog.txt';

file_put_contents($file, $time, FILE_APPEND | LOCK_EX);
		include $file;

?>