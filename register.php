<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Zarejestruj się w MiedzyTatrami.pl</title>
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
            <li><a href="login.php" class="active">Rejestracja</a></li>
        </ul>
    </nav>
</header>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="inner">
            <h1 class="major">Zarejestruj się</h1>
            <div class="outer-div">
                <form method="post" action="register.php">
                    <?php include('errors.php'); ?>
                    <div class="fields">
                        <label>Login</label>
                        <input type="text" name="username" value="<?php echo $username; ?>">
                    </div>
                    <div class="fields">
                        <label>Email</label>
                        <input type="email" name="email" value="<?php echo $email; ?>">
                    </div>
                    <div class="fields">
                        <label>Hasło</label>
                        <input type="password" name="password_1">
                    </div>
                    <div class="fields">
                        <label>Powtórz hasło</label>
                        <input type="password" name="password_2">
                    </div>
                    <div class="fields">
                        <button type="submit" class="btn" name="reg_user">Zarejestruj się!</button>
                    </div>
                    <p>
                        Jesteś już naszym użytkownikiem? <a href="login.php">Zaloguj się!</a>
                    </p>
                </form>
                <?php echo '<a href="index.php">Wróć do strony głównej</a>'; ?>
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
</body>
</html>