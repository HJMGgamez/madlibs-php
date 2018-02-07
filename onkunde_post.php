<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>mad libs</title>
</head>
<body>
	<div id="box1">
		<header>
			<h1>
				Mad libs
			</h1>
		</header>
	</div>
	<div id="box">
		<nav>
			<ul>
				<li><a href="index.php">Er heerst paniek...</a></li>
				<li><a href="onkunde.php">onkunde</a></li>
			</ul>
		</nav>
		<article>
			<p>Er zijn veel mensen die niet kunnen <?php echo $_POST["do"]; ?>. Neem nou <?php echo $_POST["VIP"]; ?>.Zelfs met de hulp van een <?php echo $_POST["take"]; ?> of zelfs <?php echo $_POST["number"]; ?> kan <?php echo $_POST["VIP"]; ?> niet <?php echo $_POST["do"]; ?>.Dat heeft niet te maken met een gebrek aan <?php echo $_POST["good"]; ?>, maar met een te veel aan <?php echo $_POST["bad"]; ?>.Te veel <?php echo $_POST["bad"]; ?> leidt tot <?php echo $_POST["worse"]; ?> en dat is niet goed als je wilt <?php echo $_POST["do"]; ?>.Helaas voor <?php echo $_POST["VIP"]; ?>.</p>
		</article>
	</div>
	<div id="box2">
		<footer>
			<p>kill me,PLZ!</p>
		</footer>
	</div>
</body>
</html>