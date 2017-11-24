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
        <div id="content" style="background-image: url(images/1172.jpg); background-size: cover;">
            <article id="Series">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/1172.jpg?1510131863" alt="The Bridge" />
                <iframe width="800" height="400" src="https://www.youtube.com/embed/PR92ohCQXeU?rel=0" frameborder="0" allowfullscreen></iframe>
                <div class="knoppen">
                    <span class="merlin"><a href="merlin_plus1.php" title="Voeg toe aan selectie om samen te kijken"><img src="images/Kiekn%20logo.png" class="logo_kiekn">Samen Kiekn</a></span>
                </div>
                <h1>The Bridge                             <span class="year">(2011-..)</span></h1>
                        <div class="info">
                    <span class="kiekn_vote kiekn_vote5">4,7</span>
<p>
The Bridge (2011) is een Deense/Zweedse dramaserie van de zender SVT. De serie ging in première op 21 september 2001.

Wanneer op de Øresundbrug tussen Zweden en Denemarken een lijk gevonden wordt, dwingt deze spectaculaire moord de Zweedse en Deense politie tot een nauwe samenwerking.

Gruwelijke gebeurtenissen blijven elkaar opvolgen... De Deense agent Martin Rohde (Kim Bodnia - The Killing, Those Who Kill) en de Zweedse Saga Norén (Sofia Helin - Beck) gaan de uitdaging met frisse tegenzin aan.
</p></div>
               <fieldset id="acteurs">
                   <legend><h4>Acteurs</h4></legend>
<ul style="list-style: none;"><li><img src="https://cdn.myseries.tv/img/character/normal/118777.jpg?1510131905"><br/>
<strong>Sofia Helin</strong> <br/> Saga Norén

</li>
<li><img src="https://cdn.myseries.tv/img/character/normal/118778.jpg?1510131905"><br/>
<strong>Kim Bodnia</strong> <br/> Martin Rohde

</li>
<li><img src="https://cdn.myseries.tv/img/character/normal/120283.jpg?1510131905"><br/>
<strong>Christian Hillborg</strong> <br/> Daniel Ferbe

</li>
<li><img src="https://cdn.myseries.tv/img/character/normal/120280.jpg?1510131905"><br/>
<strong>Emil Birk Hartmannn</strong> <br/> August Rohde

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