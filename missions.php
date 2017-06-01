<?php
 
 class MyMission {
 
 	private $missions = array(
 +		"OK - Loo lihtne kommentaaride lisamise vorm. Andmed salvesta andmebaasi. Kuva salvestaud kommentaare.",
 +		"OK - Loo lihtne kommentaaride lisamise vorm. Andmed salvesta tekstifaili. Kuva salvestatud kommentaare.",
 +		"OK - Loo lihtne veebilehe külastajate loendur. Andmed salvesta andmebaasi. Kuva lehel külastuste arvu.",
 +		"OK - Loo lihtne veebilehe külastajate loendur. Andmed salvesta tekstifaili. Kuva lehel külastuste arvu ja viimase külastuse aega.",
 +		"OK - Loo veebilehe külastajate IP-aadressite log. Andmed salvesta andmebaasi. Kuva erinevate IP-aadressite arvu.",
 		"Loo veebilehe külastajate IP-aadressite log. Andmed salvesta tekstifaili. Kuva külastuste arvu.",
 +		"OK - Loo faili ülesse laadimise vorm. Luba laadida ülesse vaid pildifaile. Kuva ülesse laetud failide arv. (UploadForm+UploadImage",
 		"Loo faili ülesse laadimise vorm. Luba laadida ülesse vaid tekstifaile. Kuva ülesse laetud failide arv.",
 + 		"OK - Loo lehekülje hindamise võimalus (skaalal 1-5 näiteks). Kuva välja leheküljele antud keskmist hinnet. Andmed salvesta andmebaasi.",
 +		"OK - Loo lehekülje hindamise võimalus (skaalal 1-5 näiteks). Kuva välja leheküljele antud keskmist hinnet. Andmed salvesta tekstifaili.",
 +		"OK - Loo leheküljele \"like\" nupp. Kuva välja \"like\"-ide arvu. Andmed salvesta andmebaasi.",
 		"Loo leheküljele \"like\" nupp. Kuva välja \"like\"-ide arvu. Andmed salvesta tekstifaili.",
 +		"OK - Loo veebilehekülg, mis kuvab kasutajale, mitmendat korda kasutaja lehekülge külastab (kylastamiseLoendur).",
 +		"OK - Loo veebilehekülg, mis kuvab kasutajale, kuna kasutaja viimati seda veebilehte külastas(kylastamiseLoendur).",
 		"Pooleni - Loo veebilehekülg, mis kuvab, kas kasutaja kell on õige (ehk serveri kellaga sama). Kuva lehel ka mõlemad kellaajad."
 	);
 	private $my;
 
 	public function __construct() {
 		if (!isset($_COOKIE["mymission"])) {
 			$this->my = $this->missions[array_rand($this->missions)];
 			setcookie("mymission", $this->my, time()+3600*24);
 		} else {
 			$this->my = $_COOKIE["mymission"];
 		}
 	}
 
 	function getMyMission() {
 		return $this->my;
 	}
 
 }