<?php 
require 'system/objekter.php';
$general->logged_in_protect();

if (isset($_POST['submit'])) {

	if(empty($_POST['username']) || empty($_POST['password'])){

		$errors[] = 'All fields are required.';

	}else{
        
        if ($users->user_exists($_POST['username']) === true) {
            $errors[] = 'brukernavnet finnes allerede';
        }
        if(!ctype_alnum($_POST['username'])){
            $errors[] = 'Bruk kun bokstaver eller tall';	
        }
        if (strlen($_POST['password']) <6){
            $errors[] = 'Minst 6 tegn';
        } else if (strlen($_POST['password']) >15){
            $errors[] = 'ikke mer enn 15 tegn';
        }
        
	}

	if(empty($errors) === true){
		
		$username 	= htmlentities($_POST['username']);
		$password 	= $_POST['password'];

		$users->register($username, $password);
		header('Location: register.php?success');
		exit();
	}
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
    <li><a id="nav1" class="navClass" href="#"><label id="label" for="toggle" onclick><img src="img/home.png">Hjem</label></a></li>
    <li><a id="nav2" class="navClass" href="#"><img src="img/wrench.png">Label</a></li>
    <li><a id="nav3" class="navClass" href="#"><img src="img/th-list.png">Label</a></li>
    <li><a id="nav4" class="navClass" href="#footer"><img src="img/envelope-alt.png">Label</a></li>
  </ul>
    <div id="topbar">
  	<ul>
        <form id="loginForm" method="post" action="">
			<div><input id="brukernavn" type="text" name="username" placeholder="Brukernavn"></div>
			<div><input id="passord" type="password" name="password" placeholder="Passord"></div>
			<input id="loggInn" class="submit" type="submit" name="submit" value="Logg inn">
			<input id="registrer" class="submit" type="submit" name="submit" value="Registrer">
		</form>
	</ul>
</div>
</nav>
 
<div class="wrapper">
  <div class="inner">
    <header>
      <label class="btn" for="toggle" onclick><img src="img/reorder.png"></label>
    </header>
  </div>

<div id="header"><img src="Logo/westerdals2.png"></img><h1>Westerdals</h1></div>

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

<div id="main">

<h1>Registreringtest</h1>
		
		<?php
		if (isset($_GET['success']) && empty($_GET['success'])) {
		  echo 'takk for at du registrerte';
		}
		?>

		<form method="post" action="">
			<h4>brukernavn:</h4>
			<input type="text" name="username" />
			<h4>passord:</h4>
			<input type="password" name="password" />
	
			<br>
			<input type="submit" name="submit" value="registrer"/>
		</form>

		<?php 
		if(empty($errors) === false){
			echo '<p>' . implode('</p><p>', $errors) . '</p>';	
		}

		?>

</div>



<section  class="teksfelt" id="footer">
	<div>
	<h1>Kontakt oss</h1>
	<p>Adresse<br>
	Postnummer<br>
	Telefonnummer<br>
	Epost-adresse</p>
	<div id="sendMelding"><a href="kontakt.php"><img src="img/envelope-alt.png" class="img"></a></div>
	</div>
</section>
</div>

</body>
</html>