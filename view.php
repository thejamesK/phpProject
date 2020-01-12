<?php include_once("server.php");
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
}
if(!isset($_SESSION['username'])) {
    header('Location: login.php');
}

$result = mysqli_query($db, "SELECT * FROM repairs WHERE users_id=".$_SESSION['id']." ORDER BY id DESC");
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>MiedzyTatrami.pl - Lista zgłoszeń</title>
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
            <li><a href="view.php" class="active">Twoje zgłoszenia</a></li>
        </ul>
    </nav>
</header>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="inner">
            <h1 class="major">Twoje zgłoszenia</h1>
            <div class="outer-div">
                <table>
                    <tr>
                        <td>Nazwa zgłoszenia</td>
                        <td>Ilość</td>
                        <td>Opis</td>
                        <td>Zaktualizuj/Usuń</td>
                    </tr>
                <?php
                while($res = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>".$res['name']."</td>";
                    echo "<td>".$res['qty']."</td>";
                    echo "<td>".$res['repair']."</td>";
                    echo "<td><a href=\"edit.php?id=$res[id]\">Edytuj</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Czy na pewno chcesz usunąć zgłoszenie?')\">Usuń</a></td>";
                }
                ?>
                </table>
            </div>
            <div></div>
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