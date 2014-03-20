<?php
require 'system/objekter.php';
$general->logged_out_protect();

$userid = $_SESSION['id'];
$brukernavn = $users->getUsername($userid);

    if (isset($_POST['submit'])) {

        $fakultet1 = (empty($_POST['kommunikasjon'])) ? 0 : $_POST['kommunikasjon'] = 'kommunikasjon';
 
        $fakultet2 = (empty($_POST['ledelse'])) ? 0 : $_POST['ledelse'] = 'ledelse';
         
        $fakultet3 = (empty($_POST['musikkscene'])) ? 0 : $_POST['musikkscene'] = 'musikk og scene';
        
        $fakultet4 = (empty($_POST['teknologi'])) ? 0 : $_POST['teknologi'] = 'teknologi';
         
        $fakultet5 = (empty($_POST['film'])) ? 0 : $_POST['film'] = 'film og TV';
        
        $westerbar = (empty($_POST['westerbar'])) ? 0 : $_POST['westerbar'] = 'westerbar';
 
        $lol = (empty($_POST['lol'])) ? 0 : $_POST['lol'] = 'lol';
         
        $pus = (empty($_POST['pus'])) ? 0 : $_POST['pus'] = 'pus';
        
        $pum = (empty($_POST['pum'])) ? 0 : $_POST['pum'] = 'pum';
         
        $utv = (empty($_POST['utv'])) ? 0 : $_POST['utv'] = 'utv';
        
        $ufsg = (empty($_POST['ufsg'])) ? 0 : $_POST['ufsg'] = 'ufsg';
        
        $sos = (empty($_POST['sos'])) ? 0 : $_POST['sos'] = 'sos';
 
        $kit = (empty($_POST['kit'])) ? 0 : $_POST['kit'] = 'kit';
         
        $aug = (empty($_POST['aug'])) ? 0 : $_POST['aug'] = 'aug';
        
        $wtvg = (empty($_POST['wtvg'])) ? 0 : $_POST['wtvg'] = 'wtvg';
         
        $idrettsutvalget = (empty($_POST['idrettsutvalget'])) ? 0 : $_POST['idrettsutvalget'] = 'iuv';
        
        $tom = (empty($_POST['tom'])) ? 0 : $_POST['tom'] = 'tom';
        
        $mat = (empty($_POST['mat'])) ? 0 : $_POST['mat'] = 'mat';
         
        $bok = (empty($_POST['bok'])) ? 0 : $_POST['bok'] = 'bok';
        
        $mus = (empty($_POST['mus'])) ? 0 : $_POST['mus'] = 'mus';
        
        $wbde = (empty($_POST['wbde'])) ? 0 : $_POST['wbde'] = 'wdbe';
        
	
		$users->meld($userid, $fakultet1, $fakultet2, $fakultet3, $fakultet4, $fakultet5, $westerbar, $lol, $pus, $pum, $utv, $ufsg, $sos, $kit,
		$aug, $wtvg, $idrettsutvalget, $tom, $mat, $bok, $mus, $wbde);
		header('Location: profil.php');
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
    <li><a id="nav3" class="navClass" href="logout.php" onclick='reloadPage()'><img src="img/wrench.png">Logg ut</a></li>
  </ul>
</nav>
 
<div class="wrapper">
  <div class="inner">
    <header>
      <label class="btn" for="toggle" onclick><img src="img/reorder.png"></label>
    </header>
  </div>

<div id="header"><img src="Logo/westerdals2.png"></img><h1>Westerdals</h1></div>

<form action="hjem.php" method="post">

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
<!--	<div id="slide2" class="item">

	</div>-->
<div id='slide3' class='item'>
    	    <h1>Velg fakultet</h1>
    	    <div id='sliderWrapper'>
    	        <div class='fakultet'>
                    <input id='fak1' type='checkbox' class="checkFakultet" name='kommunikasjon' value='Fakultet1'>
                    <label for='fak1' onClick><img id="valgt1" class="fakultetImg" src='img/KommunikasjonIkon2.png'></label><p>Kommunikasjon</p><img  id="valgt1" class="valgt" src="img/done-2x.png">
                </div>
                <div class='fakultet'>
                    <input id='fak2' type='checkbox' class="checkFakultet" name='ledelse' value='Fakultet2'>
                    <label for="fak2" onClick><img class="fakultetImg" src="img/LedelseIkon2.png"></label>
                    <p>Ledelse</p><img id="valgt2" class="valgt" src="img/done-2x.png">
                </div>
                <div class="fakultet">
                    <input id='fak3' type='checkbox' class="checkFakultet" name='musikkscene' value='Fakultet3'>
                    <label for='fak3' onClick><img class="fakultetImg" src='img/MusikkOgSceneIkon2.png'></label>
                    <p>Musikk og scene</p><img id="valgt3" class="valgt" src="img/done-2x.png">
                </div>
                <div class='fakultet'>
                    <input id='fak4' type='checkbox' class="checkFakultet" name='teknologi' value='Fakultet4'>
                    <label for='fak4' onClick><img class="fakultetImg" src='img/TeknologiIkon2.png'></label>
                    <p>Teknologi</p><img id="valgt4" class="valgt" src="img/done-2x.png">
                </div>
                <div class='fakultet'>
                    <input id='fak5' type='checkbox' class="checkFakultet" name='film' value='Fakultet5'>
                    <label for='fak5' onClick><img class="fakultetImg" src='img/FilmOgTvIkon2.png'></label>
                    <p>Film og TV</p><img id="valgt5" class="valgt" src="img/done-2x.png">
                </div>
    	    </div>
    	</div>
     
    	<div id='slide4' class='item'>
    	    <h1>Velg utvalg</h1>
            <div id="sliderWrapper">
			<div class="utvalg">
			    <input id="ut1" class="checkUtvalg" type='checkbox' name='westerbar' value='westerbar'>
				<label class="utvalgname" for="ut1" onClick>#wBar</label>
				<div class="utvalginfo"><h3>#westerBar</h3>
				Er du sosial og serviceinnstilt, da er #westerBar tingen for deg! <br> 
				I dette utvalget er jobben å selge drikke til medstudenter og skape et sosialt nettverk. <br>
				Du vil i tillegg som takk for jobben få rabatt på produkter.
					<div id="knapp">
					    <label class="utvalgname" for="ut1" onClick>#wBar</label>
						<a href="#" class="knapp">Les mer</a>
					</div><img src="img/bar.png" class="icon"> </img>
				</div>
			</div>
			<div class="utvalg">
			    <input id="ut2" class="checkUtvalg" type='checkbox' name='lol' value='lol'>
				<label class="utvalgname" for="ut2" onClick>LOL</label>
				<div class="utvalginfo"><h3>Leder og lignende</h3>
				Lol er gruppen for deg som er interessert i å lære mer om det å være en leder. <br>
				En gang i måneden er det foredrag fra en eller flere av medlemmene for å vise hva man kan og har lært. <br>
				I tillegg til å bli kvitt eventuelle problemer med å stå foran en forsamling.
					<div id="knapp">
						<a href="#" class="knapp">Les mer</a>
					</div><img src="img/lol.png" class="icon"> </img>
				</div>
			</div>
			<div class="utvalg">
			    <input id="ut3" class="checkUtvalg" type='checkbox' name='pus' value='pus'>
				<label class="utvalgname" for="ut3" onClick>PUS</label>
				<div class="utvalginfo"><h3>Prosjektutvalg for spill</h3>
				Utvalget er laget for å heve interessen for å produsere egne spill. <br>
				Det er også lagt opp for at man skal finne andre studenter som er interessert i å kunne lage spill, når                      skoletiden er over.
					<div id="knapp">
						<a href="#pus" class="knapp">Les mer</a>
					</div><img src="img/pus.png" class="icon"> </img>
				</div>
			</div>
			<div class="utvalg">
			    <input id="ut4" class="checkUtvalg" type='checkbox' name='pum' value='pum'>
				<label class="utvalgname" for="ut4" onClick>PUM</label>
				<div class="utvalginfo"><h3>Prosjektutvalg for musikk</h3>
				Utvalget er laget for å heve interessen for å produsere egen musikk. <br>
				Det er også lagt opp for at man skal finne andre studenter som er interessert i å lage musikk.
					<div id="knapp">
						<a href="#" class="knapp">Les mer</a>
					</div><img src="img/pum.png" class="icon"> </img>
				</div>
			</div>
			<div class="utvalg">
			    <input id="ut5" class="checkUtvalg" type='checkbox' name='utv' value='utv'>
				<label class="utvalgname" for="ut5" onClick>UTV</label>
				<div class="utvalginfo"><h3>Utviklingsvalget</h3>
				Lære studentene i felt som skolen ikke har ordinær undervisning i. <br>
				Det tilbys kurs og workshops, i tillegg brukes det som et forum for at studentene kan få feedback på egne                      prosjekter.
					<div id="knapp">
						<a href="#" class="knapp">Les mer</a>
					</div><img src="img/utv.png" class="icon"> </img>
				</div>
			</div>
			<div class="utvalg">
			    <input id="ut6" class="checkUtvalg" type='checkbox' name='ufsg' value='ufsg'>
				<label class="utvalgname" for="ut6" onClick>UFSG</label>
				<div class="utvalginfo"><h3>Utvalg for smarte gamere</h3>
				Dette utvalget er for de spill interesserte. <br>
				Utvalget arrangerer ofte LAN og andre konkurranser for skolens studenter.
					<div id="knapp">
						<a href="#" class="knapp">Les mer</a>
					</div><img src="img/ufsg.png" class="icon"> </img>
				</div>
			</div>
			<div class="utvalg">
			    <input id="ut7" class="checkUtvalg" type='checkbox' name='wbde' value='wbde'>
				<label class="utvalgname" for="ut7" onClick>WBDE</label>
				<div class="utvalginfo"><h3>Westerdals Blind Date Exclusive</h3>
				Dette er utvalget for ALLE. <br>
				Noen ganger i måneden arrangerer vi blind dates. <br>
				Konseptet er enkelt: Du melder deg inn i gruppen for deretter å kaste en terning. <br>
				Du vil deretter få beskjed når du får en date. <br>
				Som regel tar det noen dager, maks 2 uker. <br>
				Før du kaster terningen fyller du ut et skjema. 
					<div id="knapp">
						<a href="#" class="knapp">Les mer</a>
					</div><img src="img/blind.png" class="icon"> </img>
				</div>
			</div>
			<div class="utvalg">
			    <input id="ut8" class="checkUtvalg" type='checkbox' name='sos' value='sos'>
				<label class="utvalgname" for="ut8" onClick>SOS</label>
				<div class="utvalginfo"><h3>Sosialutvalget</h3>
				Hovedansvaret for sosiale eventer på skolen. <br>
				Utvalget arrangerer blant annet en storfest i måneden.
					<div id="knapp">
						<a href="#" class="knapp">Les mer</a>
					</div><img src="img/sos.png" class="icon"> </img>				
				</div>
			</div>
			<div class="utvalg">
			    <input id="ut9" class="checkUtvalg" type='checkbox' name='kit' value='kit'>
				<label class="utvalgname" for="ut9" onClick>KIT</label>
				<div class="utvalginfo"><h3>Kvinner og IT</h3>
				Siden det er betydelig færre kvinner, har kvinnene et eget utvalg der de møtes og diskuterer IT sammen. <br>
				Det er viktig for kvinnene med KIT, for å møtes og føle at de er flere. <br>
				Det arrangeres workshops og minglekvelder.
					<div id="knapp">
						<a href="#" class="knapp">Les mer</a>
					</div><img src="img/kit.png" class="icon"> </img>			
				</div>
			</div>
			<div class="utvalg">
			    <input id="ut10" class="checkUtvalg" type='checkbox' name='aug' value='aug'>
				<label class="utvalgname" for="ut10" onClick>AUG</label>
				<div class="utvalginfo"><h3>Apple User Group</h3>
				Gruppa for de som bruker Apple – produkter. <br>
				Legges opp for at Apple brukere skal få samme utdanning som andre studenter. <br>
				Andre programmer som kan være bedre for en Apple bruker blir presentert og man hjelper hverandre i forskjellige                 problemer.
					<div id="knapp">
						<a href="#" class="knapp">Les mer</a>
					</div><img src="img/aug.png" class="icon"> </img>				
				</div>
			</div>
			<div class="utvalg">
			    <input id="ut11" class="checkUtvalg" type='checkbox' name='wtvg' value='wtvg'>
				<label class="utvalgname" for="ut11" onClick>WTVG</label>
				<div class="utvalginfo"><h3>Westerdals TV Group</h3>
				Utvalget for deg som vil se og lære hvordan TV- sendinger spilles inn. <br>
				Vi drar en til to ganger i måneden rundt til forskjellige TV-stasjoner. <br>
				Blant annet NRK, TV2 og TV3. <br>
				I tillegg til å få info og læring om det å lage TV, er vi ofte statister og publikum i forskjellige sendinger                  .
					<div id="knapp">
						<a href="#" class="knapp">Les mer</a>
					</div><img src="img/wtvg.png" class="icon"> </img>					
				</div>
			</div>
			<div class="utvalg">
			    <input id="ut12" class="checkUtvalg" type='checkbox' name='idrettsutvalget' value='iuv'>
				<label class="utvalgname" for="ut12" onClick>IUV</label>
				<div class="utvalginfo"><h3>Idrettsutvalget</h3>
				For de sporty studentene. <br>
				Per i dag tilbys det bare bedriftsfotball, men planen er å lage lag for andre bedriftsidretter også som: <br>
                1.	Håndball <br>
                2.	Tennis <br>
                3.	Hockey
					<div id="knapp">
						<a href="#" class="knapp">Les mer</a>
					</div><img src="img/idrett.png" class="icon"> </img>		                
                </div>
			</div>
			<div class="utvalg">
			    <input id="ut13" class="checkUtvalg" type='checkbox' name='tom' value='tom'>
				<label class="utvalgname" for="ut13" onClick>TOM</label>
				<div class="utvalginfo"><h3>Teater og Musikal</h3>
				Utvalget er for deg som er interessert i teater og/eller musikal. <br>
				Utvalget setter opp en til to forestillinger i halvåret. <br>
				Utvalget kjøper stykker basert på hva gruppens medlemmer vil sette opp.
					<div id="knapp">
						<a href="#" class="knapp">Les mer</a>
					</div><img src="img/tom.png" class="icon"> </img>					
				</div>
			</div>
			<div class="utvalg">
			    <input id="ut14" class="checkUtvalg" type='checkbox' name='mat' value='mat'>
				<label class="utvalgname" for="ut14" onClick>MAT</label>
				<div class="utvalginfo"><h3>Matutvalget</h3>
				For deg som liker å lage mat, eller har lyst til å lære å lage mat. <br>
				Gruppen er for alle, å det er ikke noe bestemt nivå. <br>
				Vi lærer om forskjellig mat, billig mat og tips for studenter med lite penger. 
					<div id="knapp">
						<a href="#" class="knapp">Les mer</a>
					</div><img src="img/mat.png" class="icon"> </img>	
				</div>
			</div>
			<div class="utvalg">
			    <input id="ut15" class="checkUtvalg" type='checkbox' name='bok' value='bok'>
				<label class="utvalgname" for="ut15" onClick>BOK</label>
				<div class="utvalginfo"><h3>Bokutvalget</h3>
				Utvalget er for de som er interessert i å lese bøker.  <br>
				Det arrangeres møter hvor det diskuteres om forskjellige bøker i alle sjangre. <br>
				Ikke noe krav om hvor mye man leser, gruppen er åpen for alle.
					<div id="knapp">
						<a href="#" class="knapp">Les mer</a>
					</div><img src="img/bok.png" class="icon"> </img>					
				</div>
			</div>
			<div class="utvalg">
			    <input id="ut16" class="checkUtvalg" type='checkbox' name='mus' value='mus'>
				<label class="utvalgname">MUS</label>
				<div class="utvalginfo"><h3>Musikkutvalget</h3>
				For de studentene som elsker musikk. <br>
				Her både lages og spilles musikk. <br>
				Etter hvert som utvalget har stabilisert seg som et fast utvalg for skolen, <br>
				har interessen bare økt å det er nå flere jam kvelder og konserter i året. 
					<div id="knapp">
						<a href="#" class="knapp" for="ut16" onClick>Les mer</a>
					</div><img src="img/mus.png" class="icon"> </img>	
				</div>
			</div>
    	</div>
    	</div>
    	<div id='slide5' class='item'>
    	<div id="sliderWrapper">
    	    <div id="knapp2"><div id="knapp1"><div id="knapp"><input type = 'submit' class="meld" name = 'submit' value = 'Meld deg på!'/>
    	</div></div></div>
    </div>
    </form>
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
    	<span class="expand-collapse-text"><i class="fa fa-chevron-down"></i></span>
    	<span class="expand-collapse-text initial-expand"><i class="fa fa-chevron-up"></i></span>
	
	</div> <!-- end content-module-heading -->
	
	
    <div class="uInnhold">
    <div class="uBanner" style="background-image: url(img/øl.jpeg)"></div>
    <div class="uTekst"><h3>#westerBar</h3>
		<p>	Er du sosial og serviceinnstilt, da er #westerBar tingen for deg! <br> 
		    I dette utvalget er jobben å selge drikke til medstudenter og skape et sosialt nettverk. <br>
			Du vil i tillegg som takk for jobben få rabatt på produkter.</p>
	</div>
    	
    </div> <!-- end content-module-main -->
    
    <div class="uTittel">
    
    	<h1 class="fl">Leder og lignende</h1>
    	<span class="expand-collapse-text"><i class="fa fa-chevron-down"></i></span>
    	<span class="expand-collapse-text initial-expand"><i class="fa fa-chevron-up"></i></span>
    
    </div> <!-- end content-module-heading -->
    
    
    <div class="uInnhold">
        <div class="uBanner" style="background-image: url(img/øl.jpeg)"></div>
    	<div class="uTekst"><h3>Leder og lignende</h3>
		<p>	Lol er gruppen for deg som er interessert i å lære mer om det å være en leder. <br>
			En gang i måneden er det foredrag fra en eller flere av medlemmene for å vise hva man kan og har lært. <br>
			I tillegg til å bli kvitt eventuelle problemer med å stå foran en forsamling.</p></div>
    	
    </div> <!-- end content-module-main -->
    
    	<div class="uTittel">
    
    	<h1 class="fl">Prosjektutvalg for spill</h1>
    	<span class="expand-collapse-text"><i class="fa fa-chevron-down"></i></span>
    	<span class="expand-collapse-text initial-expand"><i class="fa fa-chevron-up"></i></span>
    
    </div> <!-- end content-module-heading -->
    
    
    <div class="uInnhold">
        <div class="uBanner" style="background-image: url(img/øl.jpeg)"></div>
    
    	<div class="uTekst"><h3>Prosjektutvalg for spill</h3>
		<p>	Utvalget er laget for å heve interessen for å produsere egne spill. <br>
			Det er også lagt opp for at man skal finne andre studenter som er interessert i å kunne lage spill, når                        skoletiden er over.</p></div>
    	
    </div> <!-- end content-module-main -->
    
    
    	<div class="uTittel">
    
    	<h1 class="fl">Prosjektutvalg for musikk</h1>
    	<span class="expand-collapse-text"><i class="fa fa-chevron-down"></i></span>
    	<span class="expand-collapse-text initial-expand"><i class="fa fa-chevron-up"></i></span>
    
    </div> <!-- end content-module-heading -->
    
    
    <div class="uInnhold">
        <div class="uBanner" style="background-image: url(img/øl.jpeg)"></div>
    
    	<div class="uTekst"><h3>Prosjektutvalg for musikk</h3>
		<p>	Utvalget er laget for å heve interessen for å produsere egen musikk. <br>
			Det er også lagt opp for at man skal finne andre studenter som er interessert i å lage musikk.</p></div>
    	
    </div> <!-- end content-module-main -->
    
    <div class="uTittel">
    
    	<h1 class="fl">Utviklingsvalget</h1>
    	<span class="expand-collapse-text"><i class="fa fa-chevron-down"></i></span>
    	<span class="expand-collapse-text initial-expand"><i class="fa fa-chevron-up"></i></span>
    
    </div> <!-- end content-module-heading -->
    
    
    <div class="uInnhold">
        <div class="uBanner" style="background-image: url(img/utviklingsutvalget.jpg)"></div>
    
        <div class="uTekst"><h3>Utviklingsvalget</h3>
    		<p>Lære studentene i felt som skolen ikke har ordinær undervisning i. <br>
    		Det tilbys kurs og workshops, i tillegg brukes det som et forum for at studentene kan få feedback på egneprosjekter.</p></div>
    	
    </div> <!-- end content-module-main -->
    
    <div class="uTittel">
    
    	<h1 class="fl">Utvalg for smarte gamere</h1>
    	<span class="expand-collapse-text"><i class="fa fa-chevron-down"></i></span>
    	<span class="expand-collapse-text initial-expand"><i class="fa fa-chevron-up"></i></span>
    
    </div> <!-- end content-module-heading -->
    
    
    <div class="uInnhold">
        <div class="uBanner" style="background-image: url(img/øl.jpeg)"></div>
    
    	<div class="uTekst"><h3>Utvalg for smarte gamere</h3>
		<p>Dette utvalget er for de spill interesserte. <br>
		Utvalget arrangerer ofte LAN og andre konkurranser for skolens studenter.</p></div>
    	
    </div> <!-- end content-module-main -->
    
    <div class="uTittel">
    
    	<h1 class="fl">Westerdals Blind Date Exclusive</h1>
    	<span class="expand-collapse-text"><i class="fa fa-chevron-down"></i></span>
    	<span class="expand-collapse-text initial-expand"><i class="fa fa-chevron-up"></i></span>
    
    </div> <!-- end content-module-heading -->
    
    
    <div class="uInnhold">
        <div class="uBanner" style="background-image: url(img/øl.jpeg)"></div>
    
    	<div class="uTekst"><h3>Westerdals Blind Date Exclusive</h3>
		<p>Dette er utvalget for ALLE. <br>
		    Noen ganger i måneden arrangerer vi blind dates. <br>
			Konseptet er enkelt: Du melder deg inn i gruppen for deretter å kaste en terning. <br>
			Du vil deretter få beskjed når du får en date. <br>
			Som regel tar det noen dager, maks 2 uker. <br>
			Før du kaster terningen fyller du ut et skjema.</p></div>
    	
    </div> <!-- end content-module-main -->
    
    <div class="uTittel">
    
    	<h1 class="fl">Sosialutvalget</h1>
    	<span class="expand-collapse-text"><i class="fa fa-chevron-down"></i></span>
    	<span class="expand-collapse-text initial-expand"><i class="fa fa-chevron-up"></i></span>
    
    </div> <!-- end content-module-heading -->
    
    
    <div class="uInnhold">
        <div class="uBanner" style="background-image: url(img/øl.jpeg)"></div>
    
    	<div class="uTekst"><h3>Sosialutvalget</h3>
		<p>Hovedansvaret for sosiale eventer på skolen. <br>
			Utvalget arrangerer blant annet en storfest i måneden.</p></div>
    	
    </div> <!-- end content-module-main -->
    
    <div class="uTittel">
    
    	<h1 class="fl">Kvinner og IT</h1>
    	<span class="expand-collapse-text"><i class="fa fa-chevron-down"></i></span>
    	<span class="expand-collapse-text initial-expand"><i class="fa fa-chevron-up"></i></span>
    
    </div> <!-- end content-module-heading -->
    
    
    <div class="uInnhold">
        <div class="uBanner" style="background-image: url(img/øl.jpeg)"></div>
    
    	<div class="uTekst"><h3>Kvinner og IT</h3>
		<p>Siden det er betydelig færre kvinner, har kvinnene et eget utvalg der de møtes og diskuterer IT sammen. <br>
		    Det er viktig for kvinnene med KIT, for å møtes og føle at de er flere. <br>
			Det arrangeres workshops og minglekvelder.</p></div>
    	
    </div> <!-- end content-module-main -->
    
    <div class="uTittel">
    
    	<h1 class="fl">Apple User Group</h1>
    	<span class="expand-collapse-text"><i class="fa fa-chevron-down"></i></span>
    	<span class="expand-collapse-text initial-expand"><i class="fa fa-chevron-up"></i></span>
    
    </div> <!-- end content-module-heading -->
    
    
    <div class="uInnhold">
        <div class="uBanner" style="background-image: url(img/øl.jpeg)"></div>
    
    	<div class="uTekst"><h3>Apple User Group</h3>
		<p>Gruppa for de som bruker Apple – produkter. <br>
		Legges opp for at Apple brukere skal få samme utdanning som andre studenter. <br>
		Andre programmer som kan være bedre for en Apple bruker blir presentert og man hjelper hverandre i forskjellige                 problemer.</p></div>
    	
    </div> <!-- end content-module-main -->
    
    <div class="uTittel">
    
    	<h1 class="fl">Westerdals TV Group</h1>
    	<span class="expand-collapse-text"><i class="fa fa-chevron-down"></i></span>
    	<span class="expand-collapse-text initial-expand"><i class="fa fa-chevron-up"></i></span>
    
    </div> <!-- end content-module-heading -->
    
    
    <div class="uInnhold">
        <div class="uBanner" style="background-image: url(img/øl.jpeg)"></div>
    
    	<div class="uTekst"><h3>Westerdals TV Group</h3>
		<p>Utvalget for deg som vil se og lære hvordan TV- sendinger spilles inn. <br>
			Vi drar en til to ganger i måneden rundt til forskjellige TV-stasjoner. <br>
			Blant annet NRK, TV2 og TV3. <br>
			I tillegg til å få info og læring om det å lage TV, er vi ofte statister og publikum i forskjellige sendinger                  .</p></div>
    	
    </div> <!-- end content-module-main -->
    
    <div class="uTittel">
    
    	<h1 class="fl">Idrettsutvalget</h1>
    	<span class="expand-collapse-text"><i class="fa fa-chevron-down"></i></span>
    	<span class="expand-collapse-text initial-expand"><i class="fa fa-chevron-up"></i></span>
    
    </div> <!-- end content-module-heading -->
    
    
    <div class="uInnhold">
        <div class="uBanner" style="background-image: url(img/idrettsutvalg.jpg)"></div>
    
    	<div class="uTekst"><h3>Idrettsutvalget</h3>
		<p>For de sporty studentene. <br>
		    Per i dag tilbys det bare bedriftsfotball, men planen er å lage lag for andre bedriftsidretter også som: <br>
            1.	Håndball <br>
            2.	Tennis <br>
            3.	Hockey</p></div>
    	
    </div> <!-- end content-module-main -->
    
    <div class="uTittel">
    
    	<h1 class="fl">Teater og Musikal</h1>
    	<span class="expand-collapse-text"><i class="fa fa-chevron-down"></i></span>
    	<span class="expand-collapse-text initial-expand"><i class="fa fa-chevron-up"></i></span>
    
    </div> <!-- end content-module-heading -->
    
    
    <div class="uInnhold">
        <div class="uBanner" style="background-image: url(img/øl.jpeg)"></div>
    
    	<div class="uTekst"><h3>Teater og Musikal</h3>
		<p>Utvalget er for deg som er interessert i teater og/eller musikal. <br>
			Utvalget setter opp en til to forestillinger i halvåret. <br>
			Utvalget kjøper stykker basert på hva gruppens medlemmer vil sette opp.</p></div>
    	
    </div> <!-- end content-module-main -->
    
    <div class="uTittel">
    
    	<h1 class="fl">Matutvalget</h1>
    	<span class="expand-collapse-text"><i class="fa fa-chevron-down"></i></span>
    	<span class="expand-collapse-text initial-expand"><i class="fa fa-chevron-up"></i></span>
    
    </div> <!-- end content-module-heading -->
    
    
    <div class="uInnhold">
        <div class="uBanner" style="background-image: url(img/øl.jpeg)"></div>
    
    	<div class="uTekst"><h3>Matutvalget</h3>
		<p>For deg som liker å lage mat, eller har lyst til å lære å lage mat. <br>
			Gruppen er for alle, å det er ikke noe bestemt nivå. <br>
			Vi lærer om forskjellig mat, billig mat og tips for studenter med lite penger.</p></div>
    	
    </div> <!-- end content-module-main -->
    
    <div class="uTittel">
    
    	<h1 class="fl">Bokutvalget</h1>
    	<span class="expand-collapse-text"><i class="fa fa-chevron-down"></i></span>
    	<span class="expand-collapse-text initial-expand"><i class="fa fa-chevron-up"></i></span>
    
    </div> <!-- end content-module-heading -->
    
    <div class="uInnhold">
        <div class="uBanner" style="background-image: url(img/øl.jpeg)"></div>
    
    	<div class="uTekst"><h3>Bokutvalget</h3>
		<p>Utvalget er for de som er interessert i å lese bøker.  <br>
			Det arrangeres møter hvor det diskuteres om forskjellige bøker i alle sjangre. <br>
			Ikke noe krav om hvor mye man leser, gruppen er åpen for alle.</p></div>
    	
    </div> <!-- end content-module-main -->
    
    <div class="uTittel">
    
    	<h1 class="fl">Musikkutvalget</h1>
    	<span class="expand-collapse-text"><i class="fa fa-chevron-down"></i></span>
    	<span class="expand-collapse-text initial-expand"><i class="fa fa-chevron-up"></i></span>
    
    </div> <!-- end content-module-heading -->
    
    
    <div class="uInnhold">
        <div class="uBanner" style="background-image: url(img/matutvalg.jpg)"></div>
    
    	<div class="uTekst"><h3>Musikkutvalget</h3>
		<p>For de studentene som elsker musikk. <br>
			Her både lages og spilles musikk. <br>
			Etter hvert som utvalget har stabilisert seg som et fast utvalg for skolen, <br>
			har interessen bare økt å det er nå flere jam kvelder og konserter i året.</p></div>
    	
    </div> <!-- end content-module-main -->

</div>

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

    $(function(){
        var hash = window.location.hash.split("#")[1];
        if(hash == 'pus'){
            $("#pus").slideDown();
        }
    });
 
});
</script>
</html>