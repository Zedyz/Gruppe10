<?php
require 'system/objekter.php';
$general->logged_in_protect();

if (empty($_POST) === false) {

	$username = trim($_POST['username']);
	$password = trim($_POST['password']);

	if (empty($username) === true || empty($password) === true) {
		$errors[] = 'trenger brukernavn og passord.';
	} else if ($users->user_exists($username) === false) {
		$errors[] = 'brukernavn finnes ikke.';
	} else {
		if (strlen($password) > 18) {
			$errors[] = 'passordet må være kortere enn 18 tegn.';
		}
		$login = $users->login($username, $password);
		if ($login === false) {
			$errors[] = 'brukernavn og passord stemmer ikke';
		}else {
			$_SESSION['id'] =  $login;
			header('Location: hovedside.php');
			exit();
		}
	}
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
</head>
<body>

<!--<input id="toggle" type="checkbox"/>
<nav class="col-first">
<label class="labeltekst"><h2>Westerdals</h2></label>
  <ul id="nav">
    <li><a id="nav1" class="navClass" href="#"><img src="img/home.png">Hjem</a></li>
    <li><a id="nav2" class="navClass" href="#"><img src="img/wrench.png">Alle Utvalg</a></li>
    <li><a id="nav3" class="navClass" href="#"><img src="img/th-list.png">Label</a></li>
    <li><a id="nav4" class="navClass" href="#footer"><img src="img/envelope-alt.png">Label</a></li>
  </ul>
</nav>-->
 
<div class="wrapper">
  <div class="inner">
    <header>
     <!-- <label class="btn" for="toggle" onclick><img src="img/reorder.png"></label> -->
    </header>
  </div>

<div id="header"><img src="Logo/westerdals2.png"></img><h1>Westerdals</h1></div>

<div id="main"><div class="tekstfelt"><h3>Logg inn</h3>
<form id="loginForm" method="post" class="slide" action="">
	        	<h1>Logg inn</h1>
				<div><input id="brukernavn" type="text" name="username" placeholder="Brukernavn"></div>
				<div><input id="passord" type="password" name="password" placeholder="Passord"></div>
				<input id="loggInn" class="submit" type="submit" name="submit" value="Logg inn">
				<a href="registrering.php"><p style="color:black">Registrer her</p></a>
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