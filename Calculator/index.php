<!DOCTYPE html>
<html>
<head>
	<title>forms</title>
</head>
<body>
	<!-- form[method(get&post) && action] -->
	<?php
		if (isset($_POST["sum"])){
			if (!empty($_POST["num1"]) && !empty($_POST["num2"])){
				echo sum($_POST["num1"],$_POST["num2"]);		
			}else{
				echo "Invalid";
			}	

		}else if (isset($_POST["sub"])){
			if (!empty($_POST["num1"]) && !empty($_POST["num2"])){
				echo sub($_POST["num1"],$_POST["num2"]);		
			}else{
				echo "Invalid";		
			}
		}else if (isset($_POST["multi"])){
			if (!empty($_POST["num1"]) && !empty($_POST["num2"])){
				echo multi($_POST["num1"],$_POST["num2"]);		
			}else{
				echo "Invalid";
			}
		}else if (isset($_POST["div"])){
			if (!empty($_POST["num1"]) && !empty($_POST["num2"])){
				echo divi($_POST["num1"],$_POST["num2"]);		
			}else{
				echo "Invalid";
			}
		}
		function sum($num1,$num2){
			return $num1+$num2;
		}
		function sub($num1,$num2){
			return $num1-$num2;
		}
		function multi($num1,$num2){
			return $num1*$num2;
		}
		function divi($num1,$num2){
			return $num1/$num2;
		}
	?>
	<br>
	<form method="POST" action="">
		<label>First One</label><br>
		<input type="number" name="num1"><br>
		<label>Second One</label><br>
		<input type="number" name="num2"><br><br>
		<input type="submit" name="sum" value="+">
		<input type="submit" name="sub" value="-">
		<input type="submit" name="multi" value="*">
		<input type="submit" name="div" value="/">
		
	</form>

</body>
</html>