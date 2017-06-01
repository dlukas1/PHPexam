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

		$file = 'log.txt';
			// Открываем файл для получения существующего содержимого
		$current = file_get_contents($file);

			// Добавляем новые данные в файл
		$current = $name." - ".$email." - ".$comment."<br/>";
			// Пишем содержимое в файл,
			// используя флаг FILE_APPEND flag для дописывания содержимого в конец файла
			// и флаг LOCK_EX для предотвращения записи данного файла кем-нибудь другим в данное время
		file_put_contents($file, $current, FILE_APPEND | LOCK_EX);
		include 'log.txt';
		
	}
?>
