<?php
//including the database connection file
include("server.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result=mysqli_query($db, "DELETE FROM repairs WHERE id=$id");

//redirecting to the display page (view.php in our case)
header("Location:view.php");
?>
