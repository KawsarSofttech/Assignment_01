<!DOCTYPE html>
<html>
<head>
	<title>Sum_Get Method</title>
</head>
<body>
	<!-- form[method-get && action] -->
	<?php
		if (isset($_GET["submit"])){
			if (!empty($_GET["num1"]) && !empty($_GET["num2"]) && !empty($_GET["num3"])){
				echo sum($_GET["num1"],$_GET["num2"],$_GET["num3"]);
			}else{
				echo "Invalid";
			}
		}	
		function sum($num1,$num2,$num3){
			return $num1+$num2+$num3;
		}	
	?>
	<form method="GET" action="">
		<label>First One</label><br>
		<input type="number" name="num1"><br>
		<label>Second One</label><br>
		<input type="number" name="num2"><br>
		<label>Last One</label><br>
		<input type="number" name="num3"><br><br>
		<input type="submit" name="submit" value="Add">

		
	</form>

</body>
</html>