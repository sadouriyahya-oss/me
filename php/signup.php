<?php 
include("calsses/connect1.php");
include("calsses/signup.php");

if($_SERVER['REQUEST_METHOD'] == 'POST') 
{
	$signup = new Signup();
	$result = $signup->evaluate($_POST);
	echo $result;
	//echo "<pre>";
	//print_r($_POST);
	//echo "</pre>";

}



 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SadouriYahya | Sign up</title>
</head>
<style>
	#di{
		height: 100px;
		background-color: #3c5a99;
		color: white;
		padding: 4px;
		
	}
	#signup{
		background-color: green;
		width:70px;
		text-align: center;
		padding: 4px;
		border-radius: 4px;
		float: right;
	}
	#central_menu{

		background-color: white;
		width: 800px;
		margin: auto;
		margin-top: 50px;
		padding: 10px;
		padding-top: 50px;
		text-align: center;
		font-weight: bold;


	}
	#text{
		height: 40px;
		width: 300px;
		border-radius: 4px;
		border: solid 1px #888;
		padding: 4px;
		font-size: 14px;
	}
	#button{
		width: 300px;
		height: 40px;
		border-radius: 4px;
		border: none;
		background-color: darkred;
		color: white;
	}
	
</style>
<body style="font-family: tahoma;background-color: #e9ebee;">
	<div id="di" >
	
	<div style="font-size: 40px;" >SadouriYahya</div>
	<div id="signup">log in</div>
	

</div>
	<div id="central_menu">
		Sign up to my website
			<br><br>
<form method="post" action="">
		<input name="first_name" type="text" placeholder="First name" id="text"><br><br>
		<input name="last_name" type="text" placeholder="Last name" id="text"><br><br>
		<span style="font-weight: normal;">Gender:</span> <br>
		<select id="text" name="gender" >
			<option>Male</option>
			<option>Female</option>
		</select> <br><br>
		<input name="email" type="text" placeholder="Email" id="text"><br><br>
		<input name="password" type="Password" placeholder="Password" id="text"><br><br>
		<input name="password2" type="Password" placeholder="Retype Password" id="text"><br><br>
		<input type="submit" id="button" value="Sign up"><br><br>
	</form>
</div>
	
</body>
</html>