<html>
<head>
    <title>Kiekn, spreek af om films of series te kijken</title>
    <link href="http://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.7.2.js">
    <link rel="stylesheet" href="icomoon.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
		<?php include 'nav2.php';?>
    </header>
    <main>
    <div class="overlay">
        <div class="send_fb">
             <h1>Uitnodiging verstuurd</h1>
            <form method="post" action="form-handler.php">
              <div>
                  <img src="images/Kiekn%20logo.png" width="100px" style="float: left; margin-right: 1em;"><p style="min-height: 3em; font-weight: bold;">Je uitnodiging is verzonden</p>
              </div>
            </form>
              
              <div class="submit">
                <a href="index1.php"><input type="submit" value="Terug" id="submit" /></a>
              </div>
        </div>
    </div>
		<div id="content">
			<article>
				<figure class="articleimg">
					<img src="images/Blade-Runner-1982-SS14.jpg" alt="Blade Runner">
					<figcaption>
						<h1>Blade Runner</h1>
						<ul><li>1982</li><li>Ridley Scott</li><li>Science Fiction</li></ul>
					</figcaption>
				</figure>
				<h2 style="margin-bottom: 0;">Film van de dag</h2>            
				<a href="film_tv.php"><h1>Blade Runner, the director's cut</h1></a>
				<p><a href="film_tv.php"><img src="images/blade_runner_hero1.jpg" class="cover"></a>In de bioscoop draait nu al een paar weken de nieuwe <a href="film1.php">Blade Runner 2049</a>. Maar wil je echt genieten van die film, dan moet je eigenlijk het origineel van <a href="#" title="Zoek meer films van Ridley Scott" class="zoeklink-acteur">Ridley Scott</a> wel kennen. En zelfs als je deze film, met <a href="#" title="Zoek meer films van Harrison Ford" class="zoeklink-acteur">Harrison Ford</a> en <a href="#" title="Zoek meer films van Rutger Hauer" class="zoeklink-acteur">Rutger Hauer</a> (in &eacute;&eacute;n van zijn beste rollen), al kent dan kan het geen kwaad om de boel nog eens op te frissen. En omdat ook in de nieuwe film alles draait om het verschil tussen mensen en replicants is dit vandaag de film van de dag.<br/>
				<span class="timedetails">Morgen om <strong>20:30</strong> op <strong>RTL4</strong></span></p>
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