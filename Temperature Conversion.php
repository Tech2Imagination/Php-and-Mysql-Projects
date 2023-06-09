<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Temperature Conversion</title>
	<style type="text/css">
		.container{
			width: 100%;
			height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
			background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
		}
		.content{
			width: 700px;
			border: 2px solid pink;
		}
		.heading{
			font-size: 3.5rem;
			color: #F72585;
			text-align: center;
		}
		.box{
			display: flex;
			margin: 25px;
			justify-content: flex-start;
		}

		.box-one > img{
		    width: 350px;
		}
		.box-two{
			width: 700px;
			text-align: center;
			padding-top: 50px;
		}
		.box-two > .input >input{
			width: 200px;
			font-size: 1.5rem;
		}
		.text > p{
			text-align: center;
			font-size: 1.5rem;
			color: white;
		}
		.radio{
			display: flex;
			justify-content: center;
			gap: 25px;
			padding-top: 15px;
		}
		.radio > p{
			font-size: 1.2rem;
		}
		.btn > input{
			padding: 12px 50px;
			font-size: 1.5rem;
			margin-top: 25px;
			background-color: #F72585;
			color: white;
			border: none;
			transition: .2s ease-in-out;
		}
		.btn > input:hover{
			box-shadow: 10px 5px 5px #E4609B;
		}
		
	</style>
</head>
<body>
	<form method="POST">
	<div class="container">
		<div class="content">
			<div class="heading">Temperature Conversion</div>
			<div class="box">
				<div class="box-one"><img src="temperature.png"></div>
				<div class="box-two">
					<div class="input"><input type="text" name="input" placeholder="0"></div>
					<div class="radio"><p>Celcius<input type="radio" name="radio" value="cel"></p>
						<p>Faren<input type="radio" name="radio" value="Far"></p></div>
					<div class="btn"><input type="submit" name="submit"></div>
				</div>
			</div>
			<div class="text"><p>
		<!-- php code -->
         <?php
             if (isset($_POST['submit'])) {
	         $data = $_POST['input'];
	         $radio = $_POST['radio'];
	             if ($radio == "cel") {
		             $result = $data* 9 / 5 + 32;
		             echo "The Conversion value of  cel in faren is " . $result;
	         }
	         else{
		         $result = ($data - 32) * 5 / 9;
		         echo "The Conversion value of  cel in faren is " . $result;
	         }
          }
        ?>
	</p></div>
		</div>

	</div>
	
	</form>
</body>
</html>


