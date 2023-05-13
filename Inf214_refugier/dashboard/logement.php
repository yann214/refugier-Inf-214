<?php
	require_once"connect.php";
	$Nom_section =" ";
	$sms =' ';
	if(isset($_POST['submit'])){
		echo '<span style="margin-left: 30%;">aaa</span>';
		$Nom_section = $_POST['nom'];

		$sql = "INSERT INTO `logement`(`section`) VALUES ('$Nom_section');";
		
		$rst= $connect->query($sql);
		if($rst==true){
		$sms ="enregistrement effectuer";}
	}
?>
<!Doctype HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
		<link rel="stylesheet" type="text/css" href="css/design.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php require_once"nav.php"; ?>
<div class="main">
<?php require_once"head.php"; ?>
</div>

	<div class="corps" style=" margin-left:30%;">
		<form method="POST" action="logement.php">
			<h2> ajout des logements </h2>
			<label for="nom">Nom section : </label><input type="text" name="nom" >
			<input type="submit"  name='submit' value="ajouter" >
		</form>
	</div>

<?php require_once"script.html"; ?>
</body>
</html>