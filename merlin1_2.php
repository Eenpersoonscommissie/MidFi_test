<html>
<head>
<title>Filmtitel op Kiekn.nl</title>
<link rel="stylesheet" href="icomoon.css">
<link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
		<?php include 'nav2.php';?>
</header>
<main>
        <div class="overlay">
            <div class="send">
                 <h1>Uitnodiging verstuurd</h1>
                <form class="merlin">
                <p>Je uitnodiging is met succes verstuurd! <br/> Details over deze uitnodiging kun je checken via jouw persoonlijke agenda.</p>
                    <fieldset>
                        <legend>
                            <h3>Bericht: </h3>
                        </legend>
                        Ik wil jullie graag uitnodigen om deze film samen te kijken in de bios.
                    </fieldset>
                    <fieldset id="vrienden">
                        <legend><h3>Met wie:</h3></legend>
                        <label for="dennis"><img src="images/dennis.jpg" title="Dennis"><span>Dennis</span></label>
                        <label for="erwin"><img src="images/erwin.jpg" title="Erwin"><span>Erwin</span></label>
                        <label for="jeannette"><img src="images/jeannette.jpg" title="Jeannette"><span>Jeannette</span></label>
                    </fieldset>

                    <fieldset id="film">
                        <legend>
                            <h3>Welke film en wanneer:</h3>
                        </legend>
                            <h2>Blade Runner 2049<div class="imdb_vote">3,75</div></h2><img src="images/Blade-Runner-2049.jpg" class="cover">
                        <div class="timedetails">
                            Vrijdag om 19.00uur bij de Path&eacute; in Arnhem
                        </div>
                    </fieldset>
                </form>
                  <div class="submit">
                    <a href="film1.php"><input type="submit" value="Terug" id="submit" /></a>
                  </div>
            </div>
        </div>
       
	<div id="content">
       
        <h2>Samen Kiekn</h2>
        <p>Hier kan je anderen uitnodigen om samen een film of serie te gaan kijken. Je kan kiezen voor een film of serie op tv, op &eacute;&eacute;n van de streaming-kanalen of uiteraard in een bioscoop of filmhuis. Je hebt bij elke film of serie de mogelijkheid om hem toe te voegen aan je selectie met de knop Kiekn+.</p>
        <form class="merlin">
            <fieldset id="films">
                <legend>
                    <h2>Filmselectie</h2>
                </legend>
                <input type="checkbox" name="BladeRunner" id="BladeRunner" checked>
                <label for="BladeRunner">
                    <img src="images/Blade-Runner-2049.jpg" class="cover"><h2>Blade Runner 2049<div class="imdb_vote">3,75</div></h2>
                </label>
				<div class="timedetails">
					<h3 class="bios">Path&eacute; Arnhem</h3>
					<dl>
						<dt>vandaag</dt>
						<dd><input type="radio" name="vandaag" id="1.1">
                <label for="1.1">10:30</label></dd>
						<dd><input type="radio" name="vandaag" id="1.2">
                <label for="1.2">13:15</label></dd>
						<dd><input type="radio" name="vandaag" id="1.3">
                <label for="1.3">16:15</label></dd>
						<dd><input type="radio" name="vandaag" id="1.4">
                <label for="1.4">19:00</label></dd>
						<dd><input type="radio" name="vandaag" id="1.5">
                <label for="1.5">21:00</label></dd>
					</dl>
					<dl>
						<dt>morgen</dt>
						<dd><input type="radio" name="morgen" id="2.1">
                <label for="2.1">10:30</label></dd>
						<dd><input type="radio" name="morgen" id="2.2">
                <label for="2.2">13:15</label></dd>
						<dd><input type="radio" name="morgen" id="2.3">
                <label for="2.3">16:15</label></dd>
						<dd><input type="radio" name="morgen" id="2.4">
                <label for="2.4">19:00</label></dd>
						<dd><input type="radio" name="morgen" id="2.5">
                <label for="2.5">21:00</label></dd>
					</dl>
					<dl>
						<dt>woensdag</dt>
						<dd><input type="radio" name="woensdag" id="3.1">
                <label for="3.1">10:30</label></dd>
						<dd><input type="radio" name="woensdag" id="3.2">
                <label for="3.2">13:15</label></dd>
						<dd><input type="radio" name="woensdag" id="3.3">
                <label for="3.3">16:15</label></dd>
						<dd><input type="radio" name="woensdag" id="3.4">
                <label for="3.4">19:00</label></dd>
						<dd><input type="radio" name="woensdag" id="3.5">
                <label for="3.5">21:00</label></dd>
					</dl>
					<dl>
						<dt>donderdag</dt>
						<dd><input type="radio" name="donderdag" id="4.1">
                <label for="4.1">10:30</label></dd>
						<dd><input type="radio" name="donderdag" id="4.2">
                <label for="4.2">13:15</label></dd>
						<dd><input type="radio" name="donderdag" id="4.3">
                <label for="4.3">16:15</label></dd>
						<dd><input type="radio" name="donderdag" id="4.4">
                <label for="4.4">19:00</label></dd>
						<dd><input type="radio" name="donderdag" id="4.5">
                <label for="4.5">21:00</label></dd>
					</dl>
					<dl>
						<dt>vrijdag</dt>
						<dd><input type="radio" name="vrijdag" id="4.1">
                <label for="4.1">10:30</label></dd>
						<dd><input type="radio" name="vrijdag" id="4.2">
                <label for="4.2">13:15</label></dd>
						<dd><input type="radio" name="vrijdag" id="4.3">
                <label for="4.3">16:15</label></dd>
						<dd><input type="radio" name="vrijdag" id="4.4">
                <label for="4.4">19:00</label></dd>
						<dd><input type="radio" name="vrijdag" id="4.5">
                <label for="4.5">21:00</label></dd>
					</dl>
				</div>
            </fieldset>
            <fieldset id="vrienden">
                <legend><h2>Vrienden <span class="small">Kies de vrienden die je wil uitnodigen:</span></h2></legend>
                
            <input type="checkbox" name="antony" id="antony">
                <label for="antony"><img src="images/antony.jpg" title="Antony" class="vriendselect"><span>Antony</span></label>
            <input type="checkbox" name="christian" id="christian" class="vriendselect">
                <label for="christian"><img src="images/christian.jpg" title="Christian"><span>Christian</span></label>
            <input type="checkbox" name="dennis" id="dennis" class="vriendselect">
                <label for="dennis"><img src="images/dennis.jpg" title="Dennis"><span>Dennis</span></label>
            <input type="checkbox" name="dirkjan" id="dirkjan" class="vriendselect">
                <label for="dirkjan"><img src="images/dirkjan2.jpg" title="Dirkjan"><span>Dirk Jan</span></label>
            <input type="checkbox" name="edson" id="edson" class="vriendselect">
                <label for="edson"><img src="images/edson.jpg" title="Edson"><span>Edson</span></label>
            <input type="checkbox" name="epco" id="epco" class="vriendselect">
                <label for="epco"><img src="images/epco.jpg" title="Epco"><span>Epco</span></label>
            <input type="checkbox" name="erwin" id="erwin" class="vriendselect">
                <label for="erwin"><img src="images/erwin.jpg" title="Erwin"><span>Erwin</span></label>
            <input type="checkbox" name="jeannette" id="jeannette" class="vriendselect">
                <label for="jeannette"><img src="images/jeannette.jpg" title="Jeannette"><span>Jeannette</span></label>
            <input type="checkbox" name="rik" id="rik" class="vriendselect">
                <label for="rik"><img src="images/rik.jpg" title="rik"><span>Rik</span></label>
            </fieldset>
            <fieldset>
                <legend><h2>Anderen <span class="small">die nog niet op Kiekn zitten een uitnodiging sturen</span></h2></legend>
                <label for="email">E-mail adressen: <small>Zet bij meer adressen een komma tussen de e-mails!</small> </label><br/>
                <input type="email" id="email" name="email" value="" placeholder="ander@e-mail.com, dinges@e-mail.com" required="required"  size="80"/>
            </fieldset>
            <fieldset>
                <legend>
                    <h2>Bericht <span class="small">Pas het volgende bericht aan naar je eigen smaak.</span></h2>
                </legend>
                <textarea id="message" name="message" placeholder="Write your message here.">Ik wil jullie graag uitnodigen om deze film samen te kijken in de bios.</textarea>
            </fieldset>
            <br/>
            <a href="invite_sent.php"><input type="submit" value="Stuur uitnodiging" id="submit" /></a>
        </form>
	</div>
  <aside>
			<?php include 'aside_tv.php';?>
			<?php include 'aside_films.php';?>
		</aside>     
    </main>
		<?php include 'footer.php';?>
</body>
</html>