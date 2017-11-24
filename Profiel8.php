<html>
<head>
    <title>Filmtitel op Kiekn.nl</title>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="icomoon.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">  
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script>
          $.datepicker.setDefaults( $.datepicker.regional[ "nl" ] );
          $( function() {
            $( "#date" ).datepicker({
              dateFormat: "d MM yy"
            });
          } );
          $( function() {
            $( "#date2" ).datepicker({
              dateFormat: "d MM yy"
            });
          } );
          $( function() {
            $( "#date3" ).datepicker({
              dateFormat: "d MM yy"
            });
          } );
  </script>
</head>
<body>
<header>
		<?php include 'nav2.php';?>
</header>
<main>
	<div id="content">
        <div id="profiel">
        <span id="config">
            <i class="fa fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <i class="fa fa-whatsapp" aria-hidden="true"></i>
            <i class="fa fa-google-plus" aria-hidden="true"></i>
            <i class="fa fa-envelope" aria-hidden="true"></i>

            <i class="fa fa-cogs" aria-hidden="true"></i>
        </span>
        <img src="images/rik.jpg" title="Rik" class="profielfoto">
            <h1 class="profielnaam">Rik Jennissen</h1>
        <p>Hoi, ik ben Rik, ben gek van bingen en kijk in het weekend gerust 8 uur achter elkaar! Als ik niet zou voetballen zou ik vastgroeien aan mijn sofa ;) </p>
        <fieldset id="genres">
            <legend><h2>Mijn genres</h2></legend>
            <ul>
                <li><img src="images/genre_05.png" class="genre"><h2>Actie</h2></li>
                <li><img src="images/genre_21.png" class="genre"><h2>Thriller</h2></li>
                <li><img src="images/genre_07.png" class="genre"><h2>Horror</h2></li>
                <li><img src="images/genre_20.png" class="genre"><h2>Comedy</h2></li>
            </ul>
        </fieldset>
        <fieldset id="favofilms">
            <legend>
                <h2>Favoriete films</h2>
            </legend>
            <ul>
                <li><img src="images/1-una-mujer-fantastica-2.jpg" class="cover"><h2>Tomb Raider<div class="vote"><span class="kiekn_vote kiekn_vote5">4,8</span><span class="vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 6.7 </span></div></h2></li>
                <li><img src="images/fuller-house.jpg" class="cover"><h2>Blade<div class="vote"><span class="kiekn_vote kiekn_vote5">4,6</span><span class="vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 6.7 </span></div></h2></li>
                <li><img src="images/Donkeyote-4o.jpg" class="cover"><h2>Flatliners<div class="vote"><span class="kiekn_vote kiekn_vote4">3,7</span><span class="vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 6.7 </span></div></h2></li>
                <li><img src="images/1-Code-46.jpg" class="cover"><h2>The Terminator<div class="vote"><span class="kiekn_vote kiekn_vote4">3,6</span><span class="vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 6.7 </span></div></h2></li>
                <li><img src="images/Blade-Runner-1982-SS14.jpg" class="cover"><h2>Blade Runner<div class="vote"><span class="kiekn_vote kiekn_vote3">3,3</span><span class="vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 6.7 </span></div></h2></li>
            </ul>
        </fieldset>
        <fieldset id="favoseries">
            <legend>
                <h2>Favoriete series</h2>
            </legend>
            <ul>
                <li><img src="images/Hemlock-Grove.jpg" class="cover"><h2>Game of Thrones<div class="vote"><span class="kiekn_vote kiekn_vote5">4,7</span><span class="vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 6.7 </span></div></h2></li>
                <li><img src="images/Havesting-Happiness-1b.jpg" class="cover"><h2>Vikings<div class="vote"><span class="kiekn_vote kiekn_vote4">4,1</span><span class="vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 6.7 </span></div></h2></li>
                <li><img src="images/Dirk-Gently%25u2019s-Holistic-Detective-Agency.jpg" class="cover"><h2>Breaking Bad<div class="vote"><span class="kiekn_vote kiekn_vote4">3,9</span><span class="vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 6.7 </span></div></h2></li>
                <li><img src="images/1-Code-46.jpg" class="cover"><h2>House of Cards<div class="vote"><span class="kiekn_vote kiekn_vote4">3,6</span><span class="vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 6.7 </span></div></h2></li>
                <li><img src="images/2-Aquarius-R15.jpg" class="cover"><h2>Klokhuis<div class="vote"><span class="kiekn_vote kiekn_vote3">2,9</span><span class="vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 6.7 </span></div></h2></li>
            </ul>
        </fieldset>
        <fieldset id="vrienden">
            <legend><h2>Vrienden<input type=text id="zoekvriend" placeholder="Type een naam"><button name="Zoekvriend">Zoek vriend</button></h2></legend>
            <a href="Profiel1.html" title="Profiel1" alt="Profiel1"><label for="antony"><img src="images/antony.jpg" title="Antony" class="vriendselect"><span>Antony</span></label></a>
            <a href="Profiel2.html" title="Profiel2" alt="Profiel2"><label for="christian"><img src="images/christian.jpg" title="Christian"><span>Christian</span></label></a>
            <a href="Profiel3.html" title="Profiel3" alt="Profiel3"><label for="dennis"><img src="images/dennis.jpg" title="Dennis"><span>Dennis</span></label></a>
            <a href="Profiel9.html" title="Profiel" alt="Profiel"><label for="dirkjan"><img src="images/dirkjan2.jpg" title="Dirkjan"><span>Dirk Jan</span></label></a>
            <a href="Profiel4.html" title="Profiel4" alt="Profiel4"><label for="edson"><img src="images/edson.jpg" title="Edson"><span>Edson</span></label></a>
            <a href="Profiel5.html" title="Profiel5" alt="Profiel5"><label for="epco"><img src="images/epco.jpg" title="Epco"><span>Epco</span></label></a>
            <a href="Profiel6.html" title="Profiel6" alt="Profiel6"><label for="erwin"><img src="images/erwin.jpg" title="Erwin"><span>Erwin</span></label></a>
            <a href="Profiel7.html" title="Profiel7" alt="Profiel7"><label for="jeannette"><img src="images/jeannette.jpg" title="Jeannette"><span>Jeannette</span></label></a>
            <a href="Profiel.html" title="Profiel" alt="Profiel"><label for="dirkjan"><img src="images/dirkjan.jpg" title="Dirkjan"><span>Klaas Hendrik</span></label></a>
        </fieldset>
        <br/></div>
	</div>
  <aside>
    <a href="merlin_plus.html" title="Samen Kiekn" id="merlin"><h2>Samen Kiekn</h2><p>Spreek af om samen te kijken!</p></a>
    <div id="films_tv">
      <h2><a href="#expand_tv">Films op tv de komende dagen</a></h2>
      <ul class="lastlist" id="expand_tv">
        <li class="lastlist-r1">
          <div class="lastlist-content has-sub"> <a href="/film/3092-hellboy"><img src="https://www.filmvandaag.nl/covers/small/3000/3092.jpg" data-original="https://www.filmvandaag.nl/covers/small/3000/3092.jpg" class="lastlist-cover defer" alt="Hellboy" style="display: block;"></a> <a href="film_tv.html" title="Hellboy (2004)" class="title">Hellboy (2004)</a> <span class="lastlist-sub"><a href="/filmsoptv/01-11-2017" title="Bekijk alle films van 01-11-2017">Vandaag</a>, 22:40, <span title="zender">RTL7</span></span> </div>
          <div class="lastlist-vote-imdb" title="262312 stemmen"><img src="images/imdb.png" alt="IMDb-score"> 6.8</div>
        </li>
        <li class="lastlist-r0">
          <div class="lastlist-content has-sub"> <a href="/film/12182-a-guy-thing"><img src="https://www.filmvandaag.nl/covers/small/12000/12182.jpg" data-original="https://www.filmvandaag.nl/covers/small/12000/12182.jpg" class="lastlist-cover defer" alt="A Guy Thing" style="display: block;"></a> <a href="film_tv1.html" title="A Guy Thing (2003)" class="title">A Guy Thing (2003)</a><span class="lastlist-sub"><a href="/filmsoptv/02-11-2017" title="Bekijk alle films van 02-11-2017">Morgen</a>, 20:30, <span title="zender">Net 5</span></span> </div>
          <div class="lastlist-vote-imdb" title="14974 stemmen"><img src="images/imdb.png" alt="IMDb-score"> 5.6</div>
        </li>
        <li class="lastlist-r1">
          <div class="lastlist-content has-sub"> <a href="/film/10711-everything-is-illuminated"><img src="https://www.filmvandaag.nl/covers/small/10000/10711.jpg" data-original="https://www.filmvandaag.nl/covers/small/10000/10711.jpg" class="lastlist-cover defer" alt="Everything Is Illuminated" style="display: block;"></a> <a href="film_tv.html" title="Everything Is Illuminated (2005)" class="title">Everything Is Illuminated (2005)</a><span class="lastlist-sub"><a href="/filmsoptv/03-11-2017" title="Bekijk alle films van 03-11-2017">Vr 3 november</a>, 23:30, <span title="zender">&eacute;&eacute;n</span></span> </div>
          <div class="lastlist-vote-imdb" title="52770 stemmen"><img src="images/imdb.png" alt="IMDb-score"> 7.5</div>
        </li>
        <li class="lastlist-r0">
          <div class="lastlist-content has-sub"> <a href="/film/4498-the-usual-suspects"><img src="https://www.filmvandaag.nl/covers/small/4000/4498.jpg" data-original="https://www.filmvandaag.nl/covers/small/4000/4498.jpg" class="lastlist-cover defer" alt="The Usual Suspects" style="display: block;"></a> <a href="film_tv1.html" title="The Usual Suspects (1995)" class="title">The Usual Suspects (1995)</a><span class="lastlist-sub"><a href="/filmsoptv/04-11-2017" title="Bekijk alle films van 04-11-2017">Za 4 november</a>, 20:00, <span title="zender">Veronica</span></span> </div>
          <div class="lastlist-vote-imdb" title="818539 stemmen"><img src="images/imdb.png" alt="IMDb-score"> 8.6</div>
        </li>
        <li class="lastlist-r1">
          <div class="lastlist-content has-sub"> <a href="/film/96167-the-hunger-games-mockingjay"><img src="https://www.filmvandaag.nl/covers/small/96000/96167.jpg" data-original="https://www.filmvandaag.nl/covers/small/96000/96167.jpg" class="lastlist-cover defer" alt="The Hunger Games: Mockingjay - Part 1" style="display: block;"></a> <a href="film_tv.html" title="The Hunger Games: Mockingjay - Part 1 (2014)" class="title">The Hunger Games: Mockingjay - Part 1 (2014)</a> <span class="lastlist-sub"><a href="/filmsoptv/05-11-2017" title="Bekijk alle films van 05-11-2017">Zo 5 november</a>, 20:00, <span title="zender">Net 5</span></span> </div>
          <div class="lastlist-vote-imdb" title="343520 stemmen"><img src="images/imdb.png" alt="IMDb-score"> 6.7</div>
        </li>
      </ul>
    </div>
	<div id="kies_stad">
		  <div>
    <h2>Kies Bioscoop</h2>
    <label for="stad">Stad</label>
    <select id="stad" name="stad">
      <option value="Arnhem">Arnhem</option>
      <option value="Doetinchem">Doetinchem</option>
      <option value="Ede">Ede</option>
      <option value="Nijmegen">Nijmegen</option>
      <option value="Wageningen">Wageningen</option>
      <option value="Zevenaar">Zevenaar</option>
    </select>
	<label for="bios">Bioscoop</label>
	<select id="bios" name="bios">
		<option value="Pathe">Path&eacute;</option>
		<option value="Filmhuis">Filmhuis</option>
	</select>		  
  </div>
	</div>
    <div id="film_focus" class="film_bios">
      <h2><a href="#expand_focus">Focus - Arnhem</a></h2>
      <ul class="lastlist " id="expand_focus">
        <li>
          <div class="lastlist-content"><img src="https://www.filmvandaag.nl/covers/small/102000/102807.jpg" alt="A Gentle Creature" class="filmladder-cover" /> <a class="title" href="film.html">A Gentle Creature (2017)</a> <span class="lastlist-sub">Drama / mystery van <a href="/regisseur/Sergey+Loznitsa" title="Zoek meer films van Sergey Loznitsa" class="zoeklink-acteur">Sergey
            Loznitsa</a></span> </div>
          <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 7.2 </div>
        </li>
        <li>
          <div class="lastlist-content"><img src="https://www.filmvandaag.nl/covers/small/101000/101462.jpg" alt="Borg/McEnroe" class="filmladder-cover" /> <a class="title" href="film.html">Borg/McEnroe (2017)</a> <span class="lastlist-sub">Drama / sport van <a href="/regisseur/Janus+Metz+Pedersen" title="Zoek meer films van Janus Metz Pedersen" class="zoeklink-acteur">Janus Metz
            Pedersen</a></span> </div>
          <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 7.2 </div>
        </li>
        <li>
          <div class="lastlist-content"><img src="https://www.filmvandaag.nl/covers/small/101000/101160.jpg" alt="Daphne" class="filmladder-cover" /> <a class="title" href="film.html">Daphne (2017)</a> <span class="lastlist-sub">Komedie / drama van <a href="/regisseur/Peter+Mackie+Burns" title="Zoek meer films van Peter Mackie Burns" class="zoeklink-acteur">Peter Mackie
            Burns</a></span> </div>
          <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 6.1 </div>
        </li>
        <li>
          <div class="lastlist-content"><img src="https://www.filmvandaag.nl/covers/small/88000/88140.jpg" alt="De Gruffalo" class="filmladder-cover" /> <a class="title" href="film.html">De Gruffalo (2009)</a> <span class="lastlist-sub">Animatie / korte film / kerst van <a href="/regisseur/Max+Lang" title="Zoek meer films van Max Lang" class="zoeklink-acteur">Max Lang</a> en <a href="/regisseur/Jakob+Schuh" title="Zoek meer films van Jakob Schuh" class="zoeklink-acteur">Jakob Schuh</a></span> </div>
          <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 7.5 </div>
        </li>
        <li>
          <div class="lastlist-content"> <img src="https://www.filmvandaag.nl/covers/small/102000/102710.jpg" alt="Kedi" class="filmladder-cover" /> <a class="title" href="film.html">Kedi (2016)</a> <span class="lastlist-sub">Documentaire van <a href="/regisseur/Ceyda+Torun" title="Zoek meer films van Ceyda Torun" class="zoeklink-acteur">Ceyda Torun</a></span> </div>
          <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 7.8 </div>
        </li>
        <li>
          <div class="lastlist-content"><img src="https://www.filmvandaag.nl/covers/small/101000/101806.jpg" alt="Kleine IJstijd" class="filmladder-cover" /> <a class="title" href="film.html">Kleine IJstijd (2017)</a> <span class="lastlist-sub">Drama van <a href="/regisseur/Paula+van+der+Oest" title="Zoek meer films van Paula van der Oest" class="zoeklink-acteur">Paula van der
            Oest</a></span> </div>
          <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 6.9 </div>
        </li>
        <li>
          <div class="lastlist-content"> <img src="https://www.filmvandaag.nl/covers/small/68000/68382.jpg" alt="Le fond de l&#39;air est rouge"
      class="filmladder-cover" /> <a class="title" href="film.html">Le fond de l&#39;air est rouge (1977)</a> <span class="lastlist-sub">Documentaire van <a href="/regisseur/Chris+Marker" title="Zoek meer films van Chris Marker" class="zoeklink-acteur">Chris Marker</a></span> </div>
          <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 8.1 </div>
        </li>
        <li>
          <div class="lastlist-content"> <img src="https://www.filmvandaag.nl/covers/small/102000/102853.jpg" alt="Liefde is aardappelen" class="filmladder-cover" /> <a class="title" href="film.html">Liefde is aardappelen (2017)</a> <span class="lastlist-sub">Documentaire van <a href="/regisseur/Aliona+van+der+Horst" title="Zoek meer films van Aliona van der Horst" class="zoeklink-acteur">Aliona van
            der Horst</a></span> </div>
          <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 7.5 </div>
        </li>
        <li>
          <div class="lastlist-content"> <img src="https://www.filmvandaag.nl/covers/small/102000/102819.jpg" alt="Loveless" class="filmladder-cover" /> <a class="title" href="film.html">Loveless (2017)</a> <span class="lastlist-sub">Drama van <a href="/regisseur/Andrey+Zvyagintsev" title="Zoek meer films van Andrey Zvyagintsev" class="zoeklink-acteur">Andrey
            Zvyagintsev</a></span> </div>
          <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 7.9 </div>
        </li>
        <li>
          <div class="lastlist-content"> <img src="https://www.filmvandaag.nl/covers/small/101000/101418.jpg" alt="Loving Vincent" class="filmladder-cover" /> <a class="title" href="film.html">Loving Vincent (2017)</a> <span class="lastlist-sub">Animatie / biografie van <a href="/regisseur/Dorota+Kobiela" title="Zoek meer films van Dorota Kobiela" class="zoeklink-acteur">Dorota Kobiela</a> en <a href="/regisseur/Hugh+Welchman" title="Zoek meer films van Hugh Welchman" class="zoeklink-acteur">Hugh Welchman</a></span> </div>
          <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 8.0</div>
        </li>
        <li>
          <div class="lastlist-content"> <img src="https://www.filmvandaag.nl/covers/small/101000/101973.jpg" alt="Manifesto" class="filmladder-cover" /> <a class="title" href="film.html">Manifesto (2015)</a> <span class="lastlist-sub">Drama van <a href="/regisseur/Julian+Rosefeldt" title="Zoek meer films van Julian Rosefeldt" class="zoeklink-acteur">Julian
            Rosefeldt</a></span> </div>
          <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 7.0</div>
        </li>
        <li>
          <div class="lastlist-content"> <img src="https://www.filmvandaag.nl/covers/small/98000/98641.jpg" alt="Sing" class="filmladder-cover" /> <a class="title" href="film.html">Sing (2016)</a> <span class="lastlist-sub">Animatie / komedie van <a href="/regisseur/Garth+Jennings" title="Zoek meer films van Garth Jennings" class="zoeklink-acteur">Garth Jennings</a></span> </div>
          <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 7.1 </div>
        </li>
        <li>
          <div class="lastlist-content"> <img src="https://www.filmvandaag.nl/covers/small/100000/100341.jpg" alt="Victoria &amp; Abdul" class="filmladder-cover" /> <a class="title" href="film.html">Victoria &amp; Abdul (2017)</a> <span class="lastlist-sub">Drama / biografie van <a href="/regisseur/Stephen+Frears" title="Zoek meer films van Stephen Frears" class="zoeklink-acteur">Stephen Frears</a></span> </div>
          <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 6.9 </div>
        </li>
        <li>
          <div class="lastlist-content"> <img src="https://www.filmvandaag.nl/covers/small/101000/101162.jpg" alt="Walk with Me" class="filmladder-cover" /> <a class="title" href="film.html">Walk with Me (2017)</a> <span class="lastlist-sub">Documentaire van <a href="/regisseur/Marc+Francis" title="Zoek meer films van Marc Francis" class="zoeklink-acteur">Marc Francis</a> en <a href="/regisseur/Max+Pugh" title="Zoek meer films van Max Pugh" class="zoeklink-acteur">Max Pugh</a></span> </div>
          <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 6.7 </div>
        </li>
        <li>
          <div class="lastlist-content"> <img src="https://www.filmvandaag.nl/covers/small/100000/100843.jpg" alt="White Sun" class="filmladder-cover" /> <a class="title" href="film.html">White Sun (2016)</a> <span class="lastlist-sub">Drama van <a href="/regisseur/Deepak+Rauniyar" title="Zoek meer films van Deepak Rauniyar" class="zoeklink-acteur">Deepak
            Rauniyar</a></span> </div>
          <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 7.2 </div>
        </li>
      </ul>
    </div>
    <div id="film_pathe" class="film_bios">
		<h2><a href="#expand_pathe">Path&eacute; - Arnhem</a></h2>
      	<ul class="lastlist " id="expand_pathe">
		        <li>
        <div class="lastlist-content">
        <img src="https://www.filmvandaag.nl/covers/small/100000/100759.jpg" alt="Alles voor elkaar" class="filmladder-cover" />
          <a class="title" href="film.html">Alles voor elkaar (2017)</a>
        
        <span class="lastlist-sub">Komedie / romantiek van 
        <a href="/regisseur/Danny+Stolker" title="Zoek meer films van Danny Stolker" class="zoeklink-acteur">Danny
        Stolker</a></span> </div>
        <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 6.0</div>
      </li>
      <li>
        <div class="lastlist-content">
          <img src="https://www.filmvandaag.nl/covers/small/101000/101368.jpg" alt="American Assassin" class="filmladder-cover" />
          <a class="title" href="film.html">American Assassin (2017)</a>
        
        <span class="lastlist-sub">Actie / thriller van 
        <a href="/regisseur/Michael+Cuesta" title="Zoek meer films van Michael Cuesta" class="zoeklink-acteur">Michael
        Cuesta</a></span> </div>
        <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 6.5</div>
      </li>
      <li>
        <div class="lastlist-content">
          <img src="https://www.filmvandaag.nl/covers/small/100000/100766.jpg" alt="American Made" class="filmladder-cover" />
          <a class="title" href="film.html">American Made (2017)</a>
        
        <span class="lastlist-sub">Misdaad / thriller van 
        <a href="/regisseur/Doug+Liman" title="Zoek meer films van Doug Liman" class="zoeklink-acteur">Doug Liman</a></span> </div>
        <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 7.3</div>
      </li>
      <li>
        <div class="lastlist-content">
          <img src="https://www.filmvandaag.nl/covers/small/103000/103094.jpg" alt="Barbie: Dolfijnenmagie"
          class="filmladder-cover" />
          <a class="title" href="film.html">Barbie: Dolfijnenmagie (2017)</a>
        
        <span class="lastlist-sub">Animatie / avontuur van 
        <a href="/regisseur/Conrad+Helten" title="Zoek meer films van Conrad Helten" class="zoeklink-acteur">Conrad
        Helten</a></span> </div>
        <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 7.7</div>
      </li>
      <li>
        <div class="lastlist-content">
          <img src="https://www.filmvandaag.nl/covers/small/102000/102852.jpg" alt="Brad&#39;s Status" class="filmladder-cover" />
          <a class="title" href="film.html">Brad&#39;s Status (2017)</a>
        
        <span class="lastlist-sub">Komedie van 
        <a href="/regisseur/Mike+White" title="Zoek meer films van Mike White" class="zoeklink-acteur">Mike White</a></span> </div>
        <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 6.8</div>
      </li>
      <li>
        <div class="lastlist-content">
          <img src="https://www.filmvandaag.nl/covers/small/102000/102434.jpg" alt="De kleine vampier" class="filmladder-cover" />
          <a class="title" href="film.html">De kleine vampier (2017)</a>
        
        <span class="lastlist-sub">Animatie van 
        <a href="/regisseur/Richard+Claus" title="Zoek meer films van Richard Claus" class="zoeklink-acteur">Richard Claus</a> en 
        <a href="/regisseur/Karsten+Kiilerich" title="Zoek meer films van Karsten Kiilerich" class="zoeklink-acteur">Karsten
        Kiilerich</a></span> </div>
        <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 6.5</div>
      </li>
      <li>
        <div class="lastlist-content">
          <img src="https://www.filmvandaag.nl/covers/small/98000/98602.jpg" alt="Demain tout commence" class="filmladder-cover" />
          <a class="title" href="film.html">Demain tout commence (2016)</a>
        
        <span class="lastlist-sub">Komedie / drama van 
        <a href="/regisseur/Hugo+G%C3%83%C2%A9lin" title="Zoek meer films van Hugo GÃ©lin" class="zoeklink-acteur">Hugo
        GÃ©lin</a></span> </div>
        <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 7.4</div>
      </li>
      <li>
        <div class="lastlist-content">
          <img src="https://www.filmvandaag.nl/covers/small/97000/97422.jpg" alt="Despicable Me 3" class="filmladder-cover" />
          <a class="title" href="film.html">Despicable Me 3 (2017)</a>
        
        <span class="lastlist-sub">Animatie / avontuur van 
        <a href="/regisseur/Kyle+Balda" title="Zoek meer films van Kyle Balda" class="zoeklink-acteur">Kyle Balda</a>, 
        <a href="/regisseur/Pierre+Coffin" title="Zoek meer films van Pierre Coffin" class="zoeklink-acteur">Pierre Coffin</a> en 
        <a href="/regisseur/Eric+Guillon" title="Zoek meer films van Eric Guillon" class="zoeklink-acteur">Eric Guillon</a></span> </div>
        <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 6.3 </div>
      </li>
      <li>
        <div class="lastlist-content">
          <img src="https://www.filmvandaag.nl/covers/small/100000/100144.jpg" alt="Dikkertje Dap" class="filmladder-cover" />
          <a class="title" href="film.html">Dikkertje Dap (2017)</a>
        
        <span class="lastlist-sub">Familie van 
        <a href="/regisseur/Barbara+Bredero" title="Zoek meer films van Barbara Bredero" class="zoeklink-acteur">Barbara
        Bredero</a></span> </div>
        <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 7.5</div>
      </li>
      <li>
        <div class="lastlist-content">
          <img src="https://www.filmvandaag.nl/covers/small/101000/101104.jpg" alt="Dummie de Mummie en de tombe van Achnetoet"
          class="filmladder-cover" />
          <a class="title" href="film.html">Dummie de Mummie en de tombe van Achnetoet (2017)</a>
        
        <span class="lastlist-sub">Familie van 
        <a href="/regisseur/Pim+van+Hoeve" title="Zoek meer films van Pim van Hoeve" class="zoeklink-acteur">Pim van
        Hoeve</a></span> </div>
        <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 6.4</div>
      </li>
      <li>
        <div class="lastlist-content">
          <img src="https://www.filmvandaag.nl/covers/small/99000/99979.jpg" alt="Flatliners" class="filmladder-cover" />
          <a class="title" href="film.html">Flatliners (2017)</a>
        
        <span class="lastlist-sub">Drama / sciencefiction van 
        <a href="/regisseur/Niels+Arden+Oplev" title="Zoek meer films van Niels Arden Oplev" class="zoeklink-acteur">Niels Arden
        Oplev</a></span> </div>
        <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 5.0</div>
      </li>
      <li>
        <div class="lastlist-content">
          <img src="https://www.filmvandaag.nl/covers/small/99000/99733.jpg" alt="Geostorm" class="filmladder-cover" />
          <a class="title" href="film.html">Geostorm (2017)</a>
        
        <span class="lastlist-sub">Actie / sciencefiction van 
        <a href="/regisseur/Dean+Devlin" title="Zoek meer films van Dean Devlin" class="zoeklink-acteur">Dean Devlin</a></span> </div>
        <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 5.8</div>
      </li>
      <li>
        <div class="lastlist-content">
          <img src="https://www.filmvandaag.nl/covers/small/101000/101646.jpg" alt="Girls Trip" class="filmladder-cover" />
          <a class="title" href="film.html">Girls Trip (2017)</a>
        
        <span class="lastlist-sub">Komedie van 
        <a href="/regisseur/Malcolm+D.+Lee" title="Zoek meer films van Malcolm D. Lee" class="zoeklink-acteur">Malcolm D.
        Lee</a></span> </div>
        <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 6.4</div>
      </li>
      <li>
        <div class="lastlist-content">
          <img src="https://www.filmvandaag.nl/covers/small/102000/102462.jpg" alt="Happy Death Day" class="filmladder-cover" />
          <a class="title" href="film.html">Happy Death Day (2017)</a>
        
        <span class="lastlist-sub">Horror / mystery van 
        <a href="/regisseur/Christopher+Landon" title="Zoek meer films van Christopher Landon" class="zoeklink-acteur">Christopher
        Landon</a></span> </div>
        <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 6.7</div>
      </li>
      <li>
        <div class="lastlist-content">
          <img src="https://www.filmvandaag.nl/covers/small/101000/101103.jpg" alt="HhhH - The Man with the Iron Heart"
          class="filmladder-cover" />
          <a class="title" href="film.html">HhhH - The Man with the Iron Heart (2017)</a>
        
        <span class="lastlist-sub">Thriller / oorlog van 
        <a href="/regisseur/C%C3%83%C2%A9dric+Jimenez" title="Zoek meer films van CÃ©dric Jimenez" class="zoeklink-acteur">CÃ©dric
        Jimenez</a></span> </div>
        <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 6.3</div>
      </li>
      <li>
        <div class="lastlist-content">
          <img src="https://www.filmvandaag.nl/covers/small/102000/102776.jpg" alt="Home Again" class="filmladder-cover" />
          <a class="title" href="film.html">Home Again (2017)</a>
        
        <span class="lastlist-sub">Komedie / romantiek van 
        <a href="/regisseur/Hallie+Meyers-Shyer" title="Zoek meer films van Hallie Meyers-Shyer" class="zoeklink-acteur">Hallie
        Meyers-Shyer</a></span> </div>
        <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 5.7 </div>
      </li>
      <li>
        <div class="lastlist-content">
          <img src="https://www.filmvandaag.nl/covers/small/99000/99546.jpg" alt="It" class="filmladder-cover" />
          <a class="title" href="film.html">It (2017)</a>
        
        <span class="lastlist-sub">Horror / avontuur van 
        <a href="/regisseur/Andy+Muschietti" title="Zoek meer films van Andy Muschietti" class="zoeklink-acteur">Andy
        Muschietti</a></span> </div>
        <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 7.8</div>
      </li>
      <li>
        <div class="lastlist-content">
          <img src="https://www.filmvandaag.nl/covers/small/101000/101073.jpg" alt="Jigsaw" class="filmladder-cover" />
          <a class="title" href="film.html">Jigsaw (2017)</a>
        
        <span class="lastlist-sub">Horror / thriller van 
        <a href="/regisseur/Michael+Spierig" title="Zoek meer films van Michael Spierig" class="zoeklink-acteur">Michael
        Spierig</a> en 
        <a href="/regisseur/Peter+Spierig" title="Zoek meer films van Peter Spierig" class="zoeklink-acteur">Peter
        Spierig</a></span> </div>
        <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 6.4 </div>
      </li>
      <li>
        <div class="lastlist-content">
          <img src="https://www.filmvandaag.nl/covers/small/99000/99785.jpg" alt="Kapitein Onderbroek: Het eerste grote avontuur"
          class="filmladder-cover" />
          <a class="title" href="film.html">Kapitein Onderbroek: Het eerste grote avontuur (2017)</a>
        
        <span class="lastlist-sub">Animatie / actie van 
        <a href="/regisseur/David+Soren" title="Zoek meer films van David Soren" class="zoeklink-acteur">David Soren</a></span> </div>
        <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 6.2</div>
      </li>
      <li>
        <div class="lastlist-content">
          <img src="https://www.filmvandaag.nl/covers/small/99000/99596.jpg" alt="Kingsman: The Golden Circle"
          class="filmladder-cover" />
          <a class="title" href="film.html">Kingsman: The Golden Circle (2017)</a>
        
        <span class="lastlist-sub">Actie / avontuur van 
        <a href="/regisseur/Matthew+Vaughn" title="Zoek meer films van Matthew Vaughn" class="zoeklink-acteur">Matthew
        Vaughn</a></span> </div>
        <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 7.2</div>
      </li>
      <li>
        <div class="lastlist-content">
          <img src="https://www.filmvandaag.nl/covers/small/103000/103351.jpg" alt="Leatherface" class="filmladder-cover" />
          <a class="title" href="film.html">Leatherface (2017)</a>
        
        <span class="lastlist-sub">Horror / thriller van 
        <a href="/regisseur/Alexandre+Bustillo" title="Zoek meer films van Alexandre Bustillo" class="zoeklink-acteur">Alexandre
        Bustillo</a> en 
        <a href="/regisseur/Julien+Maury" title="Zoek meer films van Julien Maury" class="zoeklink-acteur">Julien Maury</a></span> </div>
        <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 5.1</div>
      </li>
      <li>
        <div class="lastlist-content">
          <img src="https://www.filmvandaag.nl/covers/small/102000/102721.jpg" alt="Misfit" class="filmladder-cover" />
          <a class="title" href="film.html">Misfit (2017)</a>
        
        <span class="lastlist-sub">Komedie van 
        <a href="/regisseur/Erwin+van+den+Eshof" title="Zoek meer films van Erwin van den Eshof" class="zoeklink-acteur">Erwin van
        den Eshof</a></span> </div>
        <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 6.2</div>
      </li>
      <li>
        <div class="lastlist-content">
          <img src="https://www.filmvandaag.nl/covers/small/100000/100613.jpg" alt="My Little Pony: De Film"
          class="filmladder-cover" />
          <a class="title" href="film.html">My Little Pony: De Film (2017)</a>
        
        <span class="lastlist-sub">Animatie / familie van 
        <a href="/regisseur/Jayson+Thiessen" title="Zoek meer films van Jayson Thiessen" class="zoeklink-acteur">Jayson
        Thiessen</a></span> </div>
        <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 6.4</div>
      </li>
      <li>
        <div class="lastlist-content">
          <img src="https://www.filmvandaag.nl/covers/small/100000/100757.jpg" alt="Sinterklaas &amp; het gouden hoefijzer"
          class="filmladder-cover" />
          <a class="title" href="film.html">Sinterklaas &amp; het gouden hoefijzer (2017)</a>
        
        <span class="lastlist-sub">Familie van 
        <a href="/regisseur/Aram+van+de+Rest" title="Zoek meer films van Aram van de Rest" class="zoeklink-acteur">Aram van de
        Rest</a></span> </div>
        <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 5.1</div>
      </li>
      <li>
        <div class="lastlist-content">
          <img src="https://www.filmvandaag.nl/covers/small/99000/99770.jpg" alt="Storm: Letters van Vuur"
          class="filmladder-cover" />
          <a class="title" href="film.html">Storm: Letters van Vuur (2017)</a>
        
        <span class="lastlist-sub">Familie / avontuur van 
        <a href="/regisseur/Dennis+Bots" title="Zoek meer films van Dennis Bots" class="zoeklink-acteur">Dennis Bots</a></span> </div>
        <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 6.1</div>
      </li>
      <li>
        <div class="lastlist-content">
          <img src="https://www.filmvandaag.nl/covers/small/101000/101997.jpg" alt="Stronger" class="filmladder-cover" />
          <a class="title" href="film.html">Stronger (2017)</a>
        
        <span class="lastlist-sub">Drama / biografie van 
        <a href="/regisseur/David+Gordon+Green" title="Zoek meer films van David Gordon Green" class="zoeklink-acteur">David Gordon
        Green</a></span> </div>
        <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 7.5</div>
      </li>
      <li>
        <div class="lastlist-content">
          <img src="https://www.filmvandaag.nl/covers/small/98000/98603.jpg" alt="The Dark Tower" class="filmladder-cover" />
          <a class="title" href="film.html">The Dark Tower (2017)</a>
        
        <span class="lastlist-sub">Avontuur / fantasy van 
        <a href="/regisseur/Nikolaj+Arcel" title="Zoek meer films van Nikolaj Arcel" class="zoeklink-acteur">Nikolaj
        Arcel</a></span> </div>
        <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 5.8</div>
      </li>
      <li>
        <div class="lastlist-content">
          <img src="https://www.filmvandaag.nl/covers/small/99000/99955.jpg" alt="The Emoji Movie" class="filmladder-cover" />
          <a class="title" href="film.html">The Emoji Movie (2017)</a>
        
        <span class="lastlist-sub">Animatie / komedie van 
        <a href="/regisseur/Tony+Leondis" title="Zoek meer films van Tony Leondis" class="zoeklink-acteur">Tony Leondis</a></span> </div>
        <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 2.6 </div>
      </li>
      <li>
        <div class="lastlist-content">
          <img src="https://www.filmvandaag.nl/covers/small/102000/102996.jpg" alt="The Foreigner" class="filmladder-cover" />
          <a class="title" href="film.html">The Foreigner (2017)</a>
        
        <span class="lastlist-sub">Actie / thriller van 
        <a href="/regisseur/Martin+Campbell" title="Zoek meer films van Martin Campbell" class="zoeklink-acteur">Martin
        Campbell</a></span> </div>
        <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 7.3 </div>
      </li>
      <li>
        <div class="lastlist-content">
          <img src="https://www.filmvandaag.nl/covers/small/100000/100763.jpg" alt="The LEGO Ninjago Movie"
          class="filmladder-cover" />
          <a class="title" href="film.html">The LEGO Ninjago Movie (2017)</a>
        
        <span class="lastlist-sub">Animatie / actie van 
        <a href="/regisseur/Charlie+Bean" title="Zoek meer films van Charlie Bean" class="zoeklink-acteur">Charlie Bean</a>, 
        <a href="/regisseur/Paul+Fisher" title="Zoek meer films van Paul Fisher" class="zoeklink-acteur">Paul Fisher</a> en 
        <a href="/regisseur/Bob+Logan" title="Zoek meer films van Bob Logan" class="zoeklink-acteur">Bob Logan</a></span> </div>
        <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 6.1</div>
      </li>
      <li>
        <div class="lastlist-content">
          <img src="https://www.filmvandaag.nl/covers/small/102000/102775.jpg" alt="The Mountain Between Us"
          class="filmladder-cover" />
          <a class="title" href="film.html">The Mountain Between Us (2017)</a>
        
        <span class="lastlist-sub">Drama / romantiek van 
        <a href="/regisseur/Hany+Abu-Assad" title="Zoek meer films van Hany Abu-Assad" class="zoeklink-acteur">Hany
        Abu-Assad</a></span> </div>
        <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 6.2</div>
      </li>
      <li>
        <div class="lastlist-content">
          <img src="https://www.filmvandaag.nl/covers/small/100000/100747.jpg" alt="Thor: Ragnarok" class="filmladder-cover" />
          <a class="title" href="film.html">Thor: Ragnarok (2017)</a>
        
        <span class="lastlist-sub">Actie / avontuur van 
        <a href="/regisseur/Taika+Waititi" title="Zoek meer films van Taika Waititi" class="zoeklink-acteur">Taika
        Waititi</a></span> </div>
        <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 8.3 </div>
      </li>
      <li>
        <div class="lastlist-content">
          <img src="https://www.filmvandaag.nl/covers/small/100000/100578.jpg" alt="Weg van Jou" class="filmladder-cover" />
          <a class="title" href="film.html">Weg van Jou (2017)</a>
        
        <span class="lastlist-sub">Romantiek / komedie van 
        <a href="/regisseur/Jelle+de+Jonge" title="Zoek meer films van Jelle de Jonge" class="zoeklink-acteur">Jelle de
        Jonge</a></span> </div>
        <div class="lastlist-vote-imdb"><img src="images/imdb.png" alt="IMDb-score"> 7.0</div>
      </li>

		</ul>		  
	  </div>
  </aside>
</main>
		<?php include 'footer.php';?>
</body>
</html>