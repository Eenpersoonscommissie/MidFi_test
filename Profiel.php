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
            <i class="fa fa-whatsapp" aria-hidden="true"></i>
            <i class="fa fa-envelope" aria-hidden="true"></i>

            <i class="fa fa-cogs" aria-hidden="true"></i>
        </span>
        <img src="images/dirkjan.jpg" title="Klaas" class="profielfoto">
            <h1 class="profielnaam">Klaas Hendrik van de Kraats</h1>
        <p>Hoi, ik ben Klaas Hendrik, online ook bekend als Klahey. Ik ben gek van bingen en kijk in het weekend gerust 8 uur achter elkaar! Als ik niet zou voetballen zou ik vastgroeien aan mijn sofa ;) </p>
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
            <a href="Profiel1.php" title="Profiel1" alt="Profiel1"><label for="antony"><img src="images/antony.jpg" title="Antony" class="vriendselect"><span>Antony</span></label></a>
            <a href="Profiel2.php" title="Profiel2" alt="Profiel2"><label for="christian"><img src="images/christian.jpg" title="Christian"><span>Christian</span></label></a>
            <a href="Profiel3.php" title="Profiel3" alt="Profiel3"><label for="dennis"><img src="images/dennis.jpg" title="Dennis"><span>Dennis</span></label></a>
            <a href="Profiel9.php" title="Profiel" alt="Profiel"><label for="dirkjan"><img src="images/dirkjan2.jpg" title="Dirkjan"><span>Dirk Jan</span></label></a>
            <a href="Profiel4.php" title="Profiel4" alt="Profiel4"><label for="edson"><img src="images/edson.jpg" title="Edson"><span>Edson</span></label></a>
            <a href="Profiel5.php" title="Profiel5" alt="Profiel5"><label for="epco"><img src="images/epco.jpg" title="Epco"><span>Epco</span></label></a>
            <a href="Profiel6.php" title="Profiel6" alt="Profiel6"><label for="erwin"><img src="images/erwin.jpg" title="Erwin"><span>Erwin</span></label></a>
            <a href="Profiel7.php" title="Profiel7" alt="Profiel7"><label for="jeannette"><img src="images/jeannette.jpg" title="Jeannette"><span>Jeannette</span></label></a>
            <a href="Profiel.php" title="Profiel" alt="Profiel"><label for="dirkjan"><img src="images/dirkjan.jpg" title="Dirkjan"><span>Klaas Hendrik</span></label></a>
            <a href="Profiel8.php" title="Profiel8" alt="Profiel8"><label for="rik"><img src="images/rik.jpg" title="rik"><span>Rik</span></label></a>
        </fieldset>
        <br/></div>
	</div>
  <aside>
    <a href="merlin_plus.php" title="Samen Kiekn" id="merlin"><h2>Samen Kiekn</h2><p>Spreek af om samen te kijken!</p></a>
    <div id="invite">
      <h2>Lopende uitnodigingen</h2>
      <ul class="list">
        <li class="lastlist-r1">
          <div class="list-content has-sub"> <a href="merlin_plus.php"><img src="https://www.filmvandaag.nl/covers/small/3000/3092.jpg" data-original="https://www.filmvandaag.nl/covers/small/3000/3092.jpg" class="lastlist-cover defer" alt="Hellboy" style="display: block;"></a> <a href="merlin_plus.php" title="Hellboy (2004)" class="title">Hellboy (2004)</a> <span class="lastlist-sub">Vandaag, 22:40</span> 
          
            <fieldset id="vrienden">                
            <input type="checkbox" name="antony" id="antony" class="vriendselect" checked>
                <label for="antony"><img src="images/antony.jpg" title="Antony"></label>
            <input type="checkbox" name="dennis" id="dennis" class="vriendselect" checked>
                <label for="dennis"><img src="images/dennis.jpg" title="Dennis"></label>
            <input type="checkbox" name="edson" id="edson" class="vriendselect">
                <label for="edson"><img src="images/edson.jpg" title="Edson"></label>
            <input type="checkbox" name="rik" id="rik" class="vriendselect">
                <label for="rik"><img src="images/rik.jpg" title="rik"></label>
            </fieldset>
          </div>
        </li>
        <li class="lastlist-r0">
          <div class="list-content has-sub"> <a href="merlin_plus.php"><img src="https://www.filmvandaag.nl/covers/small/12000/12182.jpg" data-original="https://www.filmvandaag.nl/covers/small/12000/12182.jpg" class="lastlist-cover defer" alt="A Guy Thing" style="display: block;"></a> <a href="merlin_plus.php" title="A Guy Thing (2003)" class="title">A Guy Thing (2003)</a><span class="lastlist-sub">Morgen, 20:30</span> </div>
          
            <fieldset id="vrienden">                
            <input type="checkbox" name="antony" id="antony" class="vriendselect" checked>
                <label for="antony"><img src="images/antony.jpg" title="Antony"></label>
            <input type="checkbox" name="dennis" id="dennis" class="vriendselect" checked>
                <label for="dennis"><img src="images/dennis.jpg" title="Dennis"></label>
            <input type="checkbox" name="edson" id="edson" class="vriendselect">
                <label for="edson"><img src="images/edson.jpg" title="Edson"></label>
            <input type="checkbox" name="rik" id="rik" class="vriendselect">
                <label for="rik"><img src="images/rik.jpg" title="rik"></label>
            </fieldset>
        </li>
        <li class="lastlist-r1">
          <div class="list-content has-sub"> <a href="merlin_plus.php"><img src="https://www.filmvandaag.nl/covers/small/10000/10711.jpg" data-original="https://www.filmvandaag.nl/covers/small/10000/10711.jpg" class="lastlist-cover defer" alt="Everything Is Illuminated" style="display: block;"></a> <a href="merlin_plus.php" title="Everything Is Illuminated (2005)" class="title">Everything Is Illuminated (2005)</a><span class="lastlist-sub">Vr 3 november, 23:30</span> </div>
          
            <fieldset id="vrienden">                
            <input type="checkbox" name="antony" id="antony" class="vriendselect">
                <label for="antony"><img src="images/antony.jpg" title="Antony"></label>
            <input type="checkbox" name="dennis" id="dennis" class="vriendselect">
                <label for="dennis"><img src="images/dennis.jpg" title="Dennis"></label>
            <input type="checkbox" name="edson" id="edson" class="vriendselect" checked>
                <label for="edson"><img src="images/edson.jpg" title="Edson"></label>
            <input type="checkbox" name="rik" id="rik" class="vriendselect">
                <label for="rik"><img src="images/rik.jpg" title="rik"></label>
            </fieldset>
        </li>
        <li class="lastlist-r0">
          <div class="list-content has-sub"> <a href="merlin_plus.php"><img src="https://www.filmvandaag.nl/covers/small/4000/4498.jpg" data-original="https://www.filmvandaag.nl/covers/small/4000/4498.jpg" class="lastlist-cover defer" alt="The Usual Suspects" style="display: block;"></a> <a href="merlin_plus.php" title="The Usual Suspects (1995)" class="title">The Usual Suspects (1995)</a><span class="lastlist-sub">Za 4 november, 20:00</span> </div>
          
            <fieldset id="vrienden">                
            <input type="checkbox" name="antony" id="antony" class="vriendselect" checked>
                <label for="antony"><img src="images/antony.jpg" title="Antony"></label>
            <input type="checkbox" name="dennis" id="dennis" class="vriendselect" checked>
                <label for="dennis"><img src="images/dennis.jpg" title="Dennis"></label>
            <input type="checkbox" name="edson" id="edson" class="vriendselect" checked>
                <label for="edson"><img src="images/edson.jpg" title="Edson"></label>
            <input type="checkbox" name="rik" id="rik" class="vriendselect" checked>
                <label for="rik"><img src="images/rik.jpg" title="rik"></label>
            </fieldset>
        </li>
        <li class="lastlist-r1">
          <div class="list-content has-sub"> <a href="merlin_plus.php"><img src="https://www.filmvandaag.nl/covers/small/96000/96167.jpg" data-original="https://www.filmvandaag.nl/covers/small/96000/96167.jpg" class="lastlist-cover defer" alt="The Hunger Games: Mockingjay - Part 1" style="display: block;"></a> <a href="merlin_plus.php" title="The Hunger Games: Mockingjay - Part 1 (2014)" class="title">The Hunger Games: Mockingjay - Part 1 (2014)</a> <span class="lastlist-sub">Zo 5 november, 20:00</span> </div>
          
            <fieldset id="vrienden">                
            <input type="checkbox" name="antony" id="antony" class="vriendselect">
                <label for="antony"><img src="images/antony.jpg" title="Antony"></label>
            <input type="checkbox" name="dennis" id="dennis" class="vriendselect">
                <label for="dennis"><img src="images/dennis.jpg" title="Dennis"></label>
            <input type="checkbox" name="edson" id="edson" class="vriendselect">
                <label for="edson"><img src="images/edson.jpg" title="Edson"></label>
            <input type="checkbox" name="rik" id="rik" class="vriendselect" checked>
                <label for="rik"><img src="images/rik.jpg" title="rik"></label>
            </fieldset>
        </li>
      </ul>
    </div>
		</aside>     
    </main>
		<?php include 'footer.php';?>
</body>
</html>