<?php
session_start();

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
}
?>
<!DOCTYPE HTML>

<html>
<head>
    <title>MiedzyTatrami.pl</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="assets/css/main.css"/>
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css"/>
    </noscript>
    <script src="assets/js/dane.js"></script>
    <script src="assets/js/storage.js"></script>
</head>
<body class="is-preload">

<!-- Sidebar -->
<section id="sidebar">
    <div class="inner">
        <nav>
            <ul>
                <?php  if (!isset($_SESSION['username'])) : ?>
                    <li><a href="login.php">Login/Rejestracja</a></li>
                <?php elseif (isset($_SESSION['username'])) : ?>
                    <li><a href="logout.php">Wyloguj się</a></li>
                <?php endif ?>
                <li><a href="#intro">Witaj pordóżniku</a></li>
                <li><a href="#one">Kim jeśtesmy?</a></li>
                <li><a href="#two">Co robimy?</a></li>
                <?php  if (isset($_SESSION['username'])) : ?>
                <li><a href="add.php">Dodaj zgłoszenie</a></li>
                <li><a href="view.php">Moje zgłoszenia</a></li>
                <?php endif ?>
                <li><a href="generic.php">Galeria</a></li>
                <li><a href="#three">Kontakt</a></li>
            </ul>
        </nav>
    </div>
</section>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Intro -->
    <section id="intro" class="wrapper style1 fullscreen fade-up">
        <div class="inner">

            <h1>
                Miedzy Tatrami
                <?php  if (isset($_SESSION['username'])) : ?>
                    - Witaj <?php echo $_SESSION['username'];?>
                <?php endif ?>
            </h1>
            <p>Wycieczki w Tatry Wysokie na wyciągnięcie ręki!<br/>
                Przeżyj przygodę swojego życia!</p>
            <ul class="actions">
                <li><a href="#one" class="button scrolly">Dowiedz się więcej</a></li>
                <?php  if (!isset($_SESSION['username'])) : ?>
                <li><a href="register.php" class="button scrolly">Zarejestruj się</a></li>
                <?php endif ?>
            </ul>
        </div>
    </section>

    <!-- One -->
    <section id="one" class="wrapper style2 spotlights">
        <section>
            <a href="#" class="image"><img src="images/pic01.jpg" alt="" data-position="center center"/></a>
            <div class="content">
                <div class="inner">
                    <h2>Pasjonaci wypraw górskich</h2>
                    <p>Od kilku, a niektórzy z nas od kilkunastu, lat wyruszamy na piesze wędrówki zdobywać kolejne
                        szczyty Tatr Wysokich.</p>
                    <ul class="actions">
                        <li><a href="generic.php" class="button">Dowiedz się więcej</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section>
            <a href="#" class="image"><img src="images/pic02.jpg" alt="" data-position="top center"/></a>
            <div class="content">
                <div class="inner">
                    <h2>Taternicy</h2>
                    <p>Najlepsi z nas posiadaja "status" Taternika - nabyli odpowiednie umiejętności by móc przekazywac
                        je innym oraz oprowadzać po górach.</p>
                    <ul class="actions">
                        <li><a href="generic.php" class="button">Dowiedz się więcej</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section>
            <a href="#" class="image"><img src="images/pic03.jpg" alt="" data-position="25% 25%"/></a>
            <div class="content">
                <div class="inner">
                    <h2>Podróżnicy</h2>
                    <p>Każdy z nas lubi opuścić gniazdko by zobaczyć coś niesamowitego, to jest ta nutka adrenaliny i
                        pasji, która nas wszystkich połączyła.</p>
                    <ul class="actions">
                        <li><a href="generic.php" class="button">Dowiedz się więcej</a></li>
                    </ul>
                </div>
            </div>
        </section>
    </section>

    <!-- Two -->
    <section id="two" class="wrapper style3 fade-up">
        <div class="inner">
            <h2>Co robimy?</h2>
            <p>Poniżej znajdziesz kilka przykładowych rzeczy którymi się zajmujemy.</p>
            <div class="features">
                <section>
                    <span class="icon major fa-road"></span>
                    <h3>Wyprawy</h3>
                    <p>Szlakami turystycznymi w Tatrzańskim Parku Narodowym. Od "najłatwiejszych" do tych najbardziej
                        wymagających.</p>
                </section>
                <section>
                    <span class="icon major fa-book"></span>
                    <h3>Kursy oraz szkolenia</h3>
                    <p>Jesteś chętny zobaczyć Tatry w zimie ale nie wiesz czym są raki lub czekan? I nie masz zielonego
                        pojecia jak się za to zabrać? Nic prostszego! Nasza wykwalifikowana kadra nauczy Cię wszystkiego
                        i wybierzecie się na zdobywanie jednego ze szczytów zimą!</p>
                </section>
                <section>
                    <span class="icon major fa-cogs"></span>
                    <h3>Sprzęt</h3>
                    <p>Nie posiadasz własnego sprzętu potrzebnego na wyprawę? Nic się nie stało! Pomożemy dobrać sprzęt, który następnie możesz u nas wypożyczyć!</p>
                </section>
                <section>
                    <span class="icon major fa-bookmark"></span>
                    <h3>Przekazywanie wiedzy</h3>
                    <p>Jeżeli chciałbyś dowiedzieć się wiecej o szlakach istniejących w Tatrach, co czwartek organizowane są wieczorowe wykłady, na których poznasz ciekawostki o wszystkich szlakach w Tatrzańskim Parku Narodowym!</p>
                </section>
                <section>
                    <span class="icon major fa-chain"></span>
                    <h3>Pomoc przy organizacji wypraw</h3>
                    <p>Chciałbyś wybrać się na wyprawę, ale nie wiesz jak zaprojektować trasę? Nie ma problemu, korzystając z naszej wiedzy wybierzemy optymalną drogę dla Ciebie - oczywiście zgodą z Twoimi przeferencjami!</p>
                </section>
                <section>
                    <span class="icon major fa-cog"></span>
                    <h3>Konserwacja i serwis sprzętu</h3>
                    <p>Potrzebujesz naostrzyć raki lub czekan? Zapraszamy do naszego serwisu, który z pełnym profesjonalizem podejmie się każdego zadania!</p>
                </section>
            </div>
            <ul class="actions">
                <li><a href="generic.php" class="button">Dowiedz się więcej</a></li>
            </ul>
        </div>
    </section>

    <!-- Three -->
    <section id="three" class="wrapper style1 fade-up">
        <div class="inner">
            <h2>Skontaktuj się z nami</h2>
            <p>Chcesz się wybrać na wycieczke lub nurtuje Cię jakieś pytanie? Pisz do nas śmiało!</p>
            <div class="split style1">
                <section>
                    <form method="post" action="mailto:jakub.michal.krawczyk@gmail.com" onsubmit="return pokazDane();" autocomplete="on">
                        <div class="fields">
                            <div class="field half">
                                <label for="name">Imię</label>
                                <input type="text" name="name" id="name" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" required/>
                            </div>
                            <div class="field half">
                                <label for="email">E-mail</label>
                                <input type="email" name="email" id="email" required/>
                            </div>
                            <div class="field">
                                <label>Temat</label>
                                <input type="radio" id="wycieczka" name="temat" value="Wycieczka" required>
                                <label for="wycieczka">Wycieczka</label>
                                <input type="radio" id="serwis" name="temat" value="Serwis" required>
                                <label for="serwis">Serwis</label>
                                <input type="radio" id="zakwaterowanie" name="temat" value="Zakwaterowanie" required>
                                <label for="zakwaterowanie">Zakwaterowanie</label>
                                <input type="radio" id="sprzet" name="temat" value="Sprzet" required>
                                <label for="sprzet">Sprzęt</label>
                            </div>
                            <div class="field">
                                <label for="message">Wiadomość</label>
                                <textarea name="message" id="message" rows="5" required></textarea>
                            </div>
                            <div class="field">
                                <input type="checkbox" id="regulamin" name="regulamin" required>
                                <label for="regulamin">Zapoznałem się z regulaminem</label>
                                <input type="checkbox" id="not-robot" name="regulamin" required>
                                <label for="not-robot">Nie jestem robotem</label>
                            </div>
                        </div>
                        <ul class="actions">
                            <li><input type="submit" value="Wyslij"/></li>
                            <li><input type="reset" value="Reset" /></li>
                        </ul>
                    </form>
                    <ul class="actions">
                        <li><button name="save" onclick="saveToSession()">Zapisz</button></li>
                        <li><button name="load" onclick="loadFromSession()">Odczytaj</button></li>
                        <li><button name="clear" onclick="sessionStorage.clear()">Wyczyść</button></li>
                    </ul>
                    <div id="dane" class="field"> </div>
                </section>
                <section>
                    <ul class="contact">
                        <li>
                            <h3>Adres</h3>
                            <span>Toporowa Cyrhla #numer<br/>
											Zakopane, 34-500<br/>
											Polska</span>
                        </li>
                        <li>
                            <h3>E-mail</h3>
                            <a href="#">kontakt@miedzytatrami.pl</a>
                        </li>
                        <li>
                            <h3>Telefon</h3>
                            <span>+48 111 111 111</span>
                        </li>
                        <li>
                            <h3>Social</h3>
                            <ul class="icons">
                                <li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
                                <li><a href="http://facebook.com/warunki" class="fa-facebook"><span class="label">Facebook</span></a></li>
                                <li><a href="http://instagram.com/aktualne_warunki" class="fa-instagram"><span class="label">Instagram</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </section>

</div>

<!-- Footer -->
<footer id="footer" class="wrapper style1-alt">
    <div class="inner">
        <ul class="menu">
            <li>&copy; MiedzyTatrami.pl Wszelkie prawa zastrzeżone</li>
            <li>Design: Jakub Krawczyk</li>
        </ul>
    </div>
</footer>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>