<?php
require 'system/objekter.php';
$general->logged_out_protect();
$id = $_SESSION['id'];

if (isset($_POST['submit'])) {

        $utvalgnavn = $_POST['utvalgnavn'];
 
	
		$users->meldut($id, $utvalgnavn);
		header('Location: profil.php');
		exit();
	}


		?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Westerdals</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" type="image/x-icon" href="img/hjem.ico">
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
    <li><a id="nav1" class="navClass" href="hjem.php"><img src="img/home.png">Hjem</a></li>
    <li><a id="nav2" class="navClass" href="profil.php"><img src="img/wrench.png">Profil</a></li>
    <li><a id="nav2" class="navClass" href="aktiviteter.php"><img src="img/wrench.png">Lag nytt event</a></li>
    <li><a id="nav2" class="navClass" href="aktiviteteroversikt.php"><img src="img/wrench.png">Eventoversikt</a></li>
    <li><a id="nav3" class="navClass" href="logout.php" onclick='reloadPage()'><img src="img/wrench.png">Logg ut</a></li>
  </ul>
</nav>
 
<div class="wrapper">
  <div class="inner">
    <header>
      <label class="btn" for="toggle" onclick><img src="img/reorder.png"></label>
    </header>
  </div>

<div id="header"><a href="index.php"><img src="Logo/westerdals2.png"></img></a><h1>Westerdals</h1></div>
	
</div>
<div id="profil">
    <div id="profilbildeboks"><img src="profilbilde.png" id="profilbilde"></img></div>
	<?php
	    
	$info = $users->getUsername($id);
	
	$fakultet = $users->getUtvalg($id);
	
	echo "Velkommen ";
	
	foreach($info as $item):
      echo ''.$item['username'].', ';
     endforeach;
	
	
	
	echo " fra fakultetet for ";
	
	foreach($fakultet as $fak):
	          
	          if($fak === 'kommunikasjon' || $fak === 'ledelse' || $fak === 'musikk og scene' || $fak === 'teknologi' || $fak === 'film og TV')   {
	          
	          echo '' . $fak . ', ';
	          
	      }
	        endforeach;
	
	
     
     echo "<br><br><br>Du er medlem av følgende utvalg: ";
	
	$utvalg = $users->getUtvalg($id);
	
	
	
	foreach($utvalg as $ut):
	    
	    if($ut === 'westerbar' || $ut === 'lol' || $ut === 'pus' || $ut === 'pum' || $ut === 'utv' || $ut === 'ufsg' || $ut === 'au'   ||
	       $ut === 'sos' || $ut === 'kit' || $ut === 'aug' || $ut === 'wtvg' || $ut === 'idrettsutvalget' || $ut === 'tom' || $ut === 'mat' || $ut === 'bok' || $ut === 'mus' || $ut === 'wbde')   {
	        
	        echo '' . $ut . ', ';
	      } 
	      
	      endforeach;
	      
	      
	  echo '<br><br><br><br><br><br>Aktiviteter du deltar på: ';
	  
	  $aktivID = $users->getAktivitetNavn($id);
	  
	  foreach($aktivID as $ider):
	      
	        
	        echo  '<br>' .$ider['aktivitetnavn'];
	      
	      endforeach;
	      
	      
	  
	
	
	?>
	<br><br>
	<form method="post" action="profil.php">
				<input id="meldav" type="text" name="utvalgnavn" value="Utvalgsnavn..."><br>
				<input type="submit" name="submit" value="Meld deg av!">
			</form>
	</div>
	<div>
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