<?php
// Start the session
session_start();
require_once("../connection.php");
require_once("../model/model.php");
require_once("../model/user.php");
$user = User::find();
echo(json_encode($user));
?>

<!-- <!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script>
		$(document).ready(function () {
			$("#login").click(function () {
				$.post("user-execute.php", {username : $("#username").val(), password : $("#password").val()}, function (returnedData) {
						alert(returnedData);
				});
			});
		});
	</script>
</head>
<body>

<label>UserName :</label>
<input id="username" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<button id = "login" > Login </button>


</body>
</html> -->