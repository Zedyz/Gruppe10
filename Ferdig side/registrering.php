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
		header('Location: registrering.php?success');
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

<div id="header"><a href="hovedside.php"><img src="Logo/westerdals2.png"></img></a><h1>Westerdals</h1></div>

<div id="main"><div class="tekstfelt"><h3>Registrer deg</h3>
<form id="registreringForm" method="post" action="">
				<div><input id="brukernavn" type="text" name="username" placeholder="Brukernavn"></div>
				<div><input id="passord" type="password" name="password" placeholder="Passord"></div>
				<input id="registrer" class="submit" type="submit" name="submit" value="Registrer">
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