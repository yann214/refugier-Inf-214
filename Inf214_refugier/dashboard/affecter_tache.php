<?php
	require_once"connect.php";
	$Nom_tache =" ";
	$sup='';
	$sms =' ';
	if(isset($_POST['submit'])){
		echo '<span style="margin-left: 30%;">aaa</span>';
		$Nom_tache = $_POST['nom'];
		$sup = $_POST['sup'];

		$sql = "INSERT INTO `attribution_tache`(`nom_tache`,`superviseur`) VALUES ('$Nom_tache','$sup');";
		$rst= $connect->query($sql);

		/*$sql1 ="SELECT id_personne FROM personne where nom='$sup';";
		$rst1 = $connect->query($sql1);
		
		$id_p='';
		if($dd = $rst->fetch_assoc())
		{$id_p =$dd['id_personne'];}
		
		$sql2 ="INSERT INTO `attribu` (`id_personne`,`dt_attribution`) VALUES ('$id_p','$dt')";
		$rst2 = $connect->query($sql2);
		*/
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