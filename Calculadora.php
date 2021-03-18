<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>

<form>
	<input type="text" name="num1" placeholder="Number1">
	<input type="text" name="num2" placeholder="Number2">
	<select name="operator">
		<option>None</option>
		<option>Add</option>
		<option>Subtract</option>
		<option>Multiply</option>
		<option>Divide</option>
	</select>
	<br>
	<button type="submit" name="submit" value="submit">Calculate</button>
</form>
<p>The answer is: </p>
<?php
	//tiene que estar corriendo en xampp o en compu con php instaladao,en la carpeta del server
	if (isset($_GET['submit'])) {
		$result1 = $_GET['num1'];
		$result2 = $_GET['num2'];
		$operator = $_GET['operator'];
		switch ($operator) {
			case "None":
				echo "You need to select a method!";
			break;
			case "Add":		//sería divertido implementar una suma en C
				echo $result1 + $result2;
			break;
			case "Subtract":	//y este con python
				echo $result1 - $result2;
			break;
			case "Multiply":	//este con java
				echo $result1 * $result2;
			break;
			case "Divide":		//y este con
				echo $result1 / $result2;
			break;
		}
	}
?>

</body>

</html>