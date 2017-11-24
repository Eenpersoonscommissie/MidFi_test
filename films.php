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
            <a href="#" class="active">Film Top 10</a>
            <a href="Films_bios.php">Nu in de bios</a>
            <a href="#">Verwacht</a>
        </nav>
        <div id="Top10">
            <h1>Film Top 10</h1></a>
            <ul class="tabs">
                <li class="tab-link current" data-tab="tab-1">Algemeen</li>
                <li class="tab-link" data-tab="tab-2">Actie</li>
                <li class="tab-link" data-tab="tab-3">Fantasy</li>
                <li class="tab-link" data-tab="tab-4">Horror</li>
                <li class="tab-link" data-tab="tab-5">Thriller</li>
            </ul>

            <div id="tab-1" class="tab-content current">
                <ol>
                    <li><a href="film.php"><img src="images/Actie%20lijst_html_436db14c27c0a011.gif" name="Afbeelding 1"/><h1>Non-Stop</h1></a>
			<p>Geregisseerd
			door&nbsp;<a href="https://www.moviemeter.nl/director/5752">Jaume
			Collet-Serra</a><br/>
met Liam Neeson, Michelle Dockery en
			Julianne Moore</p>
			<p>Bill
			Marks (Liam Neeson) is een uitgebluste veteraan van de Air
			Marshals service. Hij beschouwt zijn job niet als een taak die
			levens kan redden, maar als een kantoorbaantje in de lucht. De
			vlucht van vandaag zal echter geen routine blijken. Kort na het
			opstijgen van een transatlantische vlucht van New York naar Londen
			krijgt hij een reeks mysterieuze tekstberichten die hem bevelen
			ervoor te zorgen dat de regering het bedrag van 150 miljoen dollar
			overmaakt op een geheime bankrekening. Indien dit niet gebeurt zal
			elke twintig minuten een passagier sterven.</p>
			<p>Verenigde
			Staten<br/>
2014</p></li>
                    <li><a href="film.php"><img src="images/Horror%20lijst_html_9bb23536d9e225df.gif" name="Afbeelding 2"/><h1>I Spit on Your Grave 2</h1></a>
			<p>Geregisseerd
			door&nbsp;<a href="https://www.moviemeter.nl/director/12332">Steven
			R. Monroe</a><br/>
met Jemma Dallender, Joe Absolom en Yavor
			Baharov</p>
			<p>De
			mooie Katie is net verhuisd naar New York waar ze, net als vele
			andere knappe vrouwen, het probeert te maken als model. Maar wat
			begint als een onschuldige en simpele fotoshoot verandert al snel
			in een verontrustende situatie. Verkracht, gemarteld en ontvoerd
			naar een vreemd land, wordt Katie levend begraven en voor dood
			achtergelaten. Tegen alle verwachtingen in weet ze echter te
			ontsnappen en nu zint ze op wraak.</p></li>
                    <li><a href="film.php"><img src="images/triller%20lijst_html_b888172c8f318d01.gif" name="Afbeelding 6"/><h1>Escape</h1></a>
			<p>Geregisseerd
			door <a href="https://www.moviemeter.nl/director/9149">Mikael
			H&aring;fstr&ouml;m</a><br/>
met Arnold Schwarzenegger, Sylvester
			Stallone en Jim Caviezel</p>
			<p>Ray
			Breslin is 's werelds meest vooraanstaande persoon als het gaat om
			veiligheid. Hij heeft elke gevangenis nauwkeurig geanalyseerd en
			is tevens getraind op een enorme hoeveelheid
			overlevingstechnieken, zodat hij kan werken aan de best beveiligde
			gevangenissen ooit, waaruit ontsnappen onmogelijk is. Maar dan
			belandt hij in de gevangenis die hij ooit zelf ontwierp. Ray doet
			er alles aan om te ontsnappen, en gaat op zoek naar de persoon die
			er voor zorgde dat hij zelf achter de tralies verdween.</p>
			<p>Verenigde Staten<br/>
2013</p></li>
                    <li><a href="film.php"><img src="images/triller%20lijst_html_982f8b8e1548bc6a.gif" name="Afbeelding 8"/><h1>Homefront</h1></a>
			<p>Geregisseerd
			door&nbsp;<a href="https://www.moviemeter.nl/director/4126">Gary
			Fleder</a><br/>
met Jason Statham, James Franco en Winona Ryder</p>
			<p>Phil
			Broker (Jason Statham) is een voormalig narcotica-agent, die samen
			met zijn dochter naar een rustig stadje verhuist, om aan zijn
			verleden te ontsnappen. Hij komt echter terecht in een plaats die
			overspoeld wordt door geweld, drugsdealers en de kwaadaardige
			methadonmagnaat Gator (James Franco). Het duurt niet lang voordat
			Phil wederom de strijd aanbindt met de criminaliteit.</p>
			<p>Verenigde Staten<br/>
2013</p></li>
                    <li><a href="film.php"><img src="images/Fantasy%20lijst_html_eebe1395ce675e2e.gif" name="Afbeelding 12"/><h1>Beauty and the Beast</h1></a>
			<p>geregisseerd
			door&nbsp;<a href="https://www.moviemeter.nl/director/2089">Christophe
			Gans</a><br/>
met Vincent Cassel, L&eacute;a Seydoux en Andr&eacute;
			Dussollier</p>
			<p>1720.
			Nadat zijn schepen schipbreuk hebben geleden, moet een geru&iuml;neerde
			koopman met zijn zes kinderen naar het platteland te verhuizen.
			Onder hen bevindt zich Belle, de jongste van zijn dochters, maar
			ook de vrolijkste en de charmantste. Tijdens een uitputtende reis
			ontdekt de koopman het magische domein van het Beest, die hem ter
			dood veroordeeld voor het stelen van een roos. Belle voelt zich
			verantwoordelijk voor het verschrikkelijke lot dat haar familie
			treft en ze besluit om de plaats van haar vader in te nemen. Op
			het kasteel van het Beest wacht Belle niet de dood, maar een
			vreemd leven, waar een sprookjesachtige wereld, vreugde en
			melancholie zich met elkaar vermengen.</p>
			<p>Frankrijk<br/>
2014</p></li>
                </ol>
            </div>
            <div id="tab-2" class="tab-content">
                <ol>
                    <li><a href="film.php"><img src="images/Actie%20lijst_html_8eaf31d501228a7.gif" name="Afbeelding 2"/><h1>2 Guns</h1></a>
			<p>geregisseerd
			door&nbsp;<a href="https://www.moviemeter.nl/director/1034">Baltasar
			Korm&aacute;kur</a><br/>
met Mark Wahlberg, Denzel Washington en
			Paula Patton</p>
			<p>Een
			agent van de Narcoticabrigade en een undercoveragent van de
			inlichtingendienst van de marine hebben de taak gekregen, om een
			onderzoek naar elkaar in te stellen. Tot ze ontdekken dat ze in de
			val zijn gelokt door de maffia - dezelfde organisatie waarvan de
			twee mannen dachten dat ze geld stalen.</p>
			<p><br/>

			</p>
			<p>Verenigde Staten 
			</p>
			<p>2013</p></li>
                    <li><a href="film.php"><img src="images/Actie%20lijst_html_14d93653a08f47a2.gif" name="Afbeelding 3"/><h1>Drive angry</h1></a>
			<p>geregisseerd
			door&nbsp;<a href="https://www.moviemeter.nl/director/9873">Patrick
			Lussier</a><br/>
met Nicolas Cage, Amber Heard en William Fichtner</p>
			<p>Wanneer
			de dochter van Milton (Nicolas Cage) vermoord wordt wil hij maar
			&eacute;&eacute;n ding; wraak. Hij krijgt drie dagen de tijd om de
			moordenaars te vinden, omdat deze ook nog eens zijn kleindochter
			ontvoerd hebben en ze van plan zijn om haar onder een volle maan
			te offeren. Hij wordt tijdens zijn wraakmissie vergezeld door
			Piper (Amber Heard), een jonge en sexy serveerster. In Pipers
			'turbo-charged Black '69 Charger' beginnen ze een race tegen de
			klok...</p>
			<p><br/>

			</p>
			<p>Verenigde Staten 2011</p></li>
                    <li><a href="film.php"><img src="images/Actie%20lijst_html_a693011f2ae0edff.gif" name="Afbeelding 4"/><h1>Lucy</h1></a>
			<p>geregisseerd
			door&nbsp;<a href="https://www.moviemeter.nl/director/7971">Luc
			Besson</a><br/>
met Scarlett Johansson, Morgan Freeman en Min-sik
			Choi</p>
			<p>Lucy
			(Scarlett Johansson) is een jonge vrouw die op vreselijke wijze
			gedwongen wordt om drugs te smokkelen. Per ongeluk komt zij in
			aanraking met de drugs, die haar op een mysterieuze manier
			bovenmenselijke krachten geven. Ze kan kennis direct absorberen,
			is in staat om objecten met haar geest te verplaatsen en ze kan
			geen pijn of leed voelen. Ze trekt vervolgens ten strijde tegen de
			onverlaten die haar te grazen namen.</p>
			<p><br/>

			</p>
			<p>Frankrijk <br/>
2014</p></li>
                    <li><a href="film.php"><img src="images/Actie%20lijst_html_aba9354133f563a9.gif" name="Afbeelding 5"/><h1>Olympus has fallen</h1></a>
			<p>geregisseerd
			door&nbsp;<a href="https://www.moviemeter.nl/director/800">Antoine
			Fuqua</a><br/>
met Gerard Butler, Aaron Eckhart en Morgan Freeman</p>
			<p>De
			film volgt een eerloos ontslagen agent van de Amerikaanse geheime
			dienst (Gerard Butler). Wanneer Noord-Koreaanse terroristen,
			gewapend met buitengewone technologische wapens, het Witte Huis
			bezetten en de president (Aaron Eckhart) en een aantal van zijn
			medewerkers gijzelen, blijkt hij de enige man te zijn die de
			president en het land nog kan redden.</p>
			<p><br/>

			</p>
			<p>Verenigde Staten 2013</p></li>
                    <li><a href="film.php"><img src="images/Actie%20lijst_html_77181a6b2e06dc1a.gif" name="Afbeelding 6"/><h1>Unlocked</h1></a>
			<p>geregisseerd
			door&nbsp;<a href="https://www.moviemeter.nl/director/8824">Michael
			Apted</a><br/>
met Noomi Rapace, Orlando Bloom en Toni Collette</p>
			<p>Het
			verhaal gaat over een CIA-agente (Noomi Rapace), die zonder het te
			weten informatie verschaft aan terroristen. Vervolgens moet ze in
			een race tegen de klok een chemische aanval op Londen zien te
			voorkomen.</p>
			<p>Verenigd Koninkrijk<br/>
2017</p></li>
                </ol>
            </div>
            <div id="tab-3" class="tab-content">
                <ol>
                    <li><a href="film.php"><img src="images/Fantasy%20lijst_html_596d66bc2ad555bc.gif" name="Afbeelding 1"/><h1>After the Dark</h1></a>
			<p>Geregisseerd
			door&nbsp;<a href="https://www.moviemeter.nl/director/6475">John
			Huddles</a><br/>
met James D'Arcy, Sophie Lowe en Daryl Sabara</p>
			<p>Op
			een internationale school in Jakarta zet een leraar filosofie zijn
			klas voor het blok met het volgende vraagstuk: welke tien
			leerlingen zouden in het geval van een nucleaire apocalyps plaats
			mogen nemen in een ondergrondse schuilkelder, om vanuit daar het
			menselijk ras te doen overleven. De klas bestaat uit twintig
			leerlingen, dus de helft zal moeten afvallen. Wie zal men kiezen
			en waarom?</p>
			<p>Verenigde Staten <br/>
2013</p></li>
                    <li><a href="film.php"><img src="images/Fantasy%20lijst_html_7586be8ee0ac68d6.gif" name="Afbeelding 10"/><h1>Hornn</h1></a>
			<p>Geregisseerd
			door&nbsp;<a href="https://www.moviemeter.nl/director/383">Alexandre
			Aja</a><br/>
met Daniel Radcliffe, Juno Temple en Kelli Garner</p>
			<p>Ig
			Perrish (Daniel Radcliffe) wordt beschuldigd van de gewelddadige
			verkrachting en moord op zijn vriendin (Juno Temple). Hij houdt
			stug vol het niet gedaan te hebben en vlucht in drank. Maar als
			hij de volgende ochtend wakker wordt, heeft hij niet alleen een
			enorme kater. Ook groeien er opeens hoorns uit zijn hoofd. Daar
			blijft het niet bij, want Ig ontdekt dat zijn hoorns mensen aanzet
			om fouten op te biechten en toe te geven aan hun ego&iuml;stische
			impulsen. Hij besluit zijn bizarre, maar effectieve nieuwe kracht
			te gebruiken om uit te zoeken hoe zijn vriendin echt om het leven
			is gekomen en wraak te nemen op de dader.</p>
			<p>Canada<br/>
2013</p></li>
                    <li><a href="film.php"><img src="images/Fantasy%20lijst_html_e4af3db4b293b395.gif" name="Afbeelding 11"/><h1>Krabat</h1></a>
			<p>Geregisseerd
			door&nbsp;<a href="https://www.moviemeter.nl/director/8240">Marco
			Kreuzpaintner</a><br/>
met David Kross, Christian Redl en Daniel
			Br&uuml;hl</p>
			<p>Was
			het toeval dat Krabat als leerling op de molen kwam, diep in de
			sombere bossen van Bohemen? De molen blijkt een school van de
			zwarte kunsten te zijn. De molenaar is Meester in de toverkunst.
			Twaalf knechten heeft hij: twaalf leerlingen. Weglopen kunnen ze
			niet, want de toverkunsten van de Meester zorgen ervoor dat de weg
			ze steeds weer naar de molen terug leidt. Krabat vlucht dan ook
			niet. Hij kiest een andere weg, gesteund door de liefde van een
			meisje.</p>
			<p>Duitsland<br/>
2008</p></li>
                    <li><a href="film.php"><img src="images/Fantasy%20lijst_html_eebe1395ce675e2e.gif" name="Afbeelding 12"/><h1>Beauty and the Beast</h1></a>
			<p>geregisseerd
			door&nbsp;<a href="https://www.moviemeter.nl/director/2089">Christophe
			Gans</a><br/>
met Vincent Cassel, L&eacute;a Seydoux en Andr&eacute;
			Dussollier</p>
			<p>1720.
			Nadat zijn schepen schipbreuk hebben geleden, moet een geru&iuml;neerde
			koopman met zijn zes kinderen naar het platteland te verhuizen.
			Onder hen bevindt zich Belle, de jongste van zijn dochters, maar
			ook de vrolijkste en de charmantste. Tijdens een uitputtende reis
			ontdekt de koopman het magische domein van het Beest, die hem ter
			dood veroordeeld voor het stelen van een roos. Belle voelt zich
			verantwoordelijk voor het verschrikkelijke lot dat haar familie
			treft en ze besluit om de plaats van haar vader in te nemen. Op
			het kasteel van het Beest wacht Belle niet de dood, maar een
			vreemd leven, waar een sprookjesachtige wereld, vreugde en
			melancholie zich met elkaar vermengen.</p>
			<p>Frankrijk<br/>
2014</p></li>
                    <li><a href="film.php"><img src="images/Fantasy%20lijst_html_5f9c9c6ffc506cf5.gif" name="Afbeelding 13"/><h1>de Griezelbus</h1></a>
			<p>geregisseerd
			door&nbsp;<a href="https://www.moviemeter.nl/director/10463">Pieter
			Kuijpers</a><br/>
met Serge Price, Lisa Smit en Jim van der Panne</p>
			<p>De
			Griezelbus, naar de gelijknamige boeken van Paul van Loon, vertelt
			het verhaal over de elfjarige Onnoval, hij is een absoluut
			buitenbeentje op school. Hij wordt gepest om zijn uiterlijk en om
			zijn gedrag: Onnoval schrijft griezelverhalen en romantische
			gedichten. Een verzonnen griezelschoolreisje wordt werkelijkheid
			als Ferluci ermee aan de haal gaat. Lukt het Onnoval om de deur
			naar de andere 'werkelijkheid' te sluiten en zo zijn klasgenoten
			te redden?</p>
			<p><br/>

			</p>
			<p>Nederland<br/>
2005</p></li>
                </ol>
            </div>
            <div id="tab-4" class="tab-content">
                <ol>
                    <li><a href="film.php"><img src="images/Horror%20lijst_html_68c42b9cc3d28929.gif" name="Afbeelding 1"/><h1>Cloverfield</h1></a>
			<p>
			Geregisseerd
			door&nbsp;<a href="https://www.moviemeter.nl/director/8654">Matt
			Reeves</a><br/>
met Michael Stahl-David, Mike Vogel en Lizzy
			Caplan</p>
			<p>Een
			groep jonge mensen organiseert een afscheidsfeestje voor Rob
			Hawkins, die naar Japan vertrekt. Wanneer er een korte aardbeving
			gevoeld wordt en er korte tijd later een gigantische explosie
			plaatsvindt, is het duidelijk dat hun avondje uit er &eacute;&eacute;n
			wordt om nooit te vergeten. Met een videocamera slaagt Hud, &eacute;&eacute;n
			van de jongeren, erin om de diverse taferelen die zich die nacht
			voordoen, vast te leggen. De beelden tonen onder meer het verloop
			van een beangstigend chaotische nacht in New York City, waarbij
			veel slachtoffers vallen.</p>
			<p><br/>

			</p>
			<p>Verenigde Staten<br/>
2008</p></li>
                    <li><a href="film.php"><img src="images/Horror%20lijst_html_9bb23536d9e225df.gif" name="Afbeelding 2"/><h1>I Spit on Your Grave 2</h1></a>
			<p>Geregisseerd
			door&nbsp;<a href="https://www.moviemeter.nl/director/12332">Steven
			R. Monroe</a><br/>
met Jemma Dallender, Joe Absolom en Yavor
			Baharov</p>
			<p>De
			mooie Katie is net verhuisd naar New York waar ze, net als vele
			andere knappe vrouwen, het probeert te maken als model. Maar wat
			begint als een onschuldige en simpele fotoshoot verandert al snel
			in een verontrustende situatie. Verkracht, gemarteld en ontvoerd
			naar een vreemd land, wordt Katie levend begraven en voor dood
			achtergelaten. Tegen alle verwachtingen in weet ze echter te
			ontsnappen en nu zint ze op wraak.</p></li>
                    <li><a href="film.php"><img src="images/Horror%20lijst_html_89a9dc89b600f742.gif" name="Afbeelding 3"/><h1>The last Exorsism</h1></a>
			<p>Geregisseerd
			door&nbsp;<a href="https://www.moviemeter.nl/director/23675">Daniel
			Stamm</a><br/>
met Patrick Fabian, Iris Bahr en Louis Herthum</p>
			<p>Nadat
			hij jarenlang geld afhandig gemaakt heeft van gelovigen, besluit
			de evangelische priester Cotton Marcus zijn naam te zuiveren, door
			een documentaire te schieten. Hij ontvangt een brief van Louis,
			een arme boer, die Cotton vraagt hem te helpen de duivel weg te
			jagen van zijn land. Dit komt hem goed uit, hij kan dit immers
			gebruiken voor zijn documentaire. Maar dan ontmoet Cotton Nell, de
			dochter van Louis. En Nell is nogal ontspoord...</p>
			<p>Verenigde Staten <br/>
2010</p></li>
                    <li><a href="film.php"><img src="images/Horror%20lijst_html_581a917208c6c2eb.gif" name="Afbeelding 4"/><h1>Wake Wood</h1></a>
			<p>Geregisseerd
			door&nbsp;<a href="https://www.moviemeter.nl/director/2726">David
			Keating</a><br/>
met Aidan Gillen, Eva Birthistle en Timothy Spall</p>
			<p>Nog
			steeds zitten ze heel erg met de dood van hun enige kind; de
			9-jarige Alice, die door een hond gedood werd. De dierenarts
			Patrick en apotheker Louise verhuizen naar een afgelegen stadje;
			Wake Wood. Het schijnt dat er een soort ritueel is, waardoor ze
			drie dagen met Alice door kunnen brengen. Het koppel vindt het
			maar een raar idee, maar gaat toch akkoord met Arthur, de leider
			van het stadje. Maar wat moeten ze doen als het weer tijd is voor
			Alice om terug te gaan?</p>
			<p><br/>

			</p>
			<p>Ierland<br/>
2010</p></li>
                    <li><a href="film.php"><img src="images/Horror%20lijst_html_ee35a89f32a2264.gif" name="Afbeelding 5"/><h1>Amnesiac</h1></a>
			<p>Geregisseerd
			door&nbsp;<a href="https://www.moviemeter.nl/director/8994">Michael
			Polish</a><br/>
met Kate Bosworth, Wes Bentley en Olivia Rose
			Keegan</p>
			<p>Een
			jonge vrouw (Kate Bosworth) verpleegt haar bedlegerige man (Wes
			Bentley) nadat hij is ontwaakt uit een coma als gevolg van een
			auto-ongeluk. Hij lijdt aan geheugenverlies en kan zich niets
			herinneren over zijn leven, alleen enkele flitsen over een ongeluk
			en een jong meisje, waarvan hij denkt dat het zijn dochter is. Na
			enige tijd begint hij zich af te vragen wat er werkelijk gebeurd
			is op de dag van het ongeluk en of zijn vrouw werkelijk is wie ze
			beweert te zijn.</p>
			<p>Verenigde Staten<br/>
2014</p></li>
                </ol>
            </div>
            <div id="tab-5" class="tab-content">
                <ol>
                    <li><a href="film.php"><img src="images/triller%20lijst_html_36b4987332eb8d50.gif" name="Afbeelding 1"/><h1>onleesbaar</h1></a>
			<p>Geregisseerd
			door <a href="https://www.moviemeter.nl/director/16016">Rodrigo
			Cort&eacute;s</a><br/>
met Ryan Reynolds, en de stemmen van Robert
			Paterson en Jos&eacute; Luis Garc&iacute;a P&eacute;rez</p>
			<p>Paul
			Conroy (Ryan Reynolds) is een vrachtwagenchauffeur uit de
			Verenigde Staten die werkzaam is in Irak. Na een aanslag van een
			groep terroristen wordt Paul wakker in een kist, onder de grond.
			Hij is levend begraven. Met enkel een aansteker en een mobiele
			telefoon moet Paul aan deze claustrofobische val proberen te
			ontsnappen...</p>
			<p>Spanje<br/>
2010</p></li>
                    <li><a href="film.php"><img src="images/triller%20lijst_html_b888172c8f318d01.gif" name="Afbeelding 6"/><h1>Escape</h1></a>
			<p>Geregisseerd
			door <a href="https://www.moviemeter.nl/director/9149">Mikael
			H&aring;fstr&ouml;m</a><br/>
met Arnold Schwarzenegger, Sylvester
			Stallone en Jim Caviezel</p>
			<p>Ray
			Breslin is 's werelds meest vooraanstaande persoon als het gaat om
			veiligheid. Hij heeft elke gevangenis nauwkeurig geanalyseerd en
			is tevens getraind op een enorme hoeveelheid
			overlevingstechnieken, zodat hij kan werken aan de best beveiligde
			gevangenissen ooit, waaruit ontsnappen onmogelijk is. Maar dan
			belandt hij in de gevangenis die hij ooit zelf ontwierp. Ray doet
			er alles aan om te ontsnappen, en gaat op zoek naar de persoon die
			er voor zorgde dat hij zelf achter de tralies verdween.</p>
			<p>Verenigde Staten<br/>
2013</p></li>
                    <li><a href="film.php"><img src="images/triller%20lijst_html_c67d20fe2423f61e.gif" name="Afbeelding 7"/><h1>Eagle Eye</h1></a>
			<p>Geregisseerd
			door <a href="https://www.moviemeter.nl/director/2389">D.J.
			Caruso</a><br/>
met Shia LaBeouf, Michelle Monaghan en Rosario
			Dawson</p>
			<p>Wanneer
			Jerry Shaw (Shia LaBeouf) en Rachel Holloman (Michelle Monaghan)
			allebei een mysterieus telefoontje krijgen van een onbekende
			vrouw, komen ze door dit toeval met elkaar in aanraking. De vrouw
			bedreigt hen en hun familie met de dood en brengt Jerry en Rachel
			in verschillende levensgevaarlijke omstandigheden. Hierbij
			gebruikt ze de hedendaagse technologie om elke stap die ze doen te
			controleren. Uiteindelijk escaleert de situatie en worden deze
			twee gewone mensen de meest gezochte voortvluchtigen. In een race
			tegen de klok proberen ze er samen achter te komen wat er
			werkelijk gaande is en waarom hen dit overkomt.</p>
			<p>Duitsland<br/>
2008</p></li>
                    <li><a href="film.php"><img src="images/triller%20lijst_html_982f8b8e1548bc6a.gif" name="Afbeelding 8"/><h1>Homefront</h1></a>
			<p>Geregisseerd
			door&nbsp;<a href="https://www.moviemeter.nl/director/4126">Gary
			Fleder</a><br/>
met Jason Statham, James Franco en Winona Ryder</p>
			<p>Phil
			Broker (Jason Statham) is een voormalig narcotica-agent, die samen
			met zijn dochter naar een rustig stadje verhuist, om aan zijn
			verleden te ontsnappen. Hij komt echter terecht in een plaats die
			overspoeld wordt door geweld, drugsdealers en de kwaadaardige
			methadonmagnaat Gator (James Franco). Het duurt niet lang voordat
			Phil wederom de strijd aanbindt met de criminaliteit.</p>
			<p>Verenigde Staten<br/>
2013</p></li>
                    <li><a href="film.php"><img src="images/triller%20lijst_html_dfb8c37c5d1e7c9b.gif" name="Afbeelding 9"/><h1>Loft</h1></a>
			<p>Geregisseerd
			door&nbsp;<a href="https://www.moviemeter.nl/director/3573">Erik
			Van Looy</a><br/>
met Karl Urban, Wentworth Miller en James
			Marsden</p>
			<p>Vijf
			getrouwde mannen delen in het grootste geheim een loft waar ze
			stijlvol en in alle rust hun minnaressen en nieuwste veroveringen
			ontvangen. Een prima regeling, tot ze op een winterochtend het
			lijk aantreffen van een jonge vrouw. Geen van hen weet wie de
			vrouw is, waar ze vandaan komt en hoe ze terecht is gekomen in een
			loft waarvan alleen zij de sleutel bezitten. Noodgedwongen
			proberen de vrienden uit te zoeken wat er gebeurd is en waarom,
			maar al vlug beginnen ze elkaar te wantrouwen en zal blijken dat
			ze veel minder van elkaar afweten dan ze oorspronkelijk dachten.</p>
			<p>Belgi&euml;<br/>
2014</p></li>
                </ol>
            </div>
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