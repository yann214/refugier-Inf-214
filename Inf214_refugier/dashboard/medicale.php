<?php
	require_once"connect.php";
	$soins =" ";
	$desp ='';
	$nomp='';
	$sms =' ';
	if(isset($_POST['submit'])){
		echo '<span style="margin-left: 30%;">aaa</span>';
		$soins = $_POST['nom'];
		$desp = $_POST['desp'];
		$dt = date("y-m-d");
		$nomp =$_POST['nomp'];

		$sql = "INSERT INTO `examen_medicale`(`soins_prodiger`, `description`) VALUES ('$soins','$desp');";
		$rst= $connect->query($sql);
		/*
		$sql1 ="SELECT id_personne FROM personne where nom='$nomp';";
		$rst1 = $connect->query($sql1);
		
		$id_p='';
		if($dd = $rst->fetch_assoc()){$id_p =$dd['id_personne'];}
		
		$sql2 ="INSERT INTO `effectuer_examen`(`id_personne`,`dt_attribution`) VALUES ('$id_p','$dt')";
		$rst2 = $connect->query($sql2);	
		*/if($rst==true){
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
		<form method="POST" action="medicale.php">
			<h2> enregistrement d'un soins apporter </h2>
			<label for="nomp">Nom personne</label><input type="text" name="nomp"><br /> 
			<label for="nom">Soins : </label><input type="text" name="nom" ><br />
			<label for="desp">description</label>
			<textarea cols="65" rows="5" name="desp" style="margin-top:10px; background:transparent;" required></textarea><br />
			<input type="submit" name="submit" value="enregistrer">
		</form>
	</div>
<?php require_once"script.html"; ?>
</body>
</html>