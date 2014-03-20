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
        if (strlen($_POST['password']) <1){
            $errors[] = 'Minst 1 tegn';
        } else if (strlen($_POST['password']) >15){
            $errors[] = 'ikke mer enn 15 tegn';
        }
        
	}

	if(empty($errors) === true){
		
		$username 	= htmlentities($_POST['username']);
		$password 	= $_POST['password'];
		$epost = $_POST['epost'];

		$users->register($username, $password, $epost);
		header('Location: index.php');
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
	<link rel="shortcut icon" type="image/x-icon" href="img/hjem.ico">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,500,600,700' rel='stylesheet' type='text/css'>
</head>
<body>

<input id="toggle" type="checkbox"/>
<nav class="col-first">
<label class="labeltekst"><h2>Westerdals</h2></label>
  <ul id="nav">
    <li><a id="nav1" class="navClass" href="index.php"><img src="img/home.png">Hjem</a></li>
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
				<div><input id="epost" type="text" name="epost" placeholder="epost"></div>
				
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