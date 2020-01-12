<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Zaloguj się w MiedzyTatrami.pl</title>
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
            <li><a href="login.php" class="active">Login</a></li>
        </ul>
    </nav>
</header>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="inner">
            <h1 class="major">Wylogowałeś się :)</h1>
            <div class="outer-div">
                <?php
                session_destroy();
                echo '<a href="index.php">Wróć do strony głównej</a>'; ?>
            </div>
            <div class="clearing"></div>
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