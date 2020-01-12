<?php include_once("server.php");
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
}
if(!isset($_SESSION['username'])) {
    header('Location: login.php');
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>MiedzyTatrami.pl - Dodaj zgłoszenie</title>
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
            <li><a href="add.php" class="active">Nowe zgłoszenie</a></li>
        </ul>
    </nav>
</header>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="inner">
            <h1 class="major">Nowe zgłoszenie</h1>
            <div class="outer-div">
                <form action="add.php" method="post" name="form1">
                    <table width="25%" border="0">
                        <tr>
                            <td>Nazwa zgłoszenia</td>
                            <td><input type="text" name="name"></td>
                        </tr>
                        <tr>
                            <td>Ilość sztuk zgłaszanego przedmiotu</td>
                            <td><input type="text" name="qty"></td>
                        </tr>
                        <tr>
                            <td>Opis zgłoszenia</td>
                            <td><textarea name="repair"></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="Submit" value="Dodaj zgłoszenie"></td>
                        </tr>
                    </table>
                    <?php
                    //including the database connection file

                    if(isset($_POST['Submit'])) {
                        $name = $_POST['name'];
                        $qty = $_POST['qty'];
                        $repair = $_POST['repair'];
                        $userId = $_SESSION['id'];


                        // checking empty fields
                        if(empty($name) || empty($qty) || empty($repair)) {
                            if(empty($name)) {
                                echo "<font color='red'>Nazwa nie może być pusta.</font><br/>";
                            }

                            if(empty($qty)) {
                                echo "<font color='red'>Ilość sztuk nie może być pusta.</font><br/>";
                            }

                            if(empty($repair)) {
                                echo "<font color='red'>Opis usterki nie może być pusty.</font><br/>";
                            }

                            //link to the previous page
                            echo "<br/><a href='javascript:self.history.back();'>Wróć</a>";
                        } else {
                            // if all the fields are filled (not empty)

                            //insert data to database
                            $result = mysqli_query($db, "INSERT INTO repairs(name, qty, repair, users_id) VALUES('$name','$qty','$repair','$userId')");

                            //display success message
                            echo "<font color='green'>Złogszenie dodane";
                            echo "<br/><a href='view.php'>Zobacz zgłoszenie.</a> <br />";
                        }
                    }
                    ?>
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