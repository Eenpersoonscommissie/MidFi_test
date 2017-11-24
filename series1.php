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
        <div id="content">
            <div id="Series">
                <h1>Series</h1>

            <ul class="tabs">
                <li class="tab-link current" data-tab="tab-1">Algemeen</li>
                <li class="tab-link" data-tab="tab-2">Netflix</li>
                <li class="tab-link" data-tab="tab-3">Videoland</li>
                <li class="tab-link" data-tab="tab-4">TV</li>
                <li class="tab-link" data-tab="tab-5">Verwacht</li>
            </ul>
               
                <div id="tab-1" class="tab-content current">
                    <ol>
                        <li>
                            <a href="series2.php">
        <div class="info">
            <img src="https://cdn.myseries.tv/img/serie/banner/normal/401.jpg?1496396353" alt="Game of Thrones" />
          <div class="title">
              <span itemprop="name">Game of Thrones</span>
                            <span class="year">(2011-..)</span>
                </div>
                    <span class="kiekn_vote kiekn_vote5">4,9</span></div>
            </a>
            </li>

            <li>                           
                            <a href="series4.php">
                <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/1172.jpg" alt="The Bridge (2011)" />
                    <div class="title">
              <span itemprop="name">The Bridge</span>
                        <span class="year">(2011&nbsp;-&nbsp;..)</span>
                    </div>
                    <span class="kiekn_vote kiekn_vote5">4,9</span></div>
            </a>
            </li>
            <li>
                            <a href="series2.php">
                <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/135.jpg?1509076143" alt="Breaking Bad" />
                    <div class="title">
              <span itemprop="name">Breaking Bad</span>
                        <span class="year">(2008-2013)</span>
                    </div>
                    <span class="kiekn_vote kiekn_vote5">4,8</span></div>
            </a>
            </li>

            <li>
                            <a href="series4.php">
                <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/232.jpg?1506765606" alt="Sons of Anarchy" />
                    <div class="title">
              <span itemprop="name">Sons of Anarchy</span>
                        <span class="year">(2008-2014)</span>
                    </div>
                    <span class="kiekn_vote kiekn_vote5">4,8</span></div>
            </a>
            </li>

            <li>
                            <a href="series2.php">
                <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/153.jpg?1489232346" alt="The Vampire Diaries" />
                    <div class="title">
              <span itemprop="name">The Vampire Diaries</span>
                        <span class="year">(2009-2017)</span>
                    </div>
                    <span class="kiekn_vote kiekn_vote5">4,7</span></div>
            </a>
            </li>

            <li>
                            <a href="series4.php">
                <div class="info">
            <img src="https://cdn.myseries.tv/img/serie/banner/normal/75.jpg?1509658083" alt="The Sopranos" />
                    <div class="title">
              <span itemprop="name">The Sopranos</span>
                        <span class="year">(1999-2007)</span>
                    </div>
                    <span class="kiekn_vote kiekn_vote5">4,7</span></div>
            </a>
            </li>

            <li>
                            <a href="series2.php">
                <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/191.jpg?1483716445" alt="Sherlock" />
                    <div class="title">
              <span itemprop="name">Sherlock</span>
                        <span class="year">(2010-..)</span>
                    </div>
                    <span class="kiekn_vote kiekn_vote5">4,6</span></div>
            </a>
            </li>

            <li>
                            <a href="series4.php">
                <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/238.jpg?1509110784" alt="The Walking Dead" />
                    <div class="title">
              <span itemprop="name">The Walking Dead</span>
                        <span class="year">(2010-..)</span>
                    </div>
                    <span class="kiekn_vote kiekn_vote5">4,5</span></div>
            </a>
            </li>

            <li>
                            <a href="series2.php">
                <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/602.jpg?1501486755" alt="Teen Wolf" />
                    <div class="title">
              <span itemprop="name">Teen Wolf</span>
                        <span class="year">(2011-..)</span>
                    </div>
                    <span class="kiekn_vote kiekn_vote5">4,5</span></div>
            </a>
            </li>

            <li>
                            <a href="series4.php">
                <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/63.jpg?1510088908" alt="Grey&#39;s Anatomy" />
                    <div class="title">
              <span itemprop="name">Grey&#39;s Anatomy</span>
                        <span class="year">(2005-..)</span>
                    </div>
                    <span class="kiekn_vote kiekn_vote4">4,4</span></div>
            </a>
            </li>

            </ol>
        </div>
                <div id="tab-2" class="tab-content">
                    <ol>
                        <li>
                            <a href="series2.php">
        <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/153.jpg?1489232346" alt="The Vampire Diaries" />
          <div class="title">
              <span itemprop="name">Game of Thrones</span>
                            <span class="year">(2011-..)</span>
                </div>
                    <span class="kiekn_vote kiekn_vote5">4,9</span></div>
            </a>
            </li>

            <li>
                            <a href="series4.php">
                <div class="info">
            <img src="https://cdn.myseries.tv/img/serie/banner/normal/75.jpg?1509658083" alt="The Sopranos" />
                    <div class="title">
              <span itemprop="name">Band of Brothers</span>
                        <span class="year">(2001-2001)</span>
                    </div>
                    <span class="kiekn_vote kiekn_vote5">4,9</span></div>
            </a>
            </li>

            <li>
                            <a href="series2.php">
                <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/238.jpg?1509110784" alt="The Walking Dead" />
                    <div class="title">
              <span itemprop="name">Breaking Bad</span>
                        <span class="year">(2008-2013)</span>
                    </div>
                    <span class="kiekn_vote kiekn_vote5">4,8</span></div>
            </a>
            </li>

            <li>
                            <a href="series4.php">
                <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/232.jpg?1506765606" alt="Sons of Anarchy" />
                    <div class="title">
              <span itemprop="name">Sons of Anarchy</span>
                        <span class="year">(2008-2014)</span>
                    </div>
                    <span class="kiekn_vote kiekn_vote5">4,8</span></div>
            </a>
            </li>

            <li>
                            <a href="series2.php">
                <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/83.jpg?1473354490" alt="Band of Brothers" />
                    <div class="title">
              <span itemprop="name">The Vampire Diaries</span>
                        <span class="year">(2009-2017)</span>
                    </div>
                    <span class="kiekn_vote kiekn_vote5">4,7</span></div>
            </a>
            </li>

            <li>
                            <a href="series4.php">
                <div class="info">
            <img src="https://cdn.myseries.tv/img/serie/banner/normal/75.jpg?1509658083" alt="The Sopranos" />
                    <div class="title">
              <span itemprop="name">The Sopranos</span>
                        <span class="year">(1999-2007)</span>
                    </div>
                    <span class="kiekn_vote kiekn_vote5">4,7</span></div>
            </a>
            </li>

            <li>
                            <a href="series2.php">
                <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/191.jpg?1483716445" alt="Sherlock" />
                    <div class="title">
              <span itemprop="name">Sherlock</span>
                        <span class="year">(2010-..)</span>
                    </div>
                    <span class="kiekn_vote kiekn_vote5">4,6</span></div>
            </a>
            </li>

            <li>
                            <a href="series4.php">
                <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/238.jpg?1509110784" alt="The Walking Dead" />
                    <div class="title">
              <span itemprop="name">The Walking Dead</span>
                        <span class="year">(2010-..)</span>
                    </div>
                    <span class="kiekn_vote kiekn_vote5">4,5</span></div>
            </a>
            </li>

            <li>
                            <a href="series2.php">
                <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/602.jpg?1501486755" alt="Teen Wolf" />
                    <div class="title">
              <span itemprop="name">Teen Wolf</span>
                        <span class="year">(2011-..)</span>
                    </div>
                    <span class="kiekn_vote kiekn_vote5">4,5</span></div>
            </a>
            </li>

            <li>
                            <a href="series4.php">
                <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/63.jpg?1510088908" alt="Grey&#39;s Anatomy" />
                    <div class="title">
              <span itemprop="name">Grey&#39;s Anatomy</span>
                        <span class="year">(2005-..)</span>
                    </div>
                    <span class="kiekn_vote kiekn_vote4">4,4</span></div>
            </a>
            </li>

            </ol>
        </div>
                <div id="tab-3" class="tab-content">
                    <ol>
                        <li>
                            <a href="series2.php">
        <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/191.jpg?1483716445" alt="Sherlock" />
          <div class="title">
              <span itemprop="name">Game of Thrones</span>
                            <span class="year">(2011-..)</span>
                </div>
                    <span class="kiekn_vote kiekn_vote5">4,9</span></div>
            </a>
            </li>

            <li>
                            <a href="series4.php">
                <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/135.jpg?1509076143" alt="Breaking Bad" />
                    <div class="title">
              <span itemprop="name">Band of Brothers</span>
                        <span class="year">(2001-2001)</span>
                    </div>
                    <span class="kiekn_vote kiekn_vote5">4,9</span></div>
            </a>
            </li>

            <li>
                            <a href="series2.php">
                <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/232.jpg?1506765606" alt="Sons of Anarchy" />
                    <div class="title">
              <span itemprop="name">Breaking Bad</span>
                        <span class="year">(2008-2013)</span>
                    </div>
                    <span class="kiekn_vote kiekn_vote5">4,8</span></div>
            </a>
            </li>

            <li>
                            <a href="series4.php">
                <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/83.jpg?1473354490" alt="Band of Brothers" />
                    <div class="title">
              <span itemprop="name">Sons of Anarchy</span>
                        <span class="year">(2008-2014)</span>
                    </div>
                    <span class="kiekn_vote kiekn_vote5">4,8</span></div>
            </a>
            </li>

            <li>
                            <a href="series2.php">
                <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/153.jpg?1489232346" alt="The Vampire Diaries" />
                    <div class="title">
              <span itemprop="name">The Vampire Diaries</span>
                        <span class="year">(2009-2017)</span>
                    </div>
                    <span class="kiekn_vote kiekn_vote5">4,7</span></div>
            </a>
            </li>

            <li>
                            <a href="series4.php">
                <div class="info">
            <img src="https://cdn.myseries.tv/img/serie/banner/normal/75.jpg?1509658083" alt="The Sopranos" />
                    <div class="title">
              <span itemprop="name">The Sopranos</span>
                        <span class="year">(1999-2007)</span>
                    </div>
                    <span class="kiekn_vote kiekn_vote5">4,7</span></div>
            </a>
            </li>

            <li>
                            <a href="series2.php">
                <div class="info">
            <img src="https://cdn.myseries.tv/img/serie/banner/normal/401.jpg?1496396353" alt="Game of Thrones" />
                    <div class="title">
              <span itemprop="name">Sherlock</span>
                        <span class="year">(2010-..)</span>
                    </div>
                    <span class="kiekn_vote kiekn_vote5">4,6</span></div>
            </a>
            </li>

            <li>
                            <a href="series4.php">
                <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/238.jpg?1509110784" alt="The Walking Dead" />
                    <div class="title">
              <span itemprop="name">The Walking Dead</span>
                        <span class="year">(2010-..)</span>
                    </div>
                    <span class="kiekn_vote kiekn_vote5">4,5</span></div>
            </a>
            </li>

            <li>
                            <a href="series2.php">
                <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/602.jpg?1501486755" alt="Teen Wolf" />
                    <div class="title">
              <span itemprop="name">Teen Wolf</span>
                        <span class="year">(2011-..)</span>
                    </div>
                    <span class="kiekn_vote kiekn_vote5">4,5</span></div>
            </a>
            </li>

            <li>
                            <a href="series4.php">
                <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/63.jpg?1510088908" alt="Grey&#39;s Anatomy" />
                    <div class="title">
              <span itemprop="name">Grey&#39;s Anatomy</span>
                        <span class="year">(2005-..)</span>
                    </div>
                    <span class="kiekn_vote kiekn_vote4">4,4</span></div>
            </a>
            </li>

            </ol>
        </div>
                <div id="tab-4" class="tab-content">
                    <ol>
                        <li>
                            <a href="series2.php">
        <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/602.jpg?1501486755" alt="Teen Wolf" />
          <div class="title">
              <span itemprop="name">Game of Thrones</span>
                            <span class="year">(2011-..)</span>
                </div>
                    <span class="kiekn_vote kiekn_vote5">4,9</span></div>
            </a>
            </li>

            <li>
                            <a href="series4.php">
                <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/83.jpg?1473354490" alt="Band of Brothers" />
                    <div class="title">
              <span itemprop="name">Band of Brothers</span>
                        <span class="year">(2001-2001)</span>
                    </div>
                    <span class="kiekn_vote kiekn_vote5">4,9</span></div>
            </a>
            </li>

            <li>
                            <a href="series2.php">
                <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/135.jpg?1509076143" alt="Breaking Bad" />
                    <div class="title">
              <span itemprop="name">Breaking Bad</span>
                        <span class="year">(2008-2013)</span>
                    </div>
                    <span class="kiekn_vote kiekn_vote5">4,8</span></div>
            </a>
            </li>

            <li>
                            <a href="series4.php">
                <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/232.jpg?1506765606" alt="Sons of Anarchy" />
                    <div class="title">
              <span itemprop="name">Sons of Anarchy</span>
                        <span class="year">(2008-2014)</span>
                    </div>
                    <span class="kiekn_vote kiekn_vote5">4,8</span></div>
            </a>
            </li>

            <li>
                            <a href="series2.php">
                <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/153.jpg?1489232346" alt="The Vampire Diaries" />
                    <div class="title">
              <span itemprop="name">The Vampire Diaries</span>
                        <span class="year">(2009-2017)</span>
                    </div>
                    <span class="kiekn_vote kiekn_vote5">4,7</span></div>
            </a>
            </li>

            <li>
                            <a href="series4.php">
                <div class="info">
            <img src="https://cdn.myseries.tv/img/serie/banner/normal/75.jpg?1509658083" alt="The Sopranos" />
                    <div class="title">
              <span itemprop="name">The Sopranos</span>
                        <span class="year">(1999-2007)</span>
                    </div>
                    <span class="kiekn_vote kiekn_vote5">4,7</span></div>
            </a>
            </li>

            <li>
                            <a href="series2.php">
                <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/191.jpg?1483716445" alt="Sherlock" />
                    <div class="title">
              <span itemprop="name">Sherlock</span>
                        <span class="year">(2010-..)</span>
                    </div>
                    <span class="kiekn_vote kiekn_vote5">4,6</span></div>
            </a>
            </li>

            <li>
                            <a href="series4.php">
                <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/238.jpg?1509110784" alt="The Walking Dead" />
                    <div class="title">
              <span itemprop="name">The Walking Dead</span>
                        <span class="year">(2010-..)</span>
                    </div>
                    <span class="kiekn_vote kiekn_vote5">4,5</span></div>
            </a>
            </li>

            <li>
                            <a href="series2.php">
                <div class="info">
            <img src="https://cdn.myseries.tv/img/serie/banner/normal/401.jpg?1496396353" alt="Game of Thrones" />
                    <div class="title">
              <span itemprop="name">Teen Wolf</span>
                        <span class="year">(2011-..)</span>
                    </div>
                    <span class="kiekn_vote kiekn_vote5">4,5</span></div>
            </a>
            </li>

            <li>
                            <a href="series4.php">
                <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/63.jpg?1510088908" alt="Grey&#39;s Anatomy" />
                    <div class="title">
              <span itemprop="name">Grey&#39;s Anatomy</span>
                        <span class="year">(2005-..)</span>
                    </div>
                    <span class="kiekn_vote kiekn_vote4">4,4</span></div>
            </a>
            </li>

            </ol>
        </div>
                <div id="tab-5" class="tab-content">
                    <ol>
                        <li>
                            <a href="series2.php">
        <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/232.jpg?1506765606" alt="Sons of Anarchy" />
          <div class="title">
              <span itemprop="name">De Fabeltjeskrant</span>
                            <span class="year">(2018)</span>
                </div></div>
            </a>
            </li>

            <li>
                            <a href="series4.php">
                <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/83.jpg?1473354490" alt="Band of Brothers" />
                    <div class="title">
              <span itemprop="name">Band of Brothers</span>
                        <span class="year">(2001-2001)</span>
                    </div></div>
            </a>
            </li>

            <li>
                            <a href="series2.php">
                <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/135.jpg?1509076143" alt="Breaking Bad" />
                    <div class="title">
              <span itemprop="name">Breaking Bad</span>
                        <span class="year">(2008-2013)</span>
                    </div></div>
            </a>
            </li>

            <li>
                            <a href="series4.php">
                <div class="info">
            <img src="https://cdn.myseries.tv/img/serie/banner/normal/401.jpg?1496396353" alt="Game of Thrones" />
                    <div class="title">
              <span itemprop="name">Sons of Anarchy</span>
                        <span class="year">(2008-2014)</span>
                    </div></div>
            </a>
            </li>

            <li>
                            <a href="series2.php">
                <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/153.jpg?1489232346" alt="The Vampire Diaries" />
                    <div class="title">
              <span itemprop="name">The Vampire Diaries</span>
                        <span class="year">(2009-2017)</span>
                    </div></div>
            </a>
            </li>

            <li>
                            <a href="series4.php">
                <div class="info">
            <img src="https://cdn.myseries.tv/img/serie/banner/normal/75.jpg?1509658083" alt="The Sopranos" />
                    <div class="title">
              <span itemprop="name">The Sopranos</span>
                        <span class="year">(1999-2007)</span>
                    </div></div>
            </a>
            </li>

            <li>
                            <a href="series2.php">
                <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/191.jpg?1483716445" alt="Sherlock" />
                    <div class="title">
              <span itemprop="name">Sherlock</span>
                        <span class="year">(2010-..)</span>
                    </div></div>
            </a>
            </li>

            <li>
                            <a href="series4.php">
                <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/238.jpg?1509110784" alt="The Walking Dead" />
                    <div class="title">
              <span itemprop="name">The Walking Dead</span>
                        <span class="year">(2010-..)</span>
                    </div></div>
            </a>
            </li>

            <li>
                            <a href="series2.php">
                <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/602.jpg?1501486755" alt="Teen Wolf" />
                    <div class="title">
              <span itemprop="name">Teen Wolf</span>
                        <span class="year">(2011-..)</span>
                    </div></div>
            </a>
            </li>

            <li>
                            <a href="series4.php">
                <div class="info">
                <img src="https://cdn.myseries.tv/img/serie/banner/normal/63.jpg?1510088908" alt="Grey&#39;s Anatomy" />
                    <div class="title">
              <span itemprop="name">Grey&#39;s Anatomy</span>
                        <span class="year">(2005-..)</span>
                    </div></div>
            </a>
            </li>

            </ol>
        </div>
        </div>
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