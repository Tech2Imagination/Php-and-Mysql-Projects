<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		.container{
			display: flex;
			justify-content: center;
			align-items: center	;
			padding: 50px;
			border: 2px solid pink;
			background-color: lightgreen;
		}
		form > h1{
			font-size: 2rem;
		}
		.input > input{
			font-size: 2rem;
			width: 25%;
			float: left;
		}
		.input-two > input	{
			width: 60%;
			padding: 5px;
			margin-left: 15px;
			font-size: 1.5rem;
			background-color: black;
			color: white;


		}
		.p{
			width: 100%;
			background-color: black;
		}
		.p >p{
			font-size: 1.5rem;
			padding: 25px;
			border: 2px solid;
			text-align: center;
			color: white;
		}

	</style>
</head>
<body>
	<div class="container">
		<div class="content">
	<form method="POST">
	<h1>Enter a Number for the Table: </h1>
	<br>
	<div class="input"><input type="text" name="table"></div>
	<div class="input-two"><input type="submit" name="submit"></div>
	</form>
	<div class="p">
	<p>
	<?php 
	if (isset($_POST['submit'])) {
		$num = $_POST['table'];
		$num2 = 1;
		while ($num2 <= 10) {
			echo $num. "&nbsp;".  '*'."&nbsp;"   .$num2. "&nbsp;".  '='.  "&nbsp;".  $num * $num2. "<br>";
			$num2++;
			
		}
	}
	?>
	
	</p>
	</div>
	</div>
	</div>
</body>
</html>






