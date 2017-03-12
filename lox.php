<!DOCTYPE html>
<html>
	<head>
		<title>Changing</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	</head>

	<style type="text/css">
		#login{
			display: block;
		}

		#register{
			display: none;
		}

	</style>

	<body>

		<button style="padding: 10px 12px; margin: 20px;">I wan't register!</button>

		<section id="login">
			<form action="#login.php" method="POST">
				<label>Username: </label>
				<input type="text" name="username" placeholder="Enter username..." required><br>
				<label>Password: </label>
				<input type="password" name="password" placeholder="Enter password..." required><br>
				<input type="submit" value="Log In">
			</form>
		</section>

		<section id="register">
			<form action="#register.php" method="POST">
				<label>Username: </label>
				<input type="text" name="username" placeholder="Enter username..." required><br>

				<label>E-mail: </label>
				<input type="email" name="e-mail" placeholder="Enter e-mail..." required><br>

				<label>Password: </label>
				<input type="password" name="password" placeholder="Enter password..." required><br>

				<label>Repeat password: </label>
				<input type="password" name="password-rep" placeholder="Enter password again..." required><br>

				<input type="submit" value="Log In">
			</form>
		</section>

	</body>

	<script type="text/javascript">
		function ButtonText() {
		    if ($("#login").is(":visible")) {
		        $("button").text("I want REGISTER!");
		    } else {
		        $("button").text("I want LOGIN!");
		    }
		}

		ButtonText();
		$("button").click(function () {
		    $("#login").toggle();
		    $("#register").toggle();
		    ButtonText();
		});
	</script>

</html>