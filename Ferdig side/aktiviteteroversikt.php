<?php 
require 'system/objekter.php';
$brukerid = $_SESSION['id'];

if (isset($_POST['submit'])) {
		
		$aktivId = $_POST['id'];

		$users->meldAktivitet($brukerid, $aktivId);
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

<div id="main"><div class="tekstfelt"><h3>Eventoversikt</h3>
<?php

$events = $users->getAktivitet();

foreach($events as $eventer):
    
    
    echo("
      <table>
      <tr>
        <td >Aktivitet:</td>
        <td>$eventer[2]</td>
      </tr>
      <tr>
        <td >Utvalg:</td>
        <td>$eventer[3]</td>
      </tr>
      <tr>
        <td>Dato:</td>
        <td>$eventer[4]</td>
      </tr>
      <tr>
        <td>Stedi:</td>
        <td>$eventer[5]</td>
      </tr>
      <tr>
        <td>Beskrivelse:</td>
        <td>$eventer[6]</td>
      </tr>
      <tr>
        <form method='post' action=''>
            <td><input type='text' name='id' value='$eventer[0]' readonly></td>
			<td><input type='submit' name='submit' value='Meld deg på!'></td>
		</form>
      </tr>
    </table>
    
    
  ");
  

    endforeach;
?>

</div></div>
</div>

</body>
</script>
</html>