<!Doctype HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>


<body>
	
	<?php require_once"nav.php"; ?>
<div id="main">

	<div class="head">
		<div class="col-div-6">
<span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >&#9776; Dashboard</span>
<span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >&#9776; Dashboard</span>
</div>
	
	<div class="col-div-6">
	<div class="profile">

		<img src="images/user.png" class="pro-img" />
		<p>NGANJIE <span>ADMIN</span></p>
	</div>
</div>
	<div class="clearfix"></div>
</div>

	<div class="clearfix"></div>
	<br/>
	
	<div class="col-div-3">
		<div class="box">
			<p>67<br/><span>Nombre De Réfugiers</span></p>
			<i class="fa fa-users box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p>88<br/><span>Nombre d'habrits Occuper</span></p>
			<i class="fa fa-list box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p>99<br/><span>Nombre de Démande Refusé</span></p>
			<i class="fa fa-shopping-bag box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p>78<br/><span>Nombre de cas de maladie</span></p>
			<i class="fa fa-tasks box-icon"></i>
		</div>
	</div>
	<div class="clearfix"></div>
	<br/><br/>
	<div class="col-div-8">
		<div class="box-8">
		<div class="content-box">
			<p>Ensemble des familles  <span>Voir tous</span></p>
			<br/>
			<table>
  <tr>
    <th>Nom</th>
    <th>Logement</th>
    <th>Nombre</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>section 2 A1</td>
    <td>4</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>section 8 A7</td>
    <td>6</td>
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>section 2 A5</td>
    <td>3</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>section 11 A10</td>
    <td>7</td>
  </tr>
  
  
</table>
		</div>
	</div>
	</div>

	<div class="col-div-4">
		<div class="box-4">
		<div class="content-box">
			<p>Total Ocupation <span>Sell All</span></p>

			<div class="circle-wrap">
    <div class="circle">
      <div class="mask full">
        <div class="fill"></div>
      </div>
      <div class="mask half">
        <div class="fill"></div>
      </div>
      <div class="inside-circle"> 70% </div>
    </div>
  </div>
		</div>
	</div>
	</div>
		
	<div class="clearfix"></div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

  $(".nav").click(function(){
    $("#mySidenav").css('width','70px');
    $("#main").css('margin-left','70px');
    $(".logo").css('visibility', 'hidden');
    $(".logo span").css('visibility', 'visible');
     $(".logo span").css('margin-left', '-10px');
     $(".icon-a").css('visibility', 'hidden');
     $(".icons").css('visibility', 'visible');
     $(".icons").css('margin-left', '-8px');
      $(".nav").css('display','none');
      $(".nav2").css('display','block');
  });

$(".nav2").click(function(){
    $("#mySidenav").css('width','300px');
    $("#main").css('margin-left','300px');
    $(".logo").css('visibility', 'visible');
     $(".icon-a").css('visibility', 'visible');
     $(".icons").css('visibility', 'visible');
     $(".nav").css('display','block');
      $(".nav2").css('display','none');
 });

</script>

</body>


</html>
