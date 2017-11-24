<html>
<head>
<title>Filmtitel op Kiekn.nl</title>
<link rel="stylesheet" href="icomoon.css">
    <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
		<?php include 'nav1.php';?>
</header>
<main>
	<div id="content">
        <h2>Samen Kiekn</h2>
        <p>Hier kan je anderen uitnodigen om samen een film of serie te gaan kijken. Je kan kiezen voor een film of serie op tv, op &eacute;&eacute;n van de streaming-kanalen of uiteraard in een bioscoop of filmhuis. Je hebt bij elke film of serie de mogelijkheid om hem toe te voegen aan je selectie met de knop Kiekn+.</p>
        <form class="merlin">
            <fieldset>
                <legend>
                    <h2>Filmselectie</h2>
                </legend>
                <input type="checkbox" name="BladeRunner" id="BladeRunner">
                <label for="BladeRunner">
                    <img src="images/Blade-Runner-1982-SS14.jpg" class="cover"><h2>Blade Runner, the director's cut<div class="imdb_vote">3,75</div></h2>
                    <p><span class="timedetails">Morgen om <strong>20:30</strong> op <strong>RTL4</strong></span></p>
                </label>
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
                <textarea id="message" name="message" placeholder="Write your message here.">Ik wil jullie graag uitnodigen om deze film samen te kijken.</textarea>
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