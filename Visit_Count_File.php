<!-- "Loo lihtne veebilehe külastajate loendur. Andmed salvesta tekstifaili. Kuva lehel külastuste arvu ja viimase külastuse aega." -->

<?php
//1-read last visit time from file
//2-read visit nums from file++
//3-write new data to file
session_start();


$file = 'counter.txt';

      if(filesize($file)) //kui fail ei ole tyhi
      {
          $cont = file('counter.txt'); //loeme fail massiivina
          $arv = $cont[0] ;//saame vaartused
          $kell = $cont[1];
          $uusarv = $arv+1;//lisame uus vaartus

              echo "Oled kylaline number " .$uusarv. "<br>";
              echo "Viimane kylastus ".$cont[1] . "<br>";

              //lisame uued andmed
              $date = date("d-m-Y H:i:s");
              $datei = fopen($file,'w');
              $uus = $uusarv  .PHP_EOL . $date;
              fwrite($datei, $uus, FILE_APPEND);
              fclose($datei);
                 
                  }
//kui fail on tyhi
    else {
      echo "Sina oled esimene kylaline!";
      $count=1;
      $date = date("d-m-Y H:i:s");
      $datei = fopen($file,'w');
      $uus = $count . PHP_EOL . $date;
      fwrite($datei, $uus);
      fclose($datei);
    }

?>

