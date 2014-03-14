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
    <li><a id="nav1" class="navClass" href="#"><img src="img/home.png">Hjem</a></li>
    <li><a id="nav2" class="navClass" href="#"><img src="img/wrench.png">Alle Utvalg</a></li>
    <li><a id="nav3" class="navClass" href="#"><img src="img/th-list.png">Label</a></li>
    <li><a id="nav4" class="navClass" href="#footer"><img src="img/envelope-alt.png">Label</a></li>
  </ul>
</nav>
 
<div class="wrapper">
  <div class="inner">
    <header>
      <label class="btn" for="toggle" onclick><img src="img/reorder.png"></label>
    </header>
  </div>

<div id="header"><img src="Logo/westerdals2.png"></img><h1>Westerdals</h1></div>
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

<div id="owl-demo" class="owl-carousel owl-theme">
	<div id="slide1" class="item">
		<h1>Informasjon</h1>
		<div id="info">
			<div id="rute1" class="rute">
				<img src="img/lock.png">
				<p>Logg inn</p>
			</div>
			<i class="fa fa-chevron-right"></i>
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
		<div id="topbar">
	        <form id="loginForm" method="post" class="slide" action="">
	        	<h1>Logg inn</h1>
				<div><input id="brukernavn" type="text" name="username" placeholder="Brukernavn"></div>
				<div><input id="passord" type="password" name="password" placeholder="Passord"></div>
				<input id="loggInn" class="submit" type="submit" name="submit" value="Logg inn">
				<input id="registrer" class="submit" type="submit" name="submit" value="Registrer">
			</form>
		</div>
	</div>
	<div id="slide3" class="item">
		<h1>Velg fakultet</h1>
	</div>
	<div id="slide4" class="item">
		<h1>Velg utvalg</h1>
	</div>
	<div id="slide5" class="item">
		<h1>Meld deg inn</h1>
	</div>
</div>

<section  class="teksfelt" id="footer">
	<div>
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