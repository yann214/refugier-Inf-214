<!Doctype HTML>
<html>
<head>
	<title></title>
	<meta charset="UTF-8" >
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="css/design.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php require_once"nav.php"; ?>
<div class="main">
<?php require_once"head.php"; ?>
</div>

<div class="corps" style="margin-left: 30%;">
	<h2> formulaire d'enregistrement </h2>
	<form method="POST" action="">
		<label for="nom">Nom :</label>
		<input type="text" name="nom"><br />

		<label for="prenom">Prenom :</label>
		<input type="text" name="prenom"><br />

		<label for="sexe"> sexe :</label>
		<input type="radio" name="sexe" value="masculin"> <span>Masculin<span>
		<input type="radio" name="sexe" value="feminin"> feminin <br />

		<label for="type">categorie d'age </label><br />
		<input type="radio" name="type" value="Enfants"> Enfants (00 &agrave 14 ans) <br />
		<input type="radio" name="type" value="Adolescents">  Adolescents (15 &agrave 24 ans) <br />
		<input type="radio" name="type" value="Adultes"> Adultes (25 &agrave 64 ans) <br />
		<input type="radio" name="type" value="Aînés" > A&Icircn&eacutes (65 ans et plus) <br />

		<label for="famille">Avez vous une famille ? </label>
		<input type="radio" name="famille" value="oui"> Oui
		<input type="radio" name="famille" value="non"> NOn <br />

		<input type="submit" name="submit" value="s'enregistrer" >
	</form>
</div>
<?php require_once"script.html"; ?>
</body>
</html>