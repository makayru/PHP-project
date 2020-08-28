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
        witdh: 100%;
    }
</style>

<body>

    <?php
    require "database.php";
    ?>

    <?php
    try {
        $query = $db->prepare("SELECT COUNT(productenid), productenid 
            FROM `reservering` 
            WHERE productenid = 6");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        echo "<table>";
        echo "<tr>";
        echo "<th> productenid </th>";
        echo "<th> aantal keren gereserveerd</th>";

        echo "</tr>";
        foreach ($result as $data) {
            echo "<tr>";
            echo "<td>" . $data["productenid"] . "</td>";
            echo "<td>" . $data["COUNT(productenid)"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } catch (PDOException $e) {
        die("Error!: " . $e->getMessage());
    }


    ?>
</body>

</html>