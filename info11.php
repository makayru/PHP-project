<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'head.html'
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
require 'database.php';
?>
<style>
    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #ffff;
    }

    table {
        width: 100%;
    }
</style>

<body>

    <?php
    require 'database.php';
    ?>

    <p class="boeken">Bowling Centrum Spijkenisse </p>

    <?php
        $zo=filter_input(INPUT_POST,'search', FILTER_SANITIZE_STRING);

    if (isset($_POST['Search'])) {
        $str = $_POST['Zoek'];
        $sth = $db->prepare("SELECT aantaluren, etenendrinken, prijsper FROM producten WHERE aantaluren LIKE '$str%'");

        $sth->setFetchMode(PDO::FETCH_OBJ);
        $sth->execute();
        if ($sth->rowCount() > 0) {
            echo "<table>";
            echo "<tr>";
            echo "<th>aantaluren</th>";
            echo "<th>etenendrinken</th>";
            echo "<th>prijsper</th>";
            echo "</tr>";

            while ($row = $sth->fetch()) {

                echo "<tr>";
                echo "<td>" . $row->aantaluren . "</td>";
                echo "<td>" . $row->etenendrinken . "</td>";
                echo "<td>" . $row->prijsper . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "geen gegevens gevonden.";
        }
    }

    ?>


</body>

</html>