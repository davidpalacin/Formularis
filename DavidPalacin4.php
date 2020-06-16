<?php
	if($_POST)
	{	
		$num1 = $_POST
		['numero'];
		$num2 = $_POST
		['numero2'];
		$num3 = $_POST
		['numero3'];
		$suma = $num1 
		+ $num2 + $num3;
		echo $num1.", <br>+".$num2."<br>+".$num3."<br>=".$suma; 
	}
?>

