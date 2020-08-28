<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "head.html";
    ?>
</head>
<?php
session_start();
if (isset($_SESSION['blogin'])) {
    include("bnav.php");
} elseif (isset($_SESSION['klogin'])) {
    include("knav.php");
} else {
    include("nav.html");
}
?>


<?php
require "database.php";
?>

<body>
    <?php
    $_SESSION['reserveren'] = $_POST['reserveren'];
    $aa=filter_input(INPUT_POST,'aantalpersonen', FILTER_SANITIZE_STRING);
    ?>
    <form class="formst  text-lowercase text-center position-absolute d-block" method="POST" action="resverwerk.php">



        <div style="white-space: pre">
            datum:
            <input type="date" name="datum" required pattern="\d{4}-\d{2}-\d{2}" required>
        </div>

        <div style="white-space: pre">
            tijd:
            <input type="time" name="tijd" min="09:00" max="19:00" required>
        </div>

        <div style="white-space: pre">
            aantal personen:
            <input type="number" name="aantalpersonen" min="1" max="8">
        </div>

        <div style="white-space: pre">
            <input type="submit" name="confirmed" value="Nu Reserveren">
        </div>
    </form>


</body>

</html>