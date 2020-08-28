<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require 'inlogcontrolebeheer.php';
?>

<head>
    <?php
    include 'head.html';
    ?>
</head>

<body>
<style> 
input{
    border-radius: 0px;
}

.sub{
width: 80%;
}
</style>



    <?php
    include 'bnav.php';
    require 'database.php';
    ?>


<?php

$inhoudmenu = filter_input(INPUT_POST, "inhoudmenu",
                                FILTER_SANITIZE_STRING);
$prijs = filter_input(INPUT_POST, "prijs",
                                FILTER_SANITIZE_STRING);


if(isset($_POST["wijzig"])){
        $sQuery = "UPDATE menu SET  inhoudmenu = :inhoudmenu, prijs = :prijs WHERE menuid = :menuid";
        $oStmt = $db ->prepare($sQuery);
        $oStmt->bindValue(':menuid', $_POST['menuid']);
        $oStmt->bindValue(':inhoudmenu', $inhoudmenu);
        $oStmt->bindValue(':prijs', $prijs);
        $oStmt->execute();
    }
    if(isset($_POST["wis"])){
        $sQuery = "DELETE FROM menu WHERE menuid = :menuid";
        $oStmt = $db->prepare($sQuery);
        $oStmt->bindValue(':menuid', $_POST['menuid']);
        $oStmt->execute();
    }

    if(isset($_POST["nieuw"])){
        $sQuery = "INSERT INTO menu (menuid, inhoudmenu, prijs) VALUES(:menuid, :inhoudmenu, :prijs)";
        $oStmt = $db->prepare($sQuery);
        $oStmt->bindValue(':menuid', $_POST['menuid']);
        $oStmt->bindValue(':inhoudmenu', $inhoudmenu);
        $oStmt->bindValue(':prijs', $prijs);
        $oStmt->execute();
    }
?>
    <?php
    echo "<h1>menu muteren</h1>";
    $sQuery = "SELECT * FROM menu";
    $oStmt = $db->prepare($sQuery);
    $oStmt->execute();

    echo "<div class='dbcontainer'>";
    echo "<table class='table'  border'1'>";
    echo "<thead>";
    echo "<td> menuid</td>";
    echo "<td> inhoudmenu</td>";
    echo "<td> prijs</td>";
    echo "<td colspan='2'> Actie</td>";
    echo "</thead>";
    while ($rij = $oStmt->fetch(PDO::FETCH_ASSOC)) {
    
    ?>
        <form method="post">
            <tr>
                <td><?php echo ($rij['menuid']); ?><input type="hidden" name="menuid" value="<?php echo ($rij['menuid']); ?>"></td>
                <td><input type="text" name="inhoudmenu" value="<?php echo ($rij['inhoudmenu']); ?>"></td>
                <td><input class="" type="text" name="prijs" value="<?php echo ($rij['prijs']); ?>"></td>
                <td><input class="btn btn-light" type="submit" name="wijzig" value="wijzig"></td>
                <td><input class="btn btn-light" type="submit" name="wis" value="wis" onclick="return confirm('<?php echo ($rij['inhoudmenu']); ?> wordt verwijderd, weet u het zeker?')"></td>
            </tr>
        </form>
    <?php
    }
    ?>
    <form method="post">
        <tr>
            <td><input type="hidden" name="menuid" value="" required></td>
            <td><input type="text" name="inhoudmenu" value="" required></td>
            <td><input type="text" name="prijs" value="" required></td>
            <td colspan='2'><input type="submit" name="nieuw" value="nieuw"></td>
        </tr>
    </form>

    




</body>

</html>