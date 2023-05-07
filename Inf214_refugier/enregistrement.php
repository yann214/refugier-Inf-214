<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="dashboard/css/design.css" >
    <title>enregistrement</title>
</head>
<body>
<div class="header">
        <img src="image/logo.png" alt="logo">
        <div class="menu">
            <ul>
                <li><a href="about_us.html">Qui somme nous ?</a></li>
                <li><a href="actions.html">Nos actions</a></li>
                <li><a href="enregistrement.php">Regoindre le camps</a></li>
                <li><a href="dashboard/">admin</a></li>
                <li ><a href="don.php" class="donner">Faire un don</a></li>
            </ul>
        </div>
    </div>

    <div class="corps" style="padding:150px;background: linear-gradient(to right, rgb(24, 213, 163), rgb(0, 255, 128));">
  <h2> formulaire d'enregistrement </h2>
	<form method="POST" action="enregistrement.php">
		<label for="nom">Nom :</label>
		<input type="text" name="nom" required><br />

		<label for="prenom">Prenom :</label>
		<input type="text" name="prenom" required><br />

		<label for="sexe"> sexe :</label>
		<input type="radio" name="sexe" value="masculin" required> <span>Masculin<span>
		<input type="radio" name="sexe" value="feminin" required> feminin <br />

        <label for="tel">telephone</label> <input type="tel" name="tel" required/><br />
        <label for="email" style="margin-right:23px;">E-mail </label> <input type ="email" name="email" id="email" required ><br />

		<label for="type">categorie d'age </label><br />
		<input type="radio" name="type" value="Enfants" required> Enfants (00 &agrave 14 ans) <br />
		<input type="radio" name="type" value="Adolescents" required>  Adolescents (15 &agrave 24 ans) <br />
		<input type="radio" name="type" value="Adultes" required> Adultes (25 &agrave 64 ans) <br />
		<input type="radio" name="type" value="Aînés" required> A&Icircn&eacutes (65 ans et plus) <br />

		<label for="famille">Avez vous une famille ? </label>
		<input type="radio" name="famille" value="oui" required> Oui
		<input type="radio" name="famille" value="non" required> NOn <br />

		<input type="submit" name="submit" value="s'enregistrer" onClick="message()">
	</form>
    </div>

<div class="footer">
        <div class="contener">
            <div class="row">
                <div class="footer-col">
                    <img src="image/logo.png" alt="logo">
                </div>
                <div class="footer-col">
                    <h4>A propos de nous</h4>
                    <ul>
                        <li><a href="about_us.html">Qui somme nous?</a></li>
                        <li><a href="#mission">Mission</a></li>
                        <li><a href="#">Nos partenaires</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Nos actions</h4>
                    <ul>
                        <li><a href="actions.html#action">l'education</a></li>
                        <li><a href="actions.html#ration">les soins de santer</a></li>
                        <li><a href="actions.html#edu">rationnement</a></li>
                        <li><a href="actions.html#santer">protection</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul>
                        <li><a href="tel:+237 650-95-88-21">+237 650-95-88-21</a></li>
                        <li><a href="tel:+237 699-99-01-02">+237 699-99-01-02</a></li>
                        <li><a href="mailto:yannfoka4@gmail.com">yannfoka4@gmail.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr />
        <p>copyright 2023</p>
    </div>
    <script type="text/javascript">
        function message(){
           var email = document.getElementById('email').value;
            alert("vous avez ete bien enregistrer. on vous contactera au "+email+"!!!");
        }
    </script>
</body>
</html>