<header>
        <a href="accueil.php">
            <div id="title_a">
                <div id="logo">
                    <img src="../img/log.png" alt="logo Undek"/>
                    <h1>Undek</h1>
                </div>
                <h2>games</h2>
            </div>
        </a>

        <nav>
            <ul>
                <?php
                    require("est_page.php");
                    est_page("accueil.php","Accueil");
                    est_page("jeux.php","Jeux");
                    est_page("about.php","A propos");
                    est_page("ctc.php","Contact");
                ?>
            </ul>
            <div id="bar">
                <p>Rechercher . . .</p>
            </div>
        </nav>
    </header>