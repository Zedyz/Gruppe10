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
			header('Location: hjem.php');
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
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link href="Owl/owl.carousel.css" rel="stylesheet">
    <link href="Owl/owl.theme.css" rel="stylesheet">
</head>
<body>

<input id="toggle" type="checkbox"/>
<nav class="col-first">
<label class="labeltekst"><h2>Westerdals</h2></label>
  <ul id="nav">
    <li><a id="nav1" class="navClass" href="index.php"><img src="img/home.png">Hjem</a></li></li>
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

<!--<div id="main"><div class="tekstfelt"><p> Westerdals – Oslo School of Art, Communication and Technology er navnet på den nye høyskolen som oppstår etter fusjonen mellom Westerdals, NISS og NITH fra 1. juli 2014.</p></div>
<div id="diamond1" class="diamond"></div>
<div id="diamond2" class="diamond"></div>
<div id="diamond3" class="diamond"></div>
<div id="diamond4" class="diamond"></div>
<div id="diamond5" class="diamond"></div>
</div>-->

<!-- border -->
    
<div class="colorBorder">
	<div id="red" class="color"></div>
	<div id="orange" class="color"></div>
	<div id="yellow" class="color"></div>
	<div id="blue" class="color"></div>
	<div id="purple" class="color"></div>
</div>

<!-- border-slutt -->

<div id="owl-demo" class="owl-carousel owl-theme">
	<div id="slide1" class="item">
		<h1>Hvordan bli med i et utvalg?</h1>
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
				<div><input id="brukernavn" type="text" name="username" placeholder="Brukernavn" autocomplete="off"></div>
				<div><input id="passord" type="password" name="password" placeholder="Passord"></div>
				<input id="loggInn" class="submit" type="submit" name="submit" value="Logg inn">
				<a href="registrering.php"><p>registrer</p></a>
			</form>
		</div>
	</div>
<div id='slide3' class='item'>
    	    <h1>Logg inn for å velge fakultet</h1>
    	    <div id='sliderWrapper'>
    	        <div class='fakultet'>
                    <label for='fak1' onClick><img class="fakultetImg" src='img/KommunikasjonIkon2.png'></label>
                    <p>Kommunikasjon</p>
                </div>
                <div class='fakultet'>
                    <label for="fak2" onClick><img class="fakultetImg" src="img/LedelseIkon2.png"></label>
                    <p>Ledelse</p>
                </div>
                <div class="fakultet">
                    <label for='fak3' onClick><img class="fakultetImg" src='img/MusikkOgSceneIkon2.png'></label>
                    <p>Musikk og scene</p>
                </div>
                <div class='fakultet'>
                    <label for='fak4' onClick><img class="fakultetImg" src='img/TeknologiIkon2.png'></label>
                    <p>Teknologi</p>
                </div>
                <div class='fakultet'>
                    <label for='fak5' onClick><img class="fakultetImg" src='img/FilmOgTvIkon2.png'></label>
                    <p>Film og TV</p>
                </div>
    	    </div>
    	</div>
    	
    	<div id='slide4' class='item'>
    	    <h1>Logg inn for å velge utvalg</h1>
            <div id="sliderWrapper">
			<div class="utvalg">
				<label class="utvalgname" for="ut1" onClick>#wBar</label>
				<div class="utvalginfo"><h3>#westerBar</h3>
				Er du sosial og serviceinnstilt, da er #westerBar tingen for deg! <br> 
				I dette utvalget er jobben å selge drikke til medstudenter og skape et sosialt nettverk. <br>
				Du vil i tillegg som takk for jobben få rabatt på produkter.
					<div id="knapp">
						<a href="#" class="knapp">Les mer</a>
					</div>
				</div>
			</div>
			<div class="utvalg">
				<label class="utvalgname" for="ut1" onClick>LOL</label>
				<div class="utvalginfo"><h3>Leder og lignende</h3>
				Lol er gruppen for deg som er interessert i å lære mer om det å være en leder. <br>
				En gang i måneden er det foredrag fra en eller flere av medlemmene for å vise hva man kan og har lært. <br>
				I tillegg til å bli kvitt eventuelle problemer med å stå foran en forsamling.
					<div id="knapp">
						<a href="#" class="knapp">Les mer</a>
					</div>
				</div>
			</div>
			<div class="utvalg">
				<label class="utvalgname" for="ut1" onClick>PUS</label>
				<div class="utvalginfo"><h3>Prosjektutvalg for spill</h3>
				Utvalget er laget for å heve interessen for å produsere egne spill. <br>
				Det er også lagt opp for at man skal finne andre studenter som er interessert i å kunne lage spill, når                      skoletiden er over.
					<div id="knapp">
						<a href="#" class="knapp">Les mer</a>
					</div>
				</div>
			</div>
			<div class="utvalg">
				<label class="utvalgname" for="ut1" onClick>PUM</label>
				<div class="utvalginfo"><h3>Prosjektutvalg for musikk</h3>
				Utvalget er laget for å heve interessen for å produsere egen musikk. <br>
				Det er også lagt opp for at man skal finne andre studenter som er interessert i å lage musikk.
					<div id="knapp">
						<a href="#" class="knapp">Les mer</a>
					</div>
				</div>
			</div>
			<div class="utvalg">
				<label class="utvalgname" for="ut1" onClick>UTV</label>
				<div class="utvalginfo"><h3>Utviklingsvalget</h3>
				Lære studentene i felt som skolen ikke har ordinær undervisning i. <br>
				Det tilbys kurs og workshops, i tillegg brukes det som et forum for at studentene kan få feedback på egne                      prosjekter.
					<div id="knapp">
						<a href="#" class="knapp">Les mer</a>
					</div>
				</div>
			</div>
			<div class="utvalg">
				<label class="utvalgname" for="ut1" onClick>UFSG</label>
				<div class="utvalginfo"><h3>Utvalg for smarte gamere</h3>
				Dette utvalget er for de spill interesserte. <br>
				Utvalget arrangerer ofte LAN og andre konkurranser for skolens studenter.
					<div id="knapp">
						<a href="#" class="knapp">Les mer</a>
					</div>
				</div>
			</div>
			<div class="utvalg">
				<label class="utvalgname" for="ut1" onClick>WBDE</label>
				<div class="utvalginfo"><h3>Westerdals Blind Date Exclusive</h3>
				Dette er utvalget for ALLE. <br>
				Noen ganger i måneden arrangerer vi blind dates. <br>
				Konseptet er enkelt: Du melder deg inn i gruppen for deretter å kaste en terning. <br>
				Du vil deretter få beskjed når du får en date. <br>
				Som regel tar det noen dager, maks 2 uker. <br>
				Før du kaster terningen fyller du ut et skjema. 
					<div id="knapp">
						<a href="#" class="knapp">Les mer</a>
					</div>
				</div>
			</div>
			<div class="utvalg">
				<label class="utvalgname" for="ut1" onClick>SOS</label>
				<div class="utvalginfo"><h3>Sosialutvalget</h3>
				Hovedansvaret for sosiale eventer på skolen. <br>
				Utvalget arrangerer blant annet en storfest i måneden.
					<div id="knapp">
						<a href="#" class="knapp">Les mer</a>
					</div>				
				</div>
			</div>
			<div class="utvalg">
				<label class="utvalgname" for="ut1" onClick>KIT</label>
				<div class="utvalginfo"><h3>Kvinner og IT</h3>
				Siden det er betydelig færre kvinner, har kvinnene et eget utvalg der de møtes og diskuterer IT sammen. <br>
				Det er viktig for kvinnene med KIT, for å møtes og føle at de er flere. <br>
				Det arrangeres workshops og minglekvelder.
					<div id="knapp">
						<a href="#" class="knapp">Les mer</a>
					</div>				
				</div>
			</div>
			<div class="utvalg">
				<label class="utvalgname" for="ut1" onClick>AUG</label>
				<div class="utvalginfo"><h3>Apple User Group</h3>
				Gruppa for de som bruker Apple – produkter. <br>
				Legges opp for at Apple brukere skal få samme utdanning som andre studenter. <br>
				Andre programmer som kan være bedre for en Apple bruker blir presentert og man hjelper hverandre i forskjellige                 problemer.
					<div id="knapp">
						<a href="#" class="knapp">Les mer</a>
					</div>					
				</div>
			</div>
			<div class="utvalg">
				<label class="utvalgname" for="ut1" onClick>WTVG</label>
				<div class="utvalginfo"><h3>Westerdals TV Group</h3>
				Utvalget for deg som vil se og lære hvordan TV- sendinger spilles inn. <br>
				Vi drar en til to ganger i måneden rundt til forskjellige TV-stasjoner. <br>
				Blant annet NRK, TV2 og TV3. <br>
				I tillegg til å få info og læring om det å lage TV, er vi ofte statister og publikum i forskjellige sendinger                  .
					<div id="knapp">
						<a href="#" class="knapp">Les mer</a>
					</div>					
				</div>
			</div>
			<div class="utvalg">
				<label class="utvalgname" for="ut1" onClick>IUV</label>
				<div class="utvalginfo"><h3>Idrettsutvalget</h3>
				For de sporty studentene. <br>
				Per i dag tilbys det bare bedriftsfotball, men planen er å lage lag for andre bedriftsidretter også som: <br>
                1.	Håndball <br>
                2.	Tennis <br>
                3.	Hockey
					<div id="knapp">
						<a href="#" class="knapp">Les mer</a>
					</div>		                
                </div>
			</div>
			<div class="utvalg">
				<label class="utvalgname" for="ut1" onClick>TOM</label>
				<div class="utvalginfo"><h3>Teater og Musikal</h3>
				Utvalget er for deg som er interessert i teater og/eller musikal. <br>
				Utvalget setter opp en til to forestillinger i halvåret. <br>
				Utvalget kjøper stykker basert på hva gruppens medlemmer vil sette opp.
					<div id="knapp">
						<a href="#" class="knapp">Les mer</a>
					</div>					
				</div>
			</div>
			<div class="utvalg">
				<label class="utvalgname" for="ut1" onClick>MAT</label>
				<div class="utvalginfo"><h3>Matutvalget</h3>
				For deg som liker å lage mat, eller har lyst til å lære å lage mat. <br>
				Gruppen er for alle, å det er ikke noe bestemt nivå. <br>
				Vi lærer om forskjellig mat, billig mat og tips for studenter med lite penger. 
					<div id="knapp">
						<a href="#" class="knapp">Les mer</a>
					</div>	
				</div>
			</div>
			<div class="utvalg">
				<label class="utvalgname" for="ut1" onClick>BOK</label>
				<div class="utvalginfo"><h3>Bokutvalget</h3>
				Utvalget er for de som er interessert i å lese bøker.  <br>
				Det arrangeres møter hvor det diskuteres om forskjellige bøker i alle sjangre. <br>
				Ikke noe krav om hvor mye man leser, gruppen er åpen for alle.
					<div id="knapp">
						<a href="#" class="knapp">Les mer</a>
					</div>					
				</div>
			</div>
			<div class="utvalg">
				<label class="utvalgname" for="ut1" onClick>MUS</label>
				<div class="utvalginfo"><h3>Musikkutvalget</h3>
				For de studentene som elsker musikk. <br>
				Her både lages og spilles musikk. <br>
				Etter hvert som utvalget har stabilisert seg som et fast utvalg for skolen, <br>
				har interessen bare økt å det er nå flere jam kvelder og konserter i året. 
					<div id="knapp">
						<a href="#" class="knapp">Les mer</a>
					</div>	
				</div>
			</div>
    	</div>
    	</div>
    	<div id='slide5' class='item'>
            <h1>Logg inn for å melde deg inn :D</h1>
    	</div>
    </div>
    
<!-- border -->
    
<div class="colorBorder">
	<div id="red" class="color"></div>
	<div id="orange" class="color"></div>
	<div id="yellow" class="color"></div>
	<div id="blue" class="color"></div>
	<div id="purple" class="color"></div>
</div>

<!-- border-slutt -->


<div class="uWrapper">

    <div class="uTittel">
    
    	<h1 class="fl">#westerBar</h1>
    	<span class="fr expand-collapse-text"><i class="fa fa-chevron-down"></i></span>
    	<span class="fr expand-collapse-text initial-expand"><i class="fa fa-chevron-up"></i></span>
    
    </div> <!-- end content-module-heading -->
    
    
    <div class="uInnhold">
    
    	<h3>#westerBar</h3>
		<p>	Er du sosial og serviceinnstilt, da er #westerBar tingen for deg! <br> 
		    I dette utvalget er jobben å selge drikke til medstudenter og skape et sosialt nettverk. <br>
			Du vil i tillegg som takk for jobben få rabatt på produkter.</p>
    	
    </div> <!-- end content-module-main -->
    
    <div class="uTittel">
    
    	<h1 class="fl">Leder og lignende</h1>
    	<span class="expand-collapse-text"><i class="fa fa-chevron-down"></i></span>
    	<span class="expand-collapse-text initial-expand"><i class="fa fa-chevron-up"></i></span>
    
    </div> <!-- end content-module-heading -->
    
    
    <div class="uInnhold">
    
    	<h3>Leder og lignende</h3>
		<p>	Lol er gruppen for deg som er interessert i å lære mer om det å være en leder. <br>
			En gang i måneden er det foredrag fra en eller flere av medlemmene for å vise hva man kan og har lært. <br>
			I tillegg til å bli kvitt eventuelle problemer med å stå foran en forsamling.</p>
    	
    </div> <!-- end content-module-main -->
    
    	<div class="uTittel">
    
    	<h1 class="fl">Prosjektutvalg for spill</h1>
    	<span class="expand-collapse-text"><i class="fa fa-chevron-down"></i></span>
    	<span class="expand-collapse-text initial-expand"><i class="fa fa-chevron-up"></i></span>
    
    </div> <!-- end content-module-heading -->
    
    
    <div class="uInnhold">
    
    	<h3>Prosjektutvalg for spill</h3>
		<p>	Utvalget er laget for å heve interessen for å produsere egne spill. <br>
			Det er også lagt opp for at man skal finne andre studenter som er interessert i å kunne lage spill, når                        skoletiden er over.</p>
    	
    </div> <!-- end content-module-main -->
    
    
    	<div class="uTittel">
    
    	<h1 class="fl">Prosjektutvalg for musikk</h1>
    	<span class="expand-collapse-text"><i class="fa fa-chevron-down"></i></span>
    	<span class="expand-collapse-text initial-expand"><i class="fa fa-chevron-up"></i></span>
    
    </div> <!-- end content-module-heading -->
    
    
    <div class="uInnhold">
    
    	<h3>Prosjektutvalg for musikk</h3>
		<p>	Utvalget er laget for å heve interessen for å produsere egen musikk. <br>
			Det er også lagt opp for at man skal finne andre studenter som er interessert i å lage musikk.</p>
    	
    </div> <!-- end content-module-main -->
    
    </div> <!-- end content-module -->
    
    <div class="uTittel">
    
    	<h1 class="fl">Utviklingsvalget</h1>
    	<span class="expand-collapse-text"><i class="fa fa-chevron-down"></i></span>
    	<span class="expand-collapse-text initial-expand"><i class="fa fa-chevron-up"></i></span>
    
    </div> <!-- end content-module-heading -->
    
    
    <div class="uInnhold">
    
        <h3>Utviklingsvalget</h3>
    		<p>Lære studentene i felt som skolen ikke har ordinær undervisning i. <br>
    		Det tilbys kurs og workshops, i tillegg brukes det som et forum for at studentene kan få feedback på egneprosjekter.</p>
    	
    </div> <!-- end content-module-main -->
    
    <div class="uTittel">
    
    	<h1 class="fl">Utvalg for smarte gamere</h1>
    	<span class="expand-collapse-text"><i class="fa fa-chevron-down"></i></span>
    	<span class="expand-collapse-text initial-expand"><i class="fa fa-chevron-up"></i></span>
    
    </div> <!-- end content-module-heading -->
    
    
    <div class="uInnhold">
    
    	<h3>Utvalg for smarte gamere</h3>
		<p>Dette utvalget er for de spill interesserte. <br>
		Utvalget arrangerer ofte LAN og andre konkurranser for skolens studenter.</p>
    	
    </div> <!-- end content-module-main -->
    
    <div class="uTittel">
    
    	<h1 class="fl">Westerdals Blind Date Exclusive</h1>
    	<span class="expand-collapse-text"><i class="fa fa-chevron-down"></i></span>
    	<span class="expand-collapse-text initial-expand"><i class="fa fa-chevron-up"></i></span>
    
    </div> <!-- end content-module-heading -->
    
    
    <div class="uInnhold">
    
    	<h3>Westerdals Blind Date Exclusive</h3>
		<p>Dette er utvalget for ALLE. <br>
		    Noen ganger i måneden arrangerer vi blind dates. <br>
			Konseptet er enkelt: Du melder deg inn i gruppen for deretter å kaste en terning. <br>
			Du vil deretter få beskjed når du får en date. <br>
			Som regel tar det noen dager, maks 2 uker. <br>
			Før du kaster terningen fyller du ut et skjema.</p>
    	
    </div> <!-- end content-module-main -->
    
    <div class="uTittel">
    
    	<h1 class="fl">Sosialutvalget</h1>
    	<span class="expand-collapse-text"><i class="fa fa-chevron-down"></i></span>
    	<span class="expand-collapse-text initial-expand"><i class="fa fa-chevron-up"></i></span>
    
    </div> <!-- end content-module-heading -->
    
    
    <div class="uInnhold">
    
    	<h3>Sosialutvalget</h3>
		<p>Hovedansvaret for sosiale eventer på skolen. <br>
			Utvalget arrangerer blant annet en storfest i måneden.</p>
    	
    </div> <!-- end content-module-main -->
    
    <div class="uTittel">
    
    	<h1 class="fl">Kvinner og IT</h1>
    	<span class="expand-collapse-text"><i class="fa fa-chevron-down"></i></span>
    	<span class="expand-collapse-text initial-expand"><i class="fa fa-chevron-up"></i></span>
    
    </div> <!-- end content-module-heading -->
    
    
    <div class="uInnhold">
    
    	<h3>Kvinner og IT</h3>
		<p>Siden det er betydelig færre kvinner, har kvinnene et eget utvalg der de møtes og diskuterer IT sammen. <br>
		    Det er viktig for kvinnene med KIT, for å møtes og føle at de er flere. <br>
			Det arrangeres workshops og minglekvelder.</p>
    	
    </div> <!-- end content-module-main -->
    
    <div class="uTittel">
    
    	<h1 class="fl">Apple User Group</h1>
    	<span class="expand-collapse-text"><i class="fa fa-chevron-down"></i></span>
    	<span class="expand-collapse-text initial-expand"><i class="fa fa-chevron-up"></i></span>
    
    </div> <!-- end content-module-heading -->
    
    
    <div class="uInnhold">
    
    	<h3>Apple User Group</h3>
		<p>Gruppa for de som bruker Apple – produkter. <br>
		Legges opp for at Apple brukere skal få samme utdanning som andre studenter. <br>
		Andre programmer som kan være bedre for en Apple bruker blir presentert og man hjelper hverandre i forskjellige                 problemer.</p>
    	
    </div> <!-- end content-module-main -->
    
    <div class="uTittel">
    
    	<h1 class="fl">Westerdals TV Group</h1>
    	<span class="expand-collapse-text"><i class="fa fa-chevron-down"></i></span>
    	<span class="expand-collapse-text initial-expand"><i class="fa fa-chevron-up"></i></span>
    
    </div> <!-- end content-module-heading -->
    
    
    <div class="uInnhold">
    
    	<h3>Westerdals TV Group</h3>
		<p>Utvalget for deg som vil se og lære hvordan TV- sendinger spilles inn. <br>
			Vi drar en til to ganger i måneden rundt til forskjellige TV-stasjoner. <br>
			Blant annet NRK, TV2 og TV3. <br>
			I tillegg til å få info og læring om det å lage TV, er vi ofte statister og publikum i forskjellige sendinger                  .</p>
    	
    </div> <!-- end content-module-main -->
    
    <div class="uTittel">
    
    	<h1 class="fl">Idrettsutvalget</h1>
    	<span class="expand-collapse-text"><i class="fa fa-chevron-down"></i></span>
    	<span class="expand-collapse-text initial-expand"><i class="fa fa-chevron-up"></i></span>
    
    </div> <!-- end content-module-heading -->
    
    
    <div class="uInnhold">
    
    	<h3>Idrettsutvalget</h3>
		<p>For de sporty studentene. <br>
		    Per i dag tilbys det bare bedriftsfotball, men planen er å lage lag for andre bedriftsidretter også som: <br>
            1.	Håndball <br>
            2.	Tennis <br>
            3.	Hockey</p>
    	
    </div> <!-- end content-module-main -->
    
    <div class="uTittel">
    
    	<h1 class="fl">Teater og Musikal</h1>
    	<span class="expand-collapse-text"><i class="fa fa-chevron-down"></i></span>
    	<span class="expand-collapse-text initial-expand"><i class="fa fa-chevron-up"></i></span>
    
    </div> <!-- end content-module-heading -->
    
    
    <div class="uInnhold">
    
    	<h3>Teater og Musikal</h3>
		<p>Utvalget er for deg som er interessert i teater og/eller musikal. <br>
			Utvalget setter opp en til to forestillinger i halvåret. <br>
			Utvalget kjøper stykker basert på hva gruppens medlemmer vil sette opp.</p>
    	
    </div> <!-- end content-module-main -->
    
    <div class="uTittel">
    
    	<h1 class="fl">Matutvalget</h1>
    	<span class="expand-collapse-text"><i class="fa fa-chevron-down"></i></span>
    	<span class="expand-collapse-text initial-expand"><i class="fa fa-chevron-up"></i></span>
    
    </div> <!-- end content-module-heading -->
    
    
    <div class="uInnhold">
    
    	<h3>Matutvalget</h3>
		<p>For deg som liker å lage mat, eller har lyst til å lære å lage mat. <br>
			Gruppen er for alle, å det er ikke noe bestemt nivå. <br>
			Vi lærer om forskjellig mat, billig mat og tips for studenter med lite penger.</p>
    	
    </div> <!-- end content-module-main -->
    
    <div class="uTittel">
    
    	<h1 class="fl">Bokutvalget</h1>
    	<span class="expand-collapse-text"><i class="fa fa-chevron-down"></i></span>
    	<span class="expand-collapse-text initial-expand"><i class="fa fa-chevron-up"></i></span>
    
    </div> <!-- end content-module-heading -->
    
    
    <div class="uInnhold">
    
    	<h3>Bokutvalget</h3>
		<p>Utvalget er for de som er interessert i å lese bøker.  <br>
			Det arrangeres møter hvor det diskuteres om forskjellige bøker i alle sjangre. <br>
			Ikke noe krav om hvor mye man leser, gruppen er åpen for alle.</p>
    	
    </div> <!-- end content-module-main -->
    
    <div class="uTittel">
    
    	<h1 class="fl">Musikkutvalget</h1>
    	<span class="expand-collapse-text"><i class="fa fa-chevron-down"></i></span>
    	<span class="expand-collapse-text initial-expand"><i class="fa fa-chevron-up"></i></span>
    
    </div> <!-- end content-module-heading -->
    
    
    <div class="uInnhold">
    
    	<h3>Musikkutvalget</h3>
		<p>For de studentene som elsker musikk. <br>
			Her både lages og spilles musikk. <br>
			Etter hvert som utvalget har stabilisert seg som et fast utvalg for skolen, <br>
			har interessen bare økt å det er nå flere jam kvelder og konserter i året.</p>
    	
    </div> <!-- end content-module-main -->
	
	

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
  
    $('.utvalgname').on('click', function() {
  	$('.utvalginfo').slideUp('fast');
  	$(this).next().delay('500').slideToggle('fast');
  });
  
  $(document).ready(function() {

	$(".initial-expand").hide();

	$("div.uTittel").click(function(){
		$(this).next("div.uInnhold").slideToggle();

		$(this).children(".expand-collapse-text").toggle();
	});
	
});
 
});
</script>
</html>