<?php
 
       $mysqli = new mysqli("localhost",  "root", "", "test");
        $stmt = $mysqli->prepare("INSERT INTO mamangus_exam_results(name, version_control, demo_url, mission, created) VALUES (?, ?, ?, ?, NOW())") or die($mysqli->error);
        $stmt->bind_param('ssss', $_POST["name"], $_POST["version_control"], $_POST["demo_url"], $_COOKIE["mymission"]) or die($stmt->error);
         $stmt->execute() or die($stmt->error);
 
 	echo "Tulemused saadetud, ait&auml;h!";