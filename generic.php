<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>MiedzyTatrami.pl - Galeria</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link href="dist/simplelightbox.css" rel="stylesheet">
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">

<!-- Header -->
<header id="header">
    <a href="index.php" class="title">MiedzyTatrami.pl</a>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="generic.php" class="active">Galeria</a></li>
        </ul>
    </nav>
</header>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="inner">
            <h1 class="major">Galeria</h1>
            <div class="outer-div">
                <div class="gallery">
                    <a href="images/pic01.jpg"><img src="thumbs/pic01.jpg" alt="" title=""/></a>
                    <a href="images/pic02.jpg"><img src="thumbs/pic02.jpg" alt="" title=""/></a>
                    <a href="images/pic03.jpg"><img src="thumbs/pic03.jpg" alt="" title=""/></a>
                    <a href="images/pic04.jpeg"><img src="thumbs/pic04.jpg" alt="" title=""/></a>
                    <a href="images/pic05.jpg"><img src="thumbs/pic05.jpg" alt="" title=""/></a>
                    <a href="images/pic06.jpg"><img src="thumbs/pic06.jpg" alt="" title="" /></a>
                    <a href="images/pic07.jpg"><img src="thumbs/pic07.jpg" alt="" title=""/></a>
                    <a href="images/pic08.jpg"><img src="thumbs/pic08.jpg" alt="" title=""/></a>
                    <a href="images/pic09.jpg"><img src="thumbs/pic09.jpg" alt="" title=""/></a>
                </div>
            </div>
            <div class="clearing"></div>
            <div>
                <label>Galeria ukazuje jedne z najpiękniejszych widoków w Tatrach Wysokich jak i niektóre elementy sprzętu górskiego.</label>
                <?php echo '<a href="index.php">Wróć do strony głównej</a>'; ?>
            </div>
        </div>
    </section>

</div>

<!-- Footer -->
<footer id="footer" class="wrapper alt">
    <div class="inner">
        <ul class="menu">
            <li>&copy; MiedzyTatrami.pl Wszelkie prawa zastrzeżone</li><li>Design: Jakub Krawczyk</li>
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
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="dist/simple-lightbox.js"></script>
<script>$('.gallery a').simpleLightbox();</script>
</body>
</html>