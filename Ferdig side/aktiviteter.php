<?php 
require 'system/objekter.php';
$brukerid = $_SESSION['id'];


    if (isset($_POST['submit'])) {
        
        $aktivitetnavn = $_POST['aktivetsnavn'];
 
        $utvalgnavn = $_POST['utvalg'];
         
        $dato = $_POST['dato'];
        
        $sted= $_POST['Sted'];
        
        $beskrivelse = $_POST['beskrivelse'];
         
	
		$users->opprettAktivitet($brukerid, $aktivitetnavn, $utvalgnavn, $dato, $sted, $beskrivelse);
		header('Location: aktiviteteroversikt.php');
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
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,500,600,700' rel='stylesheet' type='text/css'>
</head>
<body>

<input id="toggle" type="checkbox"/>
<nav class="col-first">
<label class="labeltekst"><h2>Westerdals</h2></label>
  <ul id="nav">
    <li><a id="nav1" class="navClass" href="#"><img src="img/home.png">Hjem</a></li>
    <li><a id="nav2" class="navClass" href="#"><img src="img/wrench.png">Alle Utvalg</a></li>
    <li><a id="nav2" class="navClass" href="aktiviteter.php"><img src="img/wrench.png">Lag nytt event</a></li>
    <li><a id="nav2" class="navClass" href="aktiviteteroversikt.php"><img src="img/wrench.png">Eventoversikt</a></li>
    <li><a id="nav2" class="navClass" href="logout.php"><img src="img/wrench.png">logg ut</a></li>
  </ul>
</nav>
 
<div class="wrapper">
  <div class="inner">
    <header>
      <label class="btn" for="toggle" onclick><img src="img/reorder.png"></label>
    </header>
  </div>

<div id="header"><a href="hovedside.php"><img src="Logo/westerdals2.png"></img></a><h1>Westerdals</h1></div>

<div id="main"><div class="tekstfelt"><h3>Lag nytt event</h3>
<form id="aktivitet" method="post" action="">
				<div><input id="brukernavn" type="text" name="aktivetsnavn" placeholder="Aktivitetsnavn"></div>
				<div><input id="passord" type="text" name="utvalg" placeholder="Utvalg"></div>
				<div><input id="passord" type="text" name="dato" placeholder="Dato"></div>
				<div><input id="epost" type="text" name="Sted" placeholder="Sted"></div>
				<div><textarea input type="text" name="beskrivelse" placeholder="Beskrivelse"></textarea></div>
				
				<input  class="submit" type="submit" name="submit" value="Lag nytt event">
			</form>
</div></div>

<section  class="teksfelt" id="footer">
	<div>
	<h1>Kontakt oss</h1>
	Epost-adresse</p>
	<div id="sendMelding"><a href="kontakt.php"><img src="img/envelope-alt.png" class="img"></a></div>
	</div>
</section>
</div>

</body>
</script>
</html>