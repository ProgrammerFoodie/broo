 <!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="res/style/style.css">
	<link rel="stylesheet" type="text/css" href="res/style/content.css">
	<link rel="stylesheet" type="text/css" href="res/style/panels.css">
	<link rel="stylesheet" type="text/css" href="res/style/login_inputs.css">
	<link rel="stylesheet" type="text/css" href="res/style/MContent/news.css">
	<link rel="stylesheet" type="text/css" href="res/style/MContent/statistics.css">
	<link rel="stylesheet" type="text/css" href="res\style\panels\profile.css">
	<link rel="stylesheet" type="text/css" href="res\style\panels\online-stats.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<title>Website No.2</title>

</head>


<body>
<div id="content">
	<header>
		<menu>
			<?php include("/scripts/menu.php") ?>
		</menu>

		<htext>
		<h1>Hello in this wonderful world of ours!</h1>
		<h3>Description about this wonderful world, we have!</h3>
		</htext>
		
	</header>

<main>
	<main class="content">

		<side>
			<?php include("/scripts/sidepanels/profile.php") ?>

		<!-- START OF LOGIN AND REGISTER -->
			<side class="title">Esoša lietotāja pievienošanās <i>vai</i> jauna lietotāja reģistrācija</side>

			<button class="change-form">Es vēlos reģistrēties</button>

			<section id="login">
				<form action="#login.php" method="POST">
					<input type="text" name="username" placeholder="Enter username..." required>
					<input type="password" name="password" placeholder="Enter password..." required>
					<input type="submit" value="Log In">
				</form>
			</section>

			<section id="register">
				<form action="#register.php" method="POST">
					<input type="text" name="username" placeholder="Enter username..." required><br>
					<input type="email" name="e-mail" placeholder="Enter e-mail..." required><br>
					<input type="password" name="password" placeholder="Enter password..." required><br>
					<input type="password" name="password-rep" placeholder="Enter password again..." required><br>
					<input type="submit" value="Log In">
				</form>
			</section>

			<?php include("/scripts/sidepanels/currentstats.php") ?>
		</side>

		<MContent>

			<mcontent class="section">
				<!-- INFO BOX WILL BE HERE -->
					Info box incomming
			</mcontent>
			<mcontent class="section">
			<!-- NEWS -->
					<news>
					<img class="news" src="https://www.w3schools.com/css/img_fjords.jpg">
					<news_content>
						<news class="title">News title here! Very loing title here for fuck sakes!</news>
						<news class="author">Author</news>
						<news class="date">00.00.0000</news>
					</news_content>
					</news>

					<news>
					<img class="news" src="https://www.w3schools.com/css/img_fjords.jpg">
					<news_content>
						<news class="title">News title here! Testing how long of title i can really put in here!</news>
						<news class="author">Author</news>
						<news class="date">00.00.0000</news>
					</news_content>
					</news>

					<news>
					<img class="news" src="https://www.w3schools.com/css/img_fjords.jpg">
					<news_content>
						<news class="title">News title here! For fuck sake. How long of title i can really put in this mutherfucking title right now!?!?!?!</news>
						<news class="author">Author</news>
						<news class="date">00.00.0000</news>
					</news_content>
					</news>
					<news>
					<img class="news" src="https://www.w3schools.com/css/img_fjords.jpg">
					<news_content>
						<news class="title">News title here! OOOOOMMMMMMMMGGGGGGG. Hope i die while i finally test all the possible lenghts and think of new fucking titles!</news>
						<news class="author">Author</news>
						<news class="date">00.00.0000</news>
					</news_content>
					</news>

					<news>
					<img class="news" src="https://www.w3schools.com/css/img_fjords.jpg">
					<news_content>
						<news class="title">News title here!</news>
						<news class="author">Author</news>
						<news class="date">00.00.0000</news>
					</news_content>
					</news>
			</mcontent>
			<mcontent class="section last">
			<!-- STATS -->
				<stats>
					<left>
						<left class="title">Todays statistics</left>

						<row>Posts made  <row class="count">40</row></row>
						<row>Users registered  <row class="count">6</row></row>
						<row>Updates made <row class="count">69</row></row>

					</left>

					<left>
						<left class="title">Global statistics</left>

						<row>Posts made  <row class="count">40</row></row>
						<row>Users registered  <row class="count">6</row></row>
						<row>Updates made <row class="count">69</row></row>

					</left>

					<left>
						<left class="title">Information links</left>

						<ul class="stats">
							<a href="#Information"><li class="stats">Information link #1</li></a>
							<a href="#Information"><li class="stats">Information link #1</li></a>
							<a href="#Information"><li class="stats">Information link #1</li></a>
						</ul>


					</left>
				</stats>
			</mcontent>
		</MContent>

	</main>	


	<footer>
	footer
	</footer>

</main>


</div>
</body>

<!-- scripts -->
	<!-- start for login/register -->
		<script type="text/javascript">
			function ButtonText() {
			    if ($("#login").is(":visible")) {
			        $("button").text("Es vēlos reģistrēties");
			    } else {
			        $("button").text("Es vēlos pievienoties sistēmā!");
			    }
			}

			ButtonText();
			$(".change-form").click(function () {
			    $("#login").toggle();
			    $("#register").toggle();
			    ButtonText();
			});
		</script>
		<!-- end for login reigster -->
</html> 