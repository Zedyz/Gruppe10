<?php
require 'system/objekter.php';
$general->logged_out_protect();
$userid = $_SESSION['id'];

    if (isset($_POST['submit'])) {

        $fakultet1 = (empty($_POST['fakultet1'])) ? 0 : $_POST['fakultet1'] = 1;
 
        $fakultet2 = (empty($_POST['fakultet2'])) ? 0 : $_POST['fakultet2'] = 1;
         
        $fakultet3 = (empty($_POST['fakultet3'])) ? 0 : $_POST['fakultet3'] = 1;
        
        $fakultet4 = (empty($_POST['fakultet4'])) ? 0 : $_POST['fakultet4'] = 1;
         
        $fakultet5 = (empty($_POST['fakultet5'])) ? 0 : $_POST['fakultet5'] = 1;
        
        $utvalg1 = (empty($_POST['utvalg1'])) ? 0 : $_POST['utvalg1'] = 1;
 
        $utvalg2 = (empty($_POST['utvalg2'])) ? 0 : $_POST['utvalg2'] = 1;
         
        $utvalg3 = (empty($_POST['utvalg3'])) ? 0 : $_POST['utvalg3'] = 1;
        
        $utvalg4 = (empty($_POST['utvalg4'])) ? 0 : $_POST['utvalg4'] = 1;
         
        $utvalg5 = (empty($_POST['utvalg5'])) ? 0 : $_POST['utvalg5'] = 1;
        
        $utvalg6 = (empty($_POST['utvalg6'])) ? 0 : $_POST['utvalg6'] = 1;
         
        $utvalg7 = (empty($_POST['utvalg7'])) ? 0 : $_POST['utvalg7'] = 1;
        
	
		$users->meld($userid, $fakultet1, $fakultet2, $fakultet3, $fakultet4, $fakultet5, $utvalg1, $utvalg2, $utvalg3, $utvalg4, $utvalg5, $utvalg6, $utvalg7);
		header('Location: takk.php');
		exit();
	}

		if(empty($errors) === false){
			echo '<p>' . implode('</p><p>', $errors) . '</p>';	
		}

		?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Westerdals</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,500,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link href="Owl/owl.carousel.css" rel="stylesheet">
    <link href="Owl/owl.theme.css" rel="stylesheet">
</head>
<body>

<input id="toggle" type="checkbox"/>
<nav class="col-first">
<label class="labeltekst"><h2>Westerdals</h2></label>
  <ul id="nav">
    <li><a id="nav1" class="navClass" href="hovedside.php"><img src="img/home.png">Hjem</a></li>
    <li><a id="nav2" class="navClass" href="profil.php"><img src="img/wrench.png">Din profil</a></li>
    <li><a id="nav3" class="navClass" href="meld.php"><img src="img/wrench.png">Meld deg på utvalg</a></li>
    <li><a id="nav4" class="navClass" href="info.php"><img src="img/th-list.png">utvalgsinfo</a></li>
    <!--<li><a id="nav4" class="navClass" href="#footer"><img src="img/envelope-alt.png">Label</a></li>-->
  </ul>
</nav>
 
<div class="wrapper">
  <div class="inner">
    <header>
      <label class="btn" for="toggle" onclick><img src="img/reorder.png"></label>
    </header>
  </div>

<div id="header"><a href="hovedside.php"><img src="Logo/westerdals2.png"></img></a><h1>Westerdals</h1></div>
<!--
		<section id="boxWrapper">
					<a href="test.html"><div id="box1">
						<h1>Tittel</h1>
					</div></a>
					<a href="test2.html"><div id="box2">
						<h1>Tittel</h1>
					</div></a>
					<a href=""><div id="box3">
						<h1>Tittel</h1>
					</div></a>
					<a href="index.html"><div id="box4">
						<h1>Tittel</h1>
					</div></a>
					<a href=""><div id="box5">
						<h1>Tittel</h1>
					</div></a>
		</section>

		-->

<!--<div id="main"><div class="tekstfelt"><p> Westerdals – Oslo School of Art, Communication and Technology er navnet på den nye høyskolen som oppstår etter fusjonen mellom Westerdals, NISS og NITH fra 1. juli 2014.</p></div>
<div id="diamond1" class="diamond"></div>
<div id="diamond2" class="diamond"></div>
<div id="diamond3" class="diamond"></div>
<div id="diamond4" class="diamond"></div>
<div id="diamond5" class="diamond"></div>
</div>-->
<form action="meld.php" method="post">
<div id="owl-demo" class="owl-carousel owl-theme">
	<div id="slide1" class="item">
		<h1>Hvordan bli med i et utvalg?</h1>
		<div id="info">
			<div id="rute2" class="rute">
				<img src="img/fakultet.png">
				<p>Velg fakultet</p>
			</div>
			<i class="fa fa-chevron-right"></i>
			<div id="rute3" class="rute">
				<img src="img/Clipboard.png">
				<p>Velg utvalg</p>
			</div>
			<i class="fa fa-chevron-right"></i>
			<div id="rute4" class="rute">
				<img src="img/Retina-Ready.png">
				<p>Meld deg inn</p>
			</div>
		</div>
	</div>
	

	<div id="slide2" class="item">
	    <h1>Velg fakultet</h1>
		
	    
            <input type="checkbox" name="fakultet1" value="Fakultet1">Fakultet1<br>
            <input type="checkbox" name="fakultet2" value="Fakultet2">Fakultet2<br>
            <input type="checkbox" name="fakultet3" value="Fakultet3">Fakultet3<br>
            <input type="checkbox" name="fakultet4" value="Fakultet4">Fakultet4<br>
            <input type="checkbox" name="fakultet5" value="Fakultet5">Fakultet5<br>
            
        	 
	
	</div>
 
	<div id="slide3" class="item">
	
	    <h1>Velg utvalg</h1>
            <input type="checkbox" name="utvalg1" value="utvalg1">Utvalg1<br>
            <input type="checkbox" name="utvalg2" value="utvalg2">Utvalg2<br>
            <input type="checkbox" name="utvalg3" value="utvalg3">Utvalg3<br>
            <input type="checkbox" name="utvalg4" value="utvalg4">Utvalg4<br>
            <input type="checkbox" name="utvalg5" value="utvalg5">Utvalg5<br>
            <input type="checkbox" name="utvalg6" value="utvalg6">Utvalg6<br>
            <input type="checkbox" name="utvalg7" value="utvalg7">Utvalg7<br>
	
	</div>
	<div id="slide4" class="item">
	
        	<h1>Meld deg inn</h1>
        	
	    <input type = 'submit' name = 'submit' value = 'Meld deg på!'/>
        </form>
	</div>
	
</div>
	
<section  class="teksfelt" id="footer">
	<div>
	<a href='logout.php' onclick='reloadPage()'><p>logg ut</p></a>
	<h1>Kontakt oss</h1>
	Epost-adresse</p>
	<div id="sendMelding"><a href="kontakt.php"><img src="img/envelope-alt.png" class="img"></a></div>
	</div>
</section>
</div>

</body>
<script src="jquery.min.js"></script>
<script src="Owl/owl.carousel.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
 
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });
 
});
</script>
</html>