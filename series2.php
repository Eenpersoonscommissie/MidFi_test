<!doctype HTML>
<html>

<head>
    <title>Kiekn, spreek af om films of series te kijken</title>
    <link rel="stylesheet" href="icomoon.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(document).ready(function() {

            $('ul.tabs li').click(function() {
                var tab_id = $(this).attr('data-tab');

                $('ul.tabs li').removeClass('current');
                $('.tab-content').removeClass('current');

                $(this).addClass('current');
                $("#" + tab_id).addClass('current');
            })

        })
    </script>
</head>

<body>
    <header>
		<?php include 'nav2.php';?>
    </header>
    <main>
        <div id="content" style="background-image: url(images/GoT_bg.jpg); background-size: cover;">
            <article id="Series">
            <img src="https://cdn.myseries.tv/img/serie/banner/normal/401.jpg?1496396353" alt="Game of Thrones" />
               <iframe width="800" height="400" src="https://www.youtube.com/embed/1Mlhnt0jMlg?rel=0" frameborder="0" allowfullscreen></iframe>
                <div class="knoppen">
                    <span class="merlin"><a href="merlin_plus1.php" title="Voeg toe aan selectie om samen te kijken"><img src="images/Kiekn%20logo.png" class="logo_kiekn">Samen Kiekn</a></span>
                </div>
                <h1>Game of Thrones                             <span class="year">(2011-..)</span></h1>
                        <div class="info">
                    <span class="kiekn_vote kiekn_vote5">4,9</span>
<p>
Game of Thrones is een Amerikaanse serie van de zender HBO. De serie ging in première op 17 april 2011.

Game of Thrones is een HBO-serie gebaseerd op de fantasyboeken ''Een Lied van IJs en Vuur'' van George R. R. Martin. Het gaat over een machtsstrijd om de ijzeren troon tussen zeven verschillende adellijke families op het fictieve continent Westeros. Robert Baratheon is koning van Westeros, maar al snel ontdekt hij dat zijn troon zeer gewild is onder de adellijke families. Om het allemaal nog erger te maken staat er in het Noorden een oud kwaad op, klaar om het verscheurde Westeros binnen te vallen. Volgens George R. R. Martin, die meewerkte aan de serie, volgt de pilot de verhaallijn van de boeken nauwkeurig.     
</p></div>
               <fieldset id="acteurs">
                   <legend><h4>Acteurs</h4></legend>
<ul style="list-style: none;"><li><img src="https://cdn.myseries.tv/img/character/normal/89286.jpg?1510168513"><br/>
<strong>Peter Dinklage</strong> <br/> Tyrion Lannister
</li>
<li><img src="https://cdn.myseries.tv/img/character/normal/105432.jpg?1510168514"><br/>
<strong>Kit Harington</strong> <br/> Jon Snow
</li>
<li><img src="https://cdn.myseries.tv/img/character/normal/105425.jpg?1510168514"><br/>
<strong>Maisie Williams</strong> <br/> Arya Stark
</li>
<li><img src="https://cdn.myseries.tv/img/character/normal/225302.jpg?1510168512"><br/>
<strong>Emilia Clarke</strong> <br/> Daenerys Targaryen
    </li>
              <li>...</li></ul>
               </fieldset>
                </article>
        </div>
  <aside>
    <a href="merlin_plus.php" title="Samen Kiekn" id="merlin"><h2>Samen Kiekn</h2><p>Spreek af om samen te kijken!</p></a>
			<?php include 'aside_tv.php';?>
			<?php include 'aside_films.php';?>
		</aside>     
    </main>
		<?php include 'footer.php';?>
</body>

</html>