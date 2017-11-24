<!doctype HTML>
<html>
<head>
<title>Kiekn, spreek af om films of series te kijken</title>
<link rel="stylesheet" href="icomoon.css">
<link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(document).ready(function(){
	
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})

})
    </script>
</head>
<body>
<header>
		<?php include 'nav1.php';?>
</header>
<main>
	<div id="content">
        <nav id="submenu">
            <a href="films.php" class="active">Film Top 10</a>
            <a href="Films_bios.php">Nu in de bios</a>
            <a href="#">Verwacht</a>
        </nav>
        
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
	<div>
	    
    <ul>
      <li>
        <h4>
          <a href="film.php">Alles voor elkaar</a> (2017)
        </h4>
        <div class="info">Komedie / romantiek van 
        <a href="/regisseur/Danny+Stolker" title="Zoek meer films van Danny Stolker" class="zoeklink-acteur">Danny
        Stolker</a></div>
        <div class="imdb">6.0</div>
        <img src="https://www.filmvandaag.nl/covers/small/100000/100759.jpg" alt="Alles voor elkaar" class="filmladder-cover" />
        <table class="filmladder-tabel">
          <thead>
            <tr>
              <th class="filmladder-vandaag tooltip tooltipstered">Vandaag</th>
              <th class="tooltip tooltipstered">Morgen</th>
              <th class="tooltip tooltipstered">Dinsdag</th>
              <th class="tooltip tooltipstered">Woensdag</th>
              <th class="tooltip hide-mobile tooltipstered">Donderdag</th>
              <th class="tooltip hide-mobile tooltipstered">Vrijdag</th>
              <th class="tooltip hide-mobile tooltipstered">Zaterdag</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="filmladder-vandaag">
                <time itemprop="startDate" content="2017-10-29T18:00" class="finished">18:00</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-10-30T10:30" class="">10:30</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-10-31T18:15" class="">18:15</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-11-01T19:30" class="">19:30</time>
              </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
            </tr>
          </tbody>
        </table>
      </li>
      <li>
        <h4>
          <a href="film.php">American Assassin</a> (2017)
        </h4>
        <div class="info">Actie / thriller van 
        <a href="/regisseur/Michael+Cuesta" title="Zoek meer films van Michael Cuesta" class="zoeklink-acteur">Michael
        Cuesta</a></div>
        <div class="imdb">6.5</div>
          <img src="https://www.filmvandaag.nl/covers/small/101000/101368.jpg" alt="American Assassin" class="filmladder-cover" />
        <table class="filmladder-tabel">
          <thead>
            <tr>
              <th class="filmladder-vandaag tooltip tooltipstered">Vandaag</th>
              <th class="tooltip tooltipstered">Morgen</th>
              <th class="tooltip tooltipstered">Dinsdag</th>
              <th class="tooltip tooltipstered">Woensdag</th>
              <th class="tooltip hide-mobile tooltipstered">Donderdag</th>
              <th class="tooltip hide-mobile tooltipstered">Vrijdag</th>
              <th class="tooltip hide-mobile tooltipstered">Zaterdag</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="filmladder-vandaag"> </td>
              <td>
                <time itemprop="startDate" content="2017-10-30T21:45" class="">21:45</time>
              </td>
              <td> </td>
              <td>
                <time itemprop="startDate" content="2017-11-01T21:45" class="">21:45</time>
              </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
            </tr>
          </tbody>
        </table>
      </li>
      <li>
        <h4>
          <a href="film.php">American Made</a> (2017)
        </h4>
        <div class="info">Misdaad / thriller van 
        <a href="/regisseur/Doug+Liman" title="Zoek meer films van Doug Liman" class="zoeklink-acteur">Doug Liman</a></div>
        <div class="imdb">7.3</div>
          <img src="https://www.filmvandaag.nl/covers/small/100000/100766.jpg" alt="American Made" class="filmladder-cover" />
        <table class="filmladder-tabel">
          <thead>
            <tr>
              <th class="filmladder-vandaag tooltip tooltipstered">Vandaag</th>
              <th class="tooltip tooltipstered">Morgen</th>
              <th class="tooltip tooltipstered">Dinsdag</th>
              <th class="tooltip tooltipstered">Woensdag</th>
              <th class="tooltip hide-mobile tooltipstered">Donderdag</th>
              <th class="tooltip hide-mobile tooltipstered">Vrijdag</th>
              <th class="tooltip hide-mobile tooltipstered">Zaterdag</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="filmladder-vandaag"> </td>
              <td> </td>
              <td> </td>
              <td>
                <time itemprop="startDate" content="2017-11-01T22:00" class="">22:00</time>
              </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
            </tr>
          </tbody>
        </table>
      </li>
      <li>
        <h4>
          <a href="film.php">Barbie: Dolfijnenmagie</a> (2017)
        </h4>
        <div class="info">Animatie / avontuur van 
        <a href="/regisseur/Conrad+Helten" title="Zoek meer films van Conrad Helten" class="zoeklink-acteur">Conrad
        Helten</a></div>
        <div class="imdb">7.7</div>
          <img src="https://www.filmvandaag.nl/covers/small/103000/103094.jpg" alt="Barbie: Dolfijnenmagie"
          class="filmladder-cover" />
        <table class="filmladder-tabel">
          <thead>
            <tr>
              <th class="filmladder-vandaag tooltip tooltipstered">Vandaag</th>
              <th class="tooltip tooltipstered">Morgen</th>
              <th class="tooltip tooltipstered">Dinsdag</th>
              <th class="tooltip tooltipstered">Woensdag</th>
              <th class="tooltip hide-mobile tooltipstered">Donderdag</th>
              <th class="tooltip hide-mobile tooltipstered">Vrijdag</th>
              <th class="tooltip hide-mobile tooltipstered">Zaterdag</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="filmladder-vandaag">
                <time itemprop="startDate" content="2017-10-29T09:45" class="finished">09:45</time>
                <br />
                <time itemprop="startDate" content="2017-10-29T12:00" class="finished">12:00</time>
              </td>
              <td> </td>
              <td> </td>
              <td>
                <time itemprop="startDate" content="2017-11-01T11:15" class="">11:15</time>
                <br />
                <time itemprop="startDate" content="2017-11-01T13:15" class="">13:15</time>
              </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
            </tr>
          </tbody>
        </table>
      </li>
      <li>
        <h4>
          <a href="film.php">Brad&#39;s Status</a> (2017)
        </h4>
        <div class="info">Komedie van 
        <a href="/regisseur/Mike+White" title="Zoek meer films van Mike White" class="zoeklink-acteur">Mike White</a></div>
        <div class="imdb">6.8</div>
          <img src="https://www.filmvandaag.nl/covers/small/102000/102852.jpg" alt="Brad&#39;s Status" class="filmladder-cover" />
        <table class="filmladder-tabel">
          <thead>
            <tr>
              <th class="filmladder-vandaag tooltip tooltipstered">Vandaag</th>
              <th class="tooltip tooltipstered">Morgen</th>
              <th class="tooltip tooltipstered">Dinsdag</th>
              <th class="tooltip tooltipstered">Woensdag</th>
              <th class="tooltip hide-mobile tooltipstered">Donderdag</th>
              <th class="tooltip hide-mobile tooltipstered">Vrijdag</th>
              <th class="tooltip hide-mobile tooltipstered">Zaterdag</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="filmladder-vandaag"> </td>
              <td>
                <time itemprop="startDate" content="2017-10-30T20:00" class="">20:00</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-10-31T10:15" class="">10:15</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-11-01T11:00" class="">11:00</time>
              </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
            </tr>
          </tbody>
        </table>
      </li>
      <li>
        <h4>
          <a href="film.php">De kleine vampier</a> (2017)
        </h4>
        <div class="info">Animatie van 
        <a href="/regisseur/Richard+Claus" title="Zoek meer films van Richard Claus" class="zoeklink-acteur">Richard Claus</a> en 
        <a href="/regisseur/Karsten+Kiilerich" title="Zoek meer films van Karsten Kiilerich" class="zoeklink-acteur">Karsten
        Kiilerich</a></div>
        <div class="imdb">6.5</div>
          <img src="https://www.filmvandaag.nl/covers/small/102000/102434.jpg" alt="De kleine vampier" class="filmladder-cover" />
        <table class="filmladder-tabel">
          <thead>
            <tr>
              <th class="filmladder-vandaag tooltip tooltipstered">Vandaag</th>
              <th class="tooltip tooltipstered">Morgen</th>
              <th class="tooltip tooltipstered">Dinsdag</th>
              <th class="tooltip tooltipstered">Woensdag</th>
              <th class="tooltip hide-mobile tooltipstered">Donderdag</th>
              <th class="tooltip hide-mobile tooltipstered">Vrijdag</th>
              <th class="tooltip hide-mobile tooltipstered">Zaterdag</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="filmladder-vandaag">
                <time itemprop="startDate" content="2017-10-29T15:00" class="finished">15:00</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-10-30T15:00" class="">15:00</time>
              </td>
              <td> </td>
              <td>
                <time itemprop="startDate" content="2017-11-01T15:00" class="">15:00</time>
              </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
            </tr>
          </tbody>
        </table>
      </li>
      <li>
        <h4>
          <a href="film.php">Demain tout commence</a> (2016)
        </h4>
        <div class="info">Komedie / drama van 
        <a href="/regisseur/Hugo+G%C3%83%C2%A9lin" title="Zoek meer films van Hugo GÃ©lin" class="zoeklink-acteur">Hugo
        GÃ©lin</a></div>
        <div class="imdb">7.4</div>
          <img src="https://www.filmvandaag.nl/covers/small/98000/98602.jpg" alt="Demain tout commence" class="filmladder-cover" />
        <table class="filmladder-tabel">
          <thead>
            <tr>
              <th class="filmladder-vandaag tooltip tooltipstered">Vandaag</th>
              <th class="tooltip tooltipstered">Morgen</th>
              <th class="tooltip tooltipstered">Dinsdag</th>
              <th class="tooltip tooltipstered">Woensdag</th>
              <th class="tooltip hide-mobile tooltipstered">Donderdag</th>
              <th class="tooltip hide-mobile tooltipstered">Vrijdag</th>
              <th class="tooltip hide-mobile tooltipstered">Zaterdag</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="filmladder-vandaag"> </td>
              <td>
                <time itemprop="startDate" content="2017-10-30T17:45" class="">17:45</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-10-31T13:30" class="">13:30</time>
              </td>
              <td> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
            </tr>
          </tbody>
        </table>
      </li>
      <li>
        <h4>
          <a href="film.php">Despicable Me 3</a> (2017)
        </h4>
        <div class="info">Animatie / avontuur van 
        <a href="/regisseur/Kyle+Balda" title="Zoek meer films van Kyle Balda" class="zoeklink-acteur">Kyle Balda</a>, 
        <a href="/regisseur/Pierre+Coffin" title="Zoek meer films van Pierre Coffin" class="zoeklink-acteur">Pierre Coffin</a> en 
        <a href="/regisseur/Eric+Guillon" title="Zoek meer films van Eric Guillon" class="zoeklink-acteur">Eric Guillon</a></div>
        <div class="imdb">6.3 </div>
          <img src="https://www.filmvandaag.nl/covers/small/97000/97422.jpg" alt="Despicable Me 3" class="filmladder-cover" />
        <table class="filmladder-tabel">
          <thead>
            <tr>
              <th class="filmladder-vandaag tooltip tooltipstered">Vandaag</th>
              <th class="tooltip tooltipstered">Morgen</th>
              <th class="tooltip tooltipstered">Dinsdag</th>
              <th class="tooltip tooltipstered">Woensdag</th>
              <th class="tooltip hide-mobile tooltipstered">Donderdag</th>
              <th class="tooltip hide-mobile tooltipstered">Vrijdag</th>
              <th class="tooltip hide-mobile tooltipstered">Zaterdag</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="filmladder-vandaag">
              <time itemprop="startDate" content="2017-10-29T11:45" class="finished">11:45</time> 
              <small class="nl tooltip tooltipstered">3D</small></td>
              <td> </td>
              <td> </td>
              <td> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
            </tr>
          </tbody>
        </table>
      </li>
      <li>
        <h4>
          <a href="film.php">Dikkertje Dap</a> (2017)
        </h4>
        <div class="info">Familie van 
        <a href="/regisseur/Barbara+Bredero" title="Zoek meer films van Barbara Bredero" class="zoeklink-acteur">Barbara
        Bredero</a></div>
        <div class="imdb">7.5</div>
          <img src="https://www.filmvandaag.nl/covers/small/100000/100144.jpg" alt="Dikkertje Dap" class="filmladder-cover" />
        <table class="filmladder-tabel">
          <thead>
            <tr>
              <th class="filmladder-vandaag tooltip tooltipstered">Vandaag</th>
              <th class="tooltip tooltipstered">Morgen</th>
              <th class="tooltip tooltipstered">Dinsdag</th>
              <th class="tooltip tooltipstered">Woensdag</th>
              <th class="tooltip hide-mobile tooltipstered">Donderdag</th>
              <th class="tooltip hide-mobile tooltipstered">Vrijdag</th>
              <th class="tooltip hide-mobile tooltipstered">Zaterdag</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="filmladder-vandaag">
                <time itemprop="startDate" content="2017-10-29T09:45" class="finished">09:45</time>
                <br />
                <time itemprop="startDate" content="2017-10-29T12:15" class="finished">12:15</time>
                <br />
                <time itemprop="startDate" content="2017-10-29T14:15" class="finished">14:15</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-10-30T14:15" class="">14:15</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-10-31T10:00" class="">10:00</time>
                <br />
                <time itemprop="startDate" content="2017-10-31T13:15" class="">13:15</time>
                <br />
                <time itemprop="startDate" content="2017-10-31T16:00" class="">16:00</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-11-01T10:15" class="">10:15</time>
                <br />
                <time itemprop="startDate" content="2017-11-01T12:15" class="">12:15</time>
                <br />
                <time itemprop="startDate" content="2017-11-01T14:15" class="">14:15</time>
                <br />
                <time itemprop="startDate" content="2017-11-01T16:15" class="">16:15</time>
              </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
            </tr>
          </tbody>
        </table>
      </li>
      <li>
        <h4>
          <a href="film.php">Dummie de Mummie en de tombe van Achnetoet</a> (2017)
        </h4>
        <div class="info">Familie van 
        <a href="/regisseur/Pim+van+Hoeve" title="Zoek meer films van Pim van Hoeve" class="zoeklink-acteur">Pim van
        Hoeve</a></div>
        <div class="imdb">6.4</div>
          <img src="https://www.filmvandaag.nl/covers/small/101000/101104.jpg" alt="Dummie de Mummie en de tombe van Achnetoet"
          class="filmladder-cover" />
        <table class="filmladder-tabel">
          <thead>
            <tr>
              <th class="filmladder-vandaag tooltip tooltipstered">Vandaag</th>
              <th class="tooltip tooltipstered">Morgen</th>
              <th class="tooltip tooltipstered">Dinsdag</th>
              <th class="tooltip tooltipstered">Woensdag</th>
              <th class="tooltip hide-mobile tooltipstered">Donderdag</th>
              <th class="tooltip hide-mobile tooltipstered">Vrijdag</th>
              <th class="tooltip hide-mobile tooltipstered">Zaterdag</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="filmladder-vandaag">
                <time itemprop="startDate" content="2017-10-29T09:45" class="finished">09:45</time>
                <br />
                <time itemprop="startDate" content="2017-10-29T14:00" class="finished">14:00</time>
                <br />
                <time itemprop="startDate" content="2017-10-29T16:00" class="finished">16:00</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-10-30T11:00" class="">11:00</time>
                <br />
                <time itemprop="startDate" content="2017-10-30T16:00" class="">16:00</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-10-31T10:15" class="">10:15</time>
                <br />
                <time itemprop="startDate" content="2017-10-31T15:00" class="">15:00</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-11-01T10:00" class="">10:00</time>
                <br />
                <time itemprop="startDate" content="2017-11-01T12:00" class="">12:00</time>
                <br />
                <time itemprop="startDate" content="2017-11-01T14:00" class="">14:00</time>
                <br />
                <time itemprop="startDate" content="2017-11-01T16:00" class="">16:00</time>
              </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile">
                <time itemprop="startDate" content="2017-11-04T16:00" class="">16:00</time>
              </td>
            </tr>
          </tbody>
        </table>
      </li>
      <li>
        <h4>
          <a href="film.php">Flatliners</a> (2017)
        </h4>
        <div class="info">Drama / sciencefiction van 
        <a href="/regisseur/Niels+Arden+Oplev" title="Zoek meer films van Niels Arden Oplev" class="zoeklink-acteur">Niels Arden
        Oplev</a></div>
        <div class="imdb">5.0</div>
          <img src="https://www.filmvandaag.nl/covers/small/99000/99979.jpg" alt="Flatliners" class="filmladder-cover" />
        <table class="filmladder-tabel">
          <thead>
            <tr>
              <th class="filmladder-vandaag tooltip tooltipstered">Vandaag</th>
              <th class="tooltip tooltipstered">Morgen</th>
              <th class="tooltip tooltipstered">Dinsdag</th>
              <th class="tooltip tooltipstered">Woensdag</th>
              <th class="tooltip hide-mobile tooltipstered">Donderdag</th>
              <th class="tooltip hide-mobile tooltipstered">Vrijdag</th>
              <th class="tooltip hide-mobile tooltipstered">Zaterdag</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="filmladder-vandaag"> </td>
              <td> </td>
              <td>
                <time itemprop="startDate" content="2017-10-31T21:30" class="">21:30</time>
              </td>
              <td> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
            </tr>
          </tbody>
        </table>
      </li>
      <li>
        <h4>
          <a href="film.php">Geostorm</a> (2017)
        </h4>
        <div class="info">Actie / sciencefiction van 
        <a href="/regisseur/Dean+Devlin" title="Zoek meer films van Dean Devlin" class="zoeklink-acteur">Dean Devlin</a></div>
        <div class="imdb">5.8</div>
          <img src="https://www.filmvandaag.nl/covers/small/99000/99733.jpg" alt="Geostorm" class="filmladder-cover" />
        <table class="filmladder-tabel">
          <thead>
            <tr>
              <th class="filmladder-vandaag tooltip tooltipstered">Vandaag</th>
              <th class="tooltip tooltipstered">Morgen</th>
              <th class="tooltip tooltipstered">Dinsdag</th>
              <th class="tooltip tooltipstered">Woensdag</th>
              <th class="tooltip hide-mobile tooltipstered">Donderdag</th>
              <th class="tooltip hide-mobile tooltipstered">Vrijdag</th>
              <th class="tooltip hide-mobile tooltipstered">Zaterdag</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="filmladder-vandaag"> </td>
              <td>
                <time itemprop="startDate" content="2017-10-30T18:00" class="">18:00</time>
              </td>
              <td> </td>
              <td>
                <time itemprop="startDate" content="2017-11-01T17:15" class="">17:15</time>
              </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
            </tr>
          </tbody>
        </table>
      </li>
      <li>
        <h4>
          <a href="film.php">Girls Trip</a> (2017)
        </h4>
        <div class="info">Komedie van 
        <a href="/regisseur/Malcolm+D.+Lee" title="Zoek meer films van Malcolm D. Lee" class="zoeklink-acteur">Malcolm D.
        Lee</a></div>
        <div class="imdb">6.4</div>
          <img src="https://www.filmvandaag.nl/covers/small/101000/101646.jpg" alt="Girls Trip" class="filmladder-cover" />
        <table class="filmladder-tabel">
          <thead>
            <tr>
              <th class="filmladder-vandaag tooltip tooltipstered">Vandaag</th>
              <th class="tooltip tooltipstered">Morgen</th>
              <th class="tooltip tooltipstered">Dinsdag</th>
              <th class="tooltip tooltipstered">Woensdag</th>
              <th class="tooltip hide-mobile tooltipstered">Donderdag</th>
              <th class="tooltip hide-mobile tooltipstered">Vrijdag</th>
              <th class="tooltip hide-mobile tooltipstered">Zaterdag</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="filmladder-vandaag"> </td>
              <td> </td>
              <td> </td>
              <td>
                <time itemprop="startDate" content="2017-11-01T17:30" class="">17:30</time>
              </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
            </tr>
          </tbody>
        </table>
      </li>
      <li>
        <h4>
          <a href="film.php">Happy Death Day</a> (2017)
        </h4>
        <div class="info">Horror / mystery van 
        <a href="/regisseur/Christopher+Landon" title="Zoek meer films van Christopher Landon" class="zoeklink-acteur">Christopher
        Landon</a></div>
        <div class="imdb">6.7</div>
          <img src="https://www.filmvandaag.nl/covers/small/102000/102462.jpg" alt="Happy Death Day" class="filmladder-cover" />
        <table class="filmladder-tabel">
          <thead>
            <tr>
              <th class="filmladder-vandaag tooltip tooltipstered">Vandaag</th>
              <th class="tooltip tooltipstered">Morgen</th>
              <th class="tooltip tooltipstered">Dinsdag</th>
              <th class="tooltip tooltipstered">Woensdag</th>
              <th class="tooltip hide-mobile tooltipstered">Donderdag</th>
              <th class="tooltip hide-mobile tooltipstered">Vrijdag</th>
              <th class="tooltip hide-mobile tooltipstered">Zaterdag</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="filmladder-vandaag">
                <time itemprop="startDate" content="2017-10-29T22:00" class="">22:00</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-10-30T22:15" class="">22:15</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-10-31T21:45" class="">21:45</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-11-01T22:15" class="">22:15</time>
              </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
            </tr>
          </tbody>
        </table>
      </li>
      <li>
        <h4>
          <a href="film.php">HhhH - The Man with the Iron Heart</a> (2017)
        </h4>
        <div class="info">Thriller / oorlog van 
        <a href="/regisseur/C%C3%83%C2%A9dric+Jimenez" title="Zoek meer films van CÃ©dric Jimenez" class="zoeklink-acteur">CÃ©dric
        Jimenez</a></div>
        <div class="imdb">6.3</div>
          <img src="https://www.filmvandaag.nl/covers/small/101000/101103.jpg" alt="HhhH - The Man with the Iron Heart"
          class="filmladder-cover" />
        <table class="filmladder-tabel">
          <thead>
            <tr>
              <th class="filmladder-vandaag tooltip tooltipstered">Vandaag</th>
              <th class="tooltip tooltipstered">Morgen</th>
              <th class="tooltip tooltipstered">Dinsdag</th>
              <th class="tooltip tooltipstered">Woensdag</th>
              <th class="tooltip hide-mobile tooltipstered">Donderdag</th>
              <th class="tooltip hide-mobile tooltipstered">Vrijdag</th>
              <th class="tooltip hide-mobile tooltipstered">Zaterdag</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="filmladder-vandaag">
                <time itemprop="startDate" content="2017-10-29T17:15" class="finished">17:15</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-10-30T10:45" class="">10:45</time>
                <br />
                <time itemprop="startDate" content="2017-10-30T17:15" class="">17:15</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-10-31T10:00" class="">10:00</time>
              </td>
              <td> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
            </tr>
          </tbody>
        </table>
      </li>
      <li>
        <h4>
          <a href="film.php">Home Again</a> (2017)
        </h4>
        <div class="info">Komedie / romantiek van 
        <a href="/regisseur/Hallie+Meyers-Shyer" title="Zoek meer films van Hallie Meyers-Shyer" class="zoeklink-acteur">Hallie
        Meyers-Shyer</a></div>
        <div class="imdb">5.7 </div>
          <img src="https://www.filmvandaag.nl/covers/small/102000/102776.jpg" alt="Home Again" class="filmladder-cover" />
        <table class="filmladder-tabel">
          <thead>
            <tr>
              <th class="filmladder-vandaag tooltip tooltipstered">Vandaag</th>
              <th class="tooltip tooltipstered">Morgen</th>
              <th class="tooltip tooltipstered">Dinsdag</th>
              <th class="tooltip tooltipstered">Woensdag</th>
              <th class="tooltip hide-mobile tooltipstered">Donderdag</th>
              <th class="tooltip hide-mobile tooltipstered">Vrijdag</th>
              <th class="tooltip hide-mobile tooltipstered">Zaterdag</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="filmladder-vandaag">
                <time itemprop="startDate" content="2017-10-29T19:45" class="finished">19:45</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-10-30T12:45" class="">12:45</time>
                <br />
                <time itemprop="startDate" content="2017-10-30T16:30" class="">16:30</time>
                <br />
                <time itemprop="startDate" content="2017-10-30T19:45" class="">19:45</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-10-31T19:15" class="">19:15</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-11-01T16:45" class="">16:45</time>
                <br />
                <time itemprop="startDate" content="2017-11-01T20:00" class="">20:00</time>
              </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
            </tr>
          </tbody>
        </table>
      </li>
      <li>
        <h4>
          <a href="film.php">It</a> (2017)
        </h4>
        <div class="info">Horror / avontuur van 
        <a href="/regisseur/Andy+Muschietti" title="Zoek meer films van Andy Muschietti" class="zoeklink-acteur">Andy
        Muschietti</a></div>
        <div class="imdb">7.8</div>
          <img src="https://www.filmvandaag.nl/covers/small/99000/99546.jpg" alt="It" class="filmladder-cover" />
        <table class="filmladder-tabel">
          <thead>
            <tr>
              <th class="filmladder-vandaag tooltip tooltipstered">Vandaag</th>
              <th class="tooltip tooltipstered">Morgen</th>
              <th class="tooltip tooltipstered">Dinsdag</th>
              <th class="tooltip tooltipstered">Woensdag</th>
              <th class="tooltip hide-mobile tooltipstered">Donderdag</th>
              <th class="tooltip hide-mobile tooltipstered">Vrijdag</th>
              <th class="tooltip hide-mobile tooltipstered">Zaterdag</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="filmladder-vandaag"> </td>
              <td>
                <time itemprop="startDate" content="2017-10-30T21:45" class="">21:45</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-10-31T20:45" class="">20:45</time>
              </td>
              <td> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
            </tr>
          </tbody>
        </table>
      </li>
      <li>
        <h4>
          <a href="film.php">Jigsaw</a> (2017)
        </h4>
        <div class="info">Horror / thriller van 
        <a href="/regisseur/Michael+Spierig" title="Zoek meer films van Michael Spierig" class="zoeklink-acteur">Michael
        Spierig</a> en 
        <a href="/regisseur/Peter+Spierig" title="Zoek meer films van Peter Spierig" class="zoeklink-acteur">Peter
        Spierig</a></div>
        <div class="imdb">6.4 </div>
          <img src="https://www.filmvandaag.nl/covers/small/101000/101073.jpg" alt="Jigsaw" class="filmladder-cover" />
        <table class="filmladder-tabel">
          <thead>
            <tr>
              <th class="filmladder-vandaag tooltip tooltipstered">Vandaag</th>
              <th class="tooltip tooltipstered">Morgen</th>
              <th class="tooltip tooltipstered">Dinsdag</th>
              <th class="tooltip tooltipstered">Woensdag</th>
              <th class="tooltip hide-mobile tooltipstered">Donderdag</th>
              <th class="tooltip hide-mobile tooltipstered">Vrijdag</th>
              <th class="tooltip hide-mobile tooltipstered">Zaterdag</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="filmladder-vandaag">
                <time itemprop="startDate" content="2017-10-29T17:30" class="finished">17:30</time>
                <br />
                <time itemprop="startDate" content="2017-10-29T21:30" class="">21:30</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-10-30T17:30" class="">17:30</time>
                <br />
                <time itemprop="startDate" content="2017-10-30T22:00" class="">22:00</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-10-31T16:30" class="">16:30</time>
                <br />
                <time itemprop="startDate" content="2017-10-31T18:45" class="">18:45</time>
                <br />
                <time itemprop="startDate" content="2017-10-31T22:15" class="">22:15</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-11-01T18:15" class="">18:15</time>
                <br />
                <time itemprop="startDate" content="2017-11-01T21:45" class="">21:45</time>
              </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
            </tr>
          </tbody>
        </table>
      </li>
      <li>
        <h4>
          <a href="film.php">Kapitein Onderbroek: Het eerste grote avontuur</a> (2017)
        </h4>
        <div class="info">Animatie / actie van 
        <a href="/regisseur/David+Soren" title="Zoek meer films van David Soren" class="zoeklink-acteur">David Soren</a></div>
        <div class="imdb">6.2</div>
          <img src="https://www.filmvandaag.nl/covers/small/99000/99785.jpg" alt="Kapitein Onderbroek: Het eerste grote avontuur"
          class="filmladder-cover" />
        <table class="filmladder-tabel">
          <thead>
            <tr>
              <th class="filmladder-vandaag tooltip tooltipstered">Vandaag</th>
              <th class="tooltip tooltipstered">Morgen</th>
              <th class="tooltip tooltipstered">Dinsdag</th>
              <th class="tooltip tooltipstered">Woensdag</th>
              <th class="tooltip hide-mobile tooltipstered">Donderdag</th>
              <th class="tooltip hide-mobile tooltipstered">Vrijdag</th>
              <th class="tooltip hide-mobile tooltipstered">Zaterdag</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="filmladder-vandaag">
                <time itemprop="startDate" content="2017-10-29T12:30" class="finished">12:30</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-10-30T12:30" class="">12:30</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-10-31T11:45" class="">11:45</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-11-01T10:15" class="">10:15</time>
                <br />
                <time itemprop="startDate" content="2017-11-01T14:15" class="">14:15</time>
              </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
            </tr>
          </tbody>
        </table>
      </li>
      <li>
        <h4>
          <a href="film.php">Kingsman: The Golden Circle</a> (2017)
        </h4>
        <div class="info">Actie / avontuur van 
        <a href="/regisseur/Matthew+Vaughn" title="Zoek meer films van Matthew Vaughn" class="zoeklink-acteur">Matthew
        Vaughn</a></div>
        <div class="imdb">7.2</div>
          <img src="https://www.filmvandaag.nl/covers/small/99000/99596.jpg" alt="Kingsman: The Golden Circle"
          class="filmladder-cover" />
        <table class="filmladder-tabel">
          <thead>
            <tr>
              <th class="filmladder-vandaag tooltip tooltipstered">Vandaag</th>
              <th class="tooltip tooltipstered">Morgen</th>
              <th class="tooltip tooltipstered">Dinsdag</th>
              <th class="tooltip tooltipstered">Woensdag</th>
              <th class="tooltip hide-mobile tooltipstered">Donderdag</th>
              <th class="tooltip hide-mobile tooltipstered">Vrijdag</th>
              <th class="tooltip hide-mobile tooltipstered">Zaterdag</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="filmladder-vandaag">
                <time itemprop="startDate" content="2017-10-29T21:00" class="">21:00</time>
              </td>
              <td>
              <time itemprop="startDate" content="2017-10-30T13:00" class="">13:00</time> 
              <small class="tooltip tooltipstered">IMAX</small>
              <br />
              <time itemprop="startDate" content="2017-10-30T21:30" class="">21:30</time> 
              <small class="tooltip tooltipstered">IMAX</small></td>
              <td>
                <time itemprop="startDate" content="2017-10-31T17:00" class="">17:00</time>
              </td>
              <td>
              <time itemprop="startDate" content="2017-11-01T21:30" class="">21:30</time> 
              <small class="tooltip tooltipstered">IMAX</small></td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
            </tr>
          </tbody>
        </table>
      </li>
      <li>
        <h4>
          <a href="film.php">Leatherface</a> (2017)
        </h4>
        <div class="info">Horror / thriller van 
        <a href="/regisseur/Alexandre+Bustillo" title="Zoek meer films van Alexandre Bustillo" class="zoeklink-acteur">Alexandre
        Bustillo</a> en 
        <a href="/regisseur/Julien+Maury" title="Zoek meer films van Julien Maury" class="zoeklink-acteur">Julien Maury</a></div>
        <div class="imdb">5.1</div>
          <img src="https://www.filmvandaag.nl/covers/small/103000/103351.jpg" alt="Leatherface" class="filmladder-cover" />
        <table class="filmladder-tabel">
          <thead>
            <tr>
              <th class="filmladder-vandaag tooltip tooltipstered">Vandaag</th>
              <th class="tooltip tooltipstered">Morgen</th>
              <th class="tooltip tooltipstered">Dinsdag</th>
              <th class="tooltip tooltipstered">Woensdag</th>
              <th class="tooltip hide-mobile tooltipstered">Donderdag</th>
              <th class="tooltip hide-mobile tooltipstered">Vrijdag</th>
              <th class="tooltip hide-mobile tooltipstered">Zaterdag</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="filmladder-vandaag"> </td>
              <td>
                <time itemprop="startDate" content="2017-10-30T22:30" class="">22:30</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-10-31T17:30" class="">17:30</time>
                <br />
                <time itemprop="startDate" content="2017-10-31T22:00" class="">22:00</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-11-01T22:30" class="">22:30</time>
              </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
            </tr>
          </tbody>
        </table>
      </li>
      <li>
        <h4>
          <a href="film.php">Misfit</a> (2017)
        </h4>
        <div class="info">Komedie van 
        <a href="/regisseur/Erwin+van+den+Eshof" title="Zoek meer films van Erwin van den Eshof" class="zoeklink-acteur">Erwin van
        den Eshof</a></div>
        <div class="imdb">6.2</div>
          <img src="https://www.filmvandaag.nl/covers/small/102000/102721.jpg" alt="Misfit" class="filmladder-cover" />
        <table class="filmladder-tabel">
          <thead>
            <tr>
              <th class="filmladder-vandaag tooltip tooltipstered">Vandaag</th>
              <th class="tooltip tooltipstered">Morgen</th>
              <th class="tooltip tooltipstered">Dinsdag</th>
              <th class="tooltip tooltipstered">Woensdag</th>
              <th class="tooltip hide-mobile tooltipstered">Donderdag</th>
              <th class="tooltip hide-mobile tooltipstered">Vrijdag</th>
              <th class="tooltip hide-mobile tooltipstered">Zaterdag</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="filmladder-vandaag">
                <time itemprop="startDate" content="2017-10-29T11:45" class="finished">11:45</time>
                <br />
                <time itemprop="startDate" content="2017-10-29T14:30" class="finished">14:30</time>
                <br />
                <time itemprop="startDate" content="2017-10-29T17:00" class="finished">17:00</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-10-30T14:30" class="">14:30</time>
                <br />
                <time itemprop="startDate" content="2017-10-30T17:00" class="">17:00</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-10-31T13:00" class="">13:00</time>
                <br />
                <time itemprop="startDate" content="2017-10-31T17:30" class="">17:30</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-11-01T14:30" class="">14:30</time>
                <br />
                <time itemprop="startDate" content="2017-11-01T17:00" class="">17:00</time>
              </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
            </tr>
          </tbody>
        </table>
      </li>
      <li>
        <h4>
          <a href="film.php">My Little Pony: De Film</a> (2017)
        </h4>
        <div class="info">Animatie / familie van 
        <a href="/regisseur/Jayson+Thiessen" title="Zoek meer films van Jayson Thiessen" class="zoeklink-acteur">Jayson
        Thiessen</a></div>
        <div class="imdb">6.4</div>
          <img src="https://www.filmvandaag.nl/covers/small/100000/100613.jpg" alt="My Little Pony: De Film"
          class="filmladder-cover" />
        <table class="filmladder-tabel">
          <thead>
            <tr>
              <th class="filmladder-vandaag tooltip tooltipstered">Vandaag</th>
              <th class="tooltip tooltipstered">Morgen</th>
              <th class="tooltip tooltipstered">Dinsdag</th>
              <th class="tooltip tooltipstered">Woensdag</th>
              <th class="tooltip hide-mobile tooltipstered">Donderdag</th>
              <th class="tooltip hide-mobile tooltipstered">Vrijdag</th>
              <th class="tooltip hide-mobile tooltipstered">Zaterdag</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="filmladder-vandaag">
                <time itemprop="startDate" content="2017-10-29T09:45" class="finished">09:45</time>
                <br />
                <time itemprop="startDate" content="2017-10-29T13:45" class="finished">13:45</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-10-30T13:30" class="">13:30</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-10-31T11:00" class="">11:00</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-11-01T13:30" class="">13:30</time>
              </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
            </tr>
          </tbody>
        </table>
      </li>
      <li>
        <h4>
          <a href="film.php">Sinterklaas &amp; het gouden hoefijzer</a> (2017)
        </h4>
        <div class="info">Familie van 
        <a href="/regisseur/Aram+van+de+Rest" title="Zoek meer films van Aram van de Rest" class="zoeklink-acteur">Aram van de
        Rest</a></div>
        <div class="imdb">5.1</div>
          <img src="https://www.filmvandaag.nl/covers/small/100000/100757.jpg" alt="Sinterklaas &amp; het gouden hoefijzer"
          class="filmladder-cover" />
        <table class="filmladder-tabel">
          <thead>
            <tr>
              <th class="filmladder-vandaag tooltip tooltipstered">Vandaag</th>
              <th class="tooltip tooltipstered">Morgen</th>
              <th class="tooltip tooltipstered">Dinsdag</th>
              <th class="tooltip tooltipstered">Woensdag</th>
              <th class="tooltip hide-mobile tooltipstered">Donderdag</th>
              <th class="tooltip hide-mobile tooltipstered">Vrijdag</th>
              <th class="tooltip hide-mobile tooltipstered">Zaterdag</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="filmladder-vandaag">
                <time itemprop="startDate" content="2017-10-29T10:45" class="finished">10:45</time>
                <br />
                <time itemprop="startDate" content="2017-10-29T13:15" class="finished">13:15</time>
                <br />
                <time itemprop="startDate" content="2017-10-29T15:30" class="finished">15:30</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-10-30T10:45" class="">10:45</time>
                <br />
                <time itemprop="startDate" content="2017-10-30T15:30" class="">15:30</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-10-31T14:15" class="">14:15</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-11-01T12:45" class="">12:45</time>
                <br />
                <time itemprop="startDate" content="2017-11-01T15:30" class="">15:30</time>
              </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
            </tr>
          </tbody>
        </table>
      </li>
      <li>
        <h4>
          <a href="film.php">Storm: Letters van Vuur</a> (2017)
        </h4>
        <div class="info">Familie / avontuur van 
        <a href="/regisseur/Dennis+Bots" title="Zoek meer films van Dennis Bots" class="zoeklink-acteur">Dennis Bots</a></div>
        <div class="imdb">6.1</div>
          <img src="https://www.filmvandaag.nl/covers/small/99000/99770.jpg" alt="Storm: Letters van Vuur"
          class="filmladder-cover" />
        <table class="filmladder-tabel">
          <thead>
            <tr>
              <th class="filmladder-vandaag tooltip tooltipstered">Vandaag</th>
              <th class="tooltip tooltipstered">Morgen</th>
              <th class="tooltip tooltipstered">Dinsdag</th>
              <th class="tooltip tooltipstered">Woensdag</th>
              <th class="tooltip hide-mobile tooltipstered">Donderdag</th>
              <th class="tooltip hide-mobile tooltipstered">Vrijdag</th>
              <th class="tooltip hide-mobile tooltipstered">Zaterdag</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="filmladder-vandaag"> </td>
              <td> </td>
              <td>
              <time itemprop="startDate" content="2017-10-31T13:45" class="">13:45</time> 
              <small class="nl tooltip tooltipstered">NL</small></td>
              <td> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
            </tr>
          </tbody>
        </table>
      </li>
      <li>
        <h4>
          <a href="film.php">Stronger</a> (2017)
        </h4>
        <div class="info">Drama / biografie van 
        <a href="/regisseur/David+Gordon+Green" title="Zoek meer films van David Gordon Green" class="zoeklink-acteur">David Gordon
        Green</a></div>
        <div class="imdb">7.5</div>
          <img src="https://www.filmvandaag.nl/covers/small/101000/101997.jpg" alt="Stronger" class="filmladder-cover" />
        <table class="filmladder-tabel">
          <thead>
            <tr>
              <th class="filmladder-vandaag tooltip tooltipstered">Vandaag</th>
              <th class="tooltip tooltipstered">Morgen</th>
              <th class="tooltip tooltipstered">Dinsdag</th>
              <th class="tooltip tooltipstered">Woensdag</th>
              <th class="tooltip hide-mobile tooltipstered">Donderdag</th>
              <th class="tooltip hide-mobile tooltipstered">Vrijdag</th>
              <th class="tooltip hide-mobile tooltipstered">Zaterdag</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="filmladder-vandaag"> </td>
              <td>
                <time itemprop="startDate" content="2017-10-30T18:15" class="">18:15</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-10-31T10:30" class="">10:30</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-11-01T10:45" class="">10:45</time>
              </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
            </tr>
          </tbody>
        </table>
      </li>
      <li>
        <h4>
          <a href="film.php">The Dark Tower</a> (2017)
        </h4>
        <div class="info">Avontuur / fantasy van 
        <a href="/regisseur/Nikolaj+Arcel" title="Zoek meer films van Nikolaj Arcel" class="zoeklink-acteur">Nikolaj
        Arcel</a></div>
        <div class="imdb">5.8</div>
          <img src="https://www.filmvandaag.nl/covers/small/98000/98603.jpg" alt="The Dark Tower" class="filmladder-cover" />
        <table class="filmladder-tabel">
          <thead>
            <tr>
              <th class="filmladder-vandaag tooltip tooltipstered">Vandaag</th>
              <th class="tooltip tooltipstered">Morgen</th>
              <th class="tooltip tooltipstered">Dinsdag</th>
              <th class="tooltip tooltipstered">Woensdag</th>
              <th class="tooltip hide-mobile tooltipstered">Donderdag</th>
              <th class="tooltip hide-mobile tooltipstered">Vrijdag</th>
              <th class="tooltip hide-mobile tooltipstered">Zaterdag</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="filmladder-vandaag">
                <time itemprop="startDate" content="2017-10-29T18:15" class="finished">18:15</time>
              </td>
              <td> </td>
              <td> </td>
              <td> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
            </tr>
          </tbody>
        </table>
      </li>
      <li>
        <h4>
          <a href="film.php">The Emoji Movie</a> (2017)
        </h4>
        <div class="info">Animatie / komedie van 
        <a href="/regisseur/Tony+Leondis" title="Zoek meer films van Tony Leondis" class="zoeklink-acteur">Tony Leondis</a></div>
        <div class="imdb">2.6 </div>
          <img src="https://www.filmvandaag.nl/covers/small/99000/99955.jpg" alt="The Emoji Movie" class="filmladder-cover" />
        <table class="filmladder-tabel">
          <thead>
            <tr>
              <th class="filmladder-vandaag tooltip tooltipstered">Vandaag</th>
              <th class="tooltip tooltipstered">Morgen</th>
              <th class="tooltip tooltipstered">Dinsdag</th>
              <th class="tooltip tooltipstered">Woensdag</th>
              <th class="tooltip hide-mobile tooltipstered">Donderdag</th>
              <th class="tooltip hide-mobile tooltipstered">Vrijdag</th>
              <th class="tooltip hide-mobile tooltipstered">Zaterdag</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="filmladder-vandaag">
              <time itemprop="startDate" content="2017-10-29T16:30" class="finished">16:30</time> 
              <small class="nl tooltip tooltipstered">3D</small></td>
              <td> </td>
              <td> </td>
              <td>
              <time itemprop="startDate" content="2017-11-01T12:30" class="">12:30</time> 
              <small class="nl tooltip tooltipstered">3D</small></td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
            </tr>
          </tbody>
        </table>
      </li>
      <li>
        <h4>
          <a href="film.php">The Foreigner</a> (2017)
        </h4>
        <div class="info">Actie / thriller van 
        <a href="/regisseur/Martin+Campbell" title="Zoek meer films van Martin Campbell" class="zoeklink-acteur">Martin
        Campbell</a></div>
        <div class="imdb">7.3 </div>
          <img src="https://www.filmvandaag.nl/covers/small/102000/102996.jpg" alt="The Foreigner" class="filmladder-cover" />
        <table class="filmladder-tabel">
          <thead>
            <tr>
              <th class="filmladder-vandaag tooltip tooltipstered">Vandaag</th>
              <th class="tooltip tooltipstered">Morgen</th>
              <th class="tooltip tooltipstered">Dinsdag</th>
              <th class="tooltip tooltipstered">Woensdag</th>
              <th class="tooltip hide-mobile tooltipstered">Donderdag</th>
              <th class="tooltip hide-mobile tooltipstered">Vrijdag</th>
              <th class="tooltip hide-mobile tooltipstered">Zaterdag</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="filmladder-vandaag">
                <time itemprop="startDate" content="2017-10-29T19:00" class="finished">19:00</time>
              </td>
              <td> </td>
              <td> </td>
              <td> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
            </tr>
          </tbody>
        </table>
      </li>
      <li>
        <h4>
          <a href="film.php">The LEGO Ninjago Movie</a> (2017)
        </h4>
        <div class="info">Animatie / actie van 
        <a href="/regisseur/Charlie+Bean" title="Zoek meer films van Charlie Bean" class="zoeklink-acteur">Charlie Bean</a>, 
        <a href="/regisseur/Paul+Fisher" title="Zoek meer films van Paul Fisher" class="zoeklink-acteur">Paul Fisher</a> en 
        <a href="/regisseur/Bob+Logan" title="Zoek meer films van Bob Logan" class="zoeklink-acteur">Bob Logan</a></div>
        <div class="imdb">6.1</div>
          <img src="https://www.filmvandaag.nl/covers/small/100000/100763.jpg" alt="The LEGO Ninjago Movie"
          class="filmladder-cover" />
        <table class="filmladder-tabel">
          <thead>
            <tr>
              <th class="filmladder-vandaag tooltip tooltipstered">Vandaag</th>
              <th class="tooltip tooltipstered">Morgen</th>
              <th class="tooltip tooltipstered">Dinsdag</th>
              <th class="tooltip tooltipstered">Woensdag</th>
              <th class="tooltip hide-mobile tooltipstered">Donderdag</th>
              <th class="tooltip hide-mobile tooltipstered">Vrijdag</th>
              <th class="tooltip hide-mobile tooltipstered">Zaterdag</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="filmladder-vandaag">
              <time itemprop="startDate" content="2017-10-29T10:15" class="finished">10:15</time> 
              <small class="nl tooltip tooltipstered">NL</small>
              <br />
              <time itemprop="startDate" content="2017-10-29T12:30" class="finished">12:30</time> 
              <small class="nl tooltip tooltipstered">3D</small>
              <br />
              <time itemprop="startDate" content="2017-10-29T15:00" class="finished">15:00</time> 
              <small class="nl tooltip tooltipstered">NL</small></td>
              <td>
              <time itemprop="startDate" content="2017-10-30T10:15" class="">10:15</time> 
              <small class="nl tooltip tooltipstered">3D</small></td>
              <td>
              <time itemprop="startDate" content="2017-10-31T15:15" class="">15:15</time> 
              <small class="nl tooltip tooltipstered">3D</small></td>
              <td>
              <time itemprop="startDate" content="2017-11-01T10:00" class="">10:00</time> 
              <small class="nl tooltip tooltipstered">3D</small>
              <br />
              <time itemprop="startDate" content="2017-11-01T15:00" class="">15:00</time> 
              <small class="nl tooltip tooltipstered">NL</small></td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
            </tr>
          </tbody>
        </table>
      </li>
      <li>
        <h4>
          <a href="film.php">The Mountain Between Us</a> (2017)
        </h4>
        <div class="info">Drama / romantiek van 
        <a href="/regisseur/Hany+Abu-Assad" title="Zoek meer films van Hany Abu-Assad" class="zoeklink-acteur">Hany
        Abu-Assad</a></div>
        <div class="imdb">6.2</div>
          <img src="https://www.filmvandaag.nl/covers/small/102000/102775.jpg" alt="The Mountain Between Us"
          class="filmladder-cover" />
        <table class="filmladder-tabel">
          <thead>
            <tr>
              <th class="filmladder-vandaag tooltip tooltipstered">Vandaag</th>
              <th class="tooltip tooltipstered">Morgen</th>
              <th class="tooltip tooltipstered">Dinsdag</th>
              <th class="tooltip tooltipstered">Woensdag</th>
              <th class="tooltip hide-mobile tooltipstered">Donderdag</th>
              <th class="tooltip hide-mobile tooltipstered">Vrijdag</th>
              <th class="tooltip hide-mobile tooltipstered">Zaterdag</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="filmladder-vandaag">
                <time itemprop="startDate" content="2017-10-29T16:15" class="finished">16:15</time>
                <br />
                <time itemprop="startDate" content="2017-10-29T20:30" class="">20:30</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-10-30T13:15" class="">13:15</time>
                <br />
                <time itemprop="startDate" content="2017-10-30T20:15" class="">20:15</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-10-31T13:15" class="">13:15</time>
                <br />
                <time itemprop="startDate" content="2017-10-31T19:30" class="">19:30</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-11-01T13:00" class="">13:00</time>
                <br />
                <time itemprop="startDate" content="2017-11-01T17:45" class="">17:45</time>
                <br />
                <time itemprop="startDate" content="2017-11-01T20:15" class="">20:15</time>
              </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
            </tr>
          </tbody>
        </table>
      </li>
      <li>
        <h4>
          <a href="film.php">Thor: Ragnarok</a> (2017)
        </h4>
        <div class="info">Actie / avontuur van 
        <a href="/regisseur/Taika+Waititi" title="Zoek meer films van Taika Waititi" class="zoeklink-acteur">Taika
        Waititi</a></div>
        <div class="imdb">8.3 </div>
          <img src="https://www.filmvandaag.nl/covers/small/100000/100747.jpg" alt="Thor: Ragnarok" class="filmladder-cover" />
        <table class="filmladder-tabel">
          <thead>
            <tr>
              <th class="filmladder-vandaag tooltip tooltipstered">Vandaag</th>
              <th class="tooltip tooltipstered">Morgen</th>
              <th class="tooltip tooltipstered">Dinsdag</th>
              <th class="tooltip tooltipstered">Woensdag</th>
              <th class="tooltip hide-mobile tooltipstered">Donderdag</th>
              <th class="tooltip hide-mobile tooltipstered">Vrijdag</th>
              <th class="tooltip hide-mobile tooltipstered">Zaterdag</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="filmladder-vandaag">
                <time itemprop="startDate" content="2017-10-29T20:15" class="">20:15</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-10-30T18:45" class="">18:45</time>
              </td>
              <td> </td>
              <td>
                <time itemprop="startDate" content="2017-11-01T18:45" class="">18:45</time>
              </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
            </tr>
          </tbody>
        </table>
      </li>
      <li>
        <h4>
          <a href="film.php">Weg van Jou</a> (2017)
        </h4>
        <div class="info">Romantiek / komedie van 
        <a href="/regisseur/Jelle+de+Jonge" title="Zoek meer films van Jelle de Jonge" class="zoeklink-acteur">Jelle de
        Jonge</a></div>
        <div class="imdb">7.0</div>
          <img src="https://www.filmvandaag.nl/covers/small/100000/100578.jpg" alt="Weg van Jou" class="filmladder-cover" />
        <table class="filmladder-tabel">
          <thead>
            <tr>
              <th class="filmladder-vandaag tooltip tooltipstered">Vandaag</th>
              <th class="tooltip tooltipstered">Morgen</th>
              <th class="tooltip tooltipstered">Dinsdag</th>
              <th class="tooltip tooltipstered">Woensdag</th>
              <th class="tooltip hide-mobile tooltipstered">Donderdag</th>
              <th class="tooltip hide-mobile tooltipstered">Vrijdag</th>
              <th class="tooltip hide-mobile tooltipstered">Zaterdag</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="filmladder-vandaag">
                <time itemprop="startDate" content="2017-10-29T18:30" class="finished">18:30</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-10-30T19:15" class="">19:15</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-10-31T18:30" class="">18:30</time>
              </td>
              <td>
                <time itemprop="startDate" content="2017-11-01T19:45" class="">19:45</time>
              </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
              <td class="hide-mobile"> </td>
            </tr>
          </tbody>
        </table>
      </li>
    </ul>
	</div>
	
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