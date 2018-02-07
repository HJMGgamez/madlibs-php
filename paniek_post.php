<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>madlibs</title>
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
			"<p>Er heerst paniek in het koningkrijk <?php echo  $_POST["land"] ;?>. Koning <?php echo  $_POST["teacher"] ;?> is ten einde raad en als koning <?php echo  $_POST["teacher"] ;?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $_POST["VIP"] ;?><br><?php echo $_POST["VIP"] ;?>! Het is een ramp! Het is een schande!<br> Sire, Majesteid, Uwe luidruchtigheid, wat is er aan de hand?<br>Mijn </p><?php echo $_POST["animal"] ;?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_POST["toys"] ;?> voor hem gekocht!<br> Majesteid, uw <?php echo $_POST["animal"] ;?> komt vast vanzelf weer terug.<br> Ja, da's leuk en aardig, maar hoe moet ik in de tussen tijd <?php echo $_POST["hobby"] ;?> leren? <br> Maar Sire, daar kunt u toch uw <?php echo $_POST["buy"];?> voor gebruiken. <br><?php echo  $_POST["teacher"] ;?> Je hebt helemaal gelijk! Wat zou ik toch doen als ik jou niet had<br><?php echo $_POST["bored"] ;?>,Sire.</p>";
		</article>
	</div>
	<div id="box2">
		<footer>
			<p>Werk nee Help me!!!.</p>
		</footer>
	</div>
</body>
</html>