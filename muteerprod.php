<!DOCTYPE html>
<html lang="en">
<head>
<?php
include("head.html");
?>
</head>
<body>
<?php
include("bnav.php");
?>
</body>
</html>

<?php
if(isset($_POST["wijzig"])){
        $sQuery = "UPDATE menu SET  inhoudmenu = :inhoudmenu, prijs = :prijs WHERE menuid = :menuid";
        $oStmt = $db ->prepare($sQuery);
        $oStmt->bindValue(':menuid', $_POST['menuid']);
        $oStmt->bindValue(':inhoudmennu', $_POST['inhoudmenu']);
        $oStmt->bindValue(':prijs', $_POST['prijs']);
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
        $oStmt->bindValue(':inhoudmennu', $_POST['inhoudmenu']);
        $oStmt->bindValue(':prijs', $_POST['prijs']);
        $oStmt->execute();
    }
?>