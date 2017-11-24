<html>
<head>
<title>Filmtitel op Kiekn.nl</title>
<link rel="stylesheet" href="icomoon.css">
<link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
<header>
		<?php include 'nav1.php';?>
</header>
<main>
	<div id="content" style="background-image: url(images/Blade-Runner-2049.jpg); background-size: cover;">
        <article id="Films">
            <h1>Blade Runner 2049</h1>
            <iframe width="800" height="400" src="https://www.youtube.com/embed/6KDWGLNhbNo?rel=0" frameborder="0" allowfullscreen></iframe>      
            <div class="knoppen">
                <span class="merlin"><a href="Login2.php" title="Samen naar deze film?"><img src="images/Kiekn%20logo.png" class="logo_kiekn"> Samen kiekn</a></span>
            </div>
            <p>In 'Blade Runner 2049' wordt politieagent K (Ryan Gosling) benoemd tot nieuwe 'blade runner'. Hij ontdekt een lang verborgen geheim dat totale chaos kan veroorzaken. K’s ontdekking leidt tot een speurtocht naar de voormalige ‘blade runner’ Rick Deckard (Harrison Ford), die al dertig jaar vermist wordt.
            <span class="timedetails"></span></p>
                <div class="gezien">
                   <h4>Gezien</h4>
                    <a href="" title="Profiel5" alt="Profiel5"><label for="epco"><img src="images/dirkjan2.jpg" title="Epco"><span></span><span class="kiekn_vote kiekn_vote4">4,3</span><div class="comment">Sluit goed aan bij origineel, maar is toch net minder pakkend.</div></label></a>
                    <a href="" title="Profiel6" alt="Profiel6"><label for="erwin"><img src="images/dirkjan2.jpg" title="Erwin"><span></span><span class="kiekn_vote kiekn_vote3">2,9</span><div class="comment">Beetje depri scifi...</div></label></a>
                    <a href="" title="Profiel7" alt="Profiel7"><label for="jeannette"><img src="images/dirkjan2.jpg" title="Jeannette"><span></span><span class="kiekn_vote kiekn_vote5">4,8</span><div class="comment">Ryan, Ryan, Ryan!!!.</div></label></a>
                    <a href="" title="Profiel" alt="Profiel"><label for="dirkjan"><img src="images/dirkjan2.jpg" title="Dirkjan"><span></span><span class="kiekn_vote kiekn_vote3">2,9</span><div class="comment">Teveel geklets, en die Goslang is gewoon vervelend.</div></label></a>
                    <a href="" title="Profiel8" alt="Profiel8"><label for="rik"><img src="images/dirkjan2.jpg" title="rik"><span></span><span class="kiekn_vote kiekn_vote2">2,3</span><div class="comment">Ik had meer actie verwacht.</div></label></a>
                </div>
            <aside>
                <dl>
                    <dt>Regie: </dt>
                    <dd><a href="#" title="Zoek meer films van Ridley Scott" class="zoeklink-acteur">Denis Villeneuve</a></dd>
                    <dt>Acteurs: </dt>
                    <dd><a href="#" title="Zoek meer films van Harrison Ford" class="zoeklink-acteur">Harrison Ford</a>, <a href="#" title="Zoek meer films van Rutger Hauer" class="zoeklink-acteur">Ryan Gosling</a></dd>
                    <dt>Jaar: </dt><dd>2017</dd>
                    <dt>Land: </dt><dd>VS</dd>
                    <dt>Taal: </dt><dd>Engels, Chinees</dd>
                </dl>
            </aside>
        </article>
	</div>
  <aside>
    <a href="Login2.php" title="Samen Kiekn" id="merlin"><h2>Samen Kiekn</h2><p>Spreek af om samen te kijken!</p></a>
			<?php include 'aside_tv.php';?>
			<?php include 'aside_films.php';?>
		</aside>     
    </main>
		<?php include 'footer.php';?>
</body>
</html>