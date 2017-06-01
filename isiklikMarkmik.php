<!--"Loo lihtne lehekülg märkmete tegemiseks. Igal kasutajal on oma isiklikud märkmed."-->
<i>To see your notes - enter your name and press "submit"</i>
<form method="post"> 
Name: <input type="text" name="name"><br><br>
<i>To add note - enter your name and new note:</i><br>
Comment: <textarea name="comment" rows="5" cols="40"></textarea>
<p><input type="submit"></p>
</form>

<?php

if(isset($_POST['name']) && isset($_POST['comment']))
{
	$name = htmlspecialchars($_POST['name']) ;
	$comment = htmlspecialchars($_POST['comment']) ;
	$newentry = $comment."<br/>";

	$file = $name.'.txt';
	
	file_put_contents($file, $newentry, FILE_APPEND | LOCK_EX);


	include $file;
}

?>

