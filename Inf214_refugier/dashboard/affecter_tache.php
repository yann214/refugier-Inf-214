<!Doctype HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
		<link rel="stylesheet" type="text/css" href="css/design.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<body>
<?php require_once"nav.php"; ?>
<div class="main">
<?php require_once"head.php"; ?>
</div>
	<?php $date= date("d-m-yy"); ?>
	<div class="corps" style=" margin-left:30%;">
		<form method="POST" action="">
			<h2> affectation des Taches </h2>
			<label for="nom">Nom Tache : </label><input type="text" name="nom" required><br />
			<label for="sup" style="margin-right: 21px;">superviseur :</label><input type="text" name="sup" required><br />
			<label for="date" style="margin-right: 68px;">Date :</label> <input type="date_local" name="date" value="<?=$date?>" disabled="disabled" /><br />
			<input type="submit" value="affecter" name="submit">
		</form>
	</div>
<?php require_once"script.html"; ?>
</body>
</html>