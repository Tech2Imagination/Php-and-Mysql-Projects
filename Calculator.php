<?php

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		/**{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}*/
		.container{
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);
			
		}
		.heading{
		
			font-size: 5rem;
			text-align: center;
			color: white;
			font-weight: bold;
			margin-top: -100px;
			margin-bottom: 25px;
		}
		.data{
			text-align: center;
			height: 25px;
			padding: 15px;
		}
		.data > input{
			font-size: 1.5rem;
			text-align: center;

		}
		.content{
			padding: 50px;
		}
		.select > option{
			font-size: 1rem;
			color: white;
		}
		.select{
			padding: 5px 45px;
			font-size: 1rem;
			background-color: black;
			color: white;
			margin: 15px 0;
		}
		.submit{
			margin: 20px 0;
			color: white;
		}
		.submit > input{
			background-color: black;
			color: white;
			cursor: pointer;
			width: 280px;
			padding: 5px 25px;
		}
		.submit > input:hover{
			box-shadow: 10px 5px 5px greenyellow;
		}
		.text{
			text-align: center;
			color: white;
			font-size: 1.5rem;
			font-weight: bold;
			margin: 50px;
		}


	</style>
</head>
<body>
	<form method="POST">
	<div class="container">
		<div class="content">
		<div class="heading">Calculator</div>
		<div class="data"><input type="text" name="num1" value="" placeholder="0"></div>
		<div class="data"><input type="text" name="num2" value="" placeholder="0"></div>
		<div class="data">
			<select name="select" class="select">
			    <option value="add">Add</option>
			    <option value="sub">Sub</option>
			    <option value="div">Div</option>
			    <option value="mult">Mult</option>
		    </select>
	    </div>
		<div class="data submit"><input type="submit" name="submit"></div>
		</form>
		<div class="text"><p>
			<?php
			if (isset($_POST['submit'])) {
				$num1 = $_POST['num1'];
				$num2 = $_POST['num2'];
				$select = $_POST['select'];
				switch ($select) {	
					case "add":
					$sum = $num1 + $num2;
						echo 'the addition of two number is '.$sum;
						break;
					case "sub":
					$sub = $num1 - $num2;
						echo 'the subtract of two number is ' .$sub;
						break;
						case "div":
					$div = $num1 / $num2;
						echo 'the divide of two number is '. $div;
						break;
						case "mult":
					$mult = $num1 * $num2;
						echo 'the multiplication of two number is '. $mult ;
						break;
					default:
						echo 'Enter please value the number';
					
				}
			}
			?>
		</p></div>
		</div>
	</div>
</body>
</html>

