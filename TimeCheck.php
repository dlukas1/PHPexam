<?php
//"Loo veebilehekülg, mis kuvab, kas kasutaja kell on õige (ehk serveri kellaga sama). Kuva lehel ka mõlemad kellaajad."
global $tme;
echo date("d-m-Y H:i:s")."<br/><br/>";

echo date('d-m-Y H:i:s', $_SERVER['REQUEST_TIME']);

if (date("d-m-Y H:i:s") == date('d-m-Y H:i:s', $_SERVER['REQUEST_TIME'])) {
	echo "<br/>Sinu kell on 6ige";
} else {
	echo "<br/>Sinu kell on vale";
}

?>

<p id="demo"></p>

<script>
document.getElementById("demo").innerHTML = Date();
var tme = Date();
</script>