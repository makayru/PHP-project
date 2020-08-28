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

    <?php
    try {
        $query = $db->prepare("SELECT * 
        FROM klant 
        INNER JOIN reservering
        ON klant.klantid = reservering.klantid
        WHERE geboortedatum > '2000-01-01' AND datum > '0000-00-00'");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        echo "<table>";
        echo "<tr>";
        echo "<th> voornaam </th>";
        echo "<th> tussenvoegsel </th>";
        echo "<th> achternaam </th>";
        echo "<th> email </th>";
        echo "<th> telefoon </th>";
        echo "<th> geboortedatum </th>";
        echo "</tr>";
        foreach ($result as $data) {
            echo "<tr>";
            echo "<td>" . $data["voornaam"] . "</td>";
            echo "<td>" . $data["tussenvoegsel"] . "</td>";
            echo "<td>" . $data["achternaam"] . "</td>";
            echo "<td>" . $data["email"] . "</td>";
            echo "<td>" . $data["telefoon"] . "</td>";
            echo "<td>" . $data["geboortedatum"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } catch (PDOException $e) {
        die("Error!: " . $e->getMessage());
    }


    ?>
</body>

</html>