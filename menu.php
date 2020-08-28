<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include "head.html";
    ?>
</head>
<?php
    session_start();
    if(isset($_SESSION['blogin'])){
        include("bnav.php");
    }elseif(isset($_SESSION['klogin'])){
        include("knav.php");
    }else{
        include("nav.html");
    }
    require 'database.php';
?>

<body>
    <?php
     require "database.php";
     ?>

<?php
        try {
            $query = $db->prepare("SELECT * from menu ");
            $query->execute();
            $result = $query->fetchAll (PDO::FETCH_ASSOC);
            echo "<table>"; 
            echo "<tr>";
            echo "<th> inhoudmenu </th>";
            echo "<th>prijs </th>";
     
 
            echo "</tr>";
            foreach($result as $data) {
                echo "<tr>";
                echo "<td>". $data["inhoudmenu"]."</td>";
                echo "<td>". $data["prijs"]."</td>";
   echo "</tr>";
            }
          echo "</table>";
        } catch(PDOException $e) {
            die("Error!: ". $e->getMessage());
        }


    ?>
</body>

</html>