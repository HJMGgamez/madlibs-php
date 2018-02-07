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
			<h2>onkunde</h2>
			<form action="onkunde_post.php" method="post">
			<p>Wat zou je willen kunnen?<input class="line" type="text" name="do"></p> <br>
			<p>met welke persoon kun je goed opschieten?<input class="line" type="text" name="VIP"></p> <br>
			<p>wat is je favoriete getal?<input class="line" type="text" name="number"></p> <br>
			<p>wat heb je altijd bij je als je op vakantie gaat?<input class="line" type="text" name="take"></p> <br>
			<p>wat is je beste persoonlijke eigenschap?<input class="line" type="text" name="good"></p> <br>
			<p>wat is je slechste persoonlijke eigenschap?<input class="line" type="text" name="bad"></p> <br>
			<p>wat is het ergste wat je is overkomen?<input class="line" type="text" name="worse"></p> <br>
			<input type="submit">
			</form>
		</article>
	</div>
	<div id="box2">
		<footer>
			<p>ik haat deze pagina.</p>
		</footer>
	</div>
</body>
</html>