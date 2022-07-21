<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		//creo una variabile
		$myTest = ("ciao sono un test su php per un test");		
		//stampo la variabile
		$badWord = $_GET['test'];
	?>	
	<h1> 
		<?php echo $myTest;
				
	?>
	</h1>

	<div>
		la tua stringa è
		<?php
		//lunghezza stringa
		echo  strlen($myTest);
		?>
		caratteri
	</div>

	<h1>
		<?php
			//censuro la parola test
		 echo str_replace($badWord, '***', $myTest);
		?>
	</h1>

	<div>
		la tua stringa è
		<?php 
		// lunghezza parola censurata
		echo strlen(str_replace($badWord, '***', $myTest));
		?>
		caratteri
	</div>
</body>
</html>