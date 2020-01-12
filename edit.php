<?php include_once("server.php");
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
}
if(!isset($_SESSION['username'])) {
    header('Location: login.php');
}
if(isset($_POST['update']))
{
$id = $_POST['id'];

$name = $_POST['name'];
$qty = $_POST['qty'];
$repair = $_POST['repair'];
?>

    <?php
    // checking empty fields
    if(empty($name) || empty($qty) || empty($repair)) {
        if(empty($name)) {
            echo "<font color='red'>Nazwa nie może być pusta.</font><br/>";
        }

        if(empty($qty)) {
            echo "<font color='red'>Ilość nie może być pusta.</font><br/>";
        }

        if(empty($repair)) {
            echo "<font color='red'>Opis nie może być pusty.</font><br/>";
        }
    } else {
        //updating the table
        $result = mysqli_query($db, "UPDATE repairs SET name='$name', qty='$qty', repair='$repair' WHERE id=$id");

        //redirectig to the display page. In our case, it is view.php
        header("Location: view.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($db, "SELECT * FROM repairs WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
    $name = $res['name'];
    $qty = $res['qty'];
    $repair = $res['repair'];
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>MiedzyTatrami.pl - Edytuj zgłoszenie</title>
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
            <li><a href="edit.php" class="active">Edytuj zgłoszenie</a></li>
        </ul>
    </nav>
</header>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="inner">
            <h1 class="major">Edytuj zgłoszenie</h1>
            <div class="outer-div">
                <form name="form1" method="post" action="edit.php">
                    <table border="0">
                        <tr>
                            <td>Nazwa zgłoszenia</td>
                            <td><input type="text" name="name" value="<?php echo $name;?>"></td>
                        </tr>
                        <tr>
                            <td>Ilość sztuk zgłaszanego przedmiotu</td>
                            <td><input type="text" name="qty" value="<?php echo $qty;?>"></td>
                        </tr>
                        <tr>
                            <td>Opis zgłoszenia</td>
                            <td><textarea name="repair" value="<?php echo $repair;?>"> </textarea></td>
                        </tr>
                        <tr>
                            <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                            <td><input type="submit" name="update" value="Zaktualizuj"></td>
                        </tr>
                    </table>
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
