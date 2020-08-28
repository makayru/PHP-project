<?php
require('database.php');
include('head.html');
session_start();
?>
<?php

if ($_SESSION['reserveren'] == "reserveren1") {
    $reserveernr = 1;
    echo "weet u zeker dat u dat u de volgende reservering wilt maken?:";
    echo "<br>";
    echo "1 uur Bowlen. Inclusief eten en drinken";
} else if ($_SESSION['reserveren'] == "reserveren2") {
    $reserveernr = 2;
    echo "weet u zeker dat u dat u de volgende reservering wilt maken?:";
    echo "<br>";
    echo "1 uur Bowlen. exclusief eten en drinken";
} else if ($_SESSION['reserveren'] == "reserveren3") {
    $reserveernr = 3;
    echo "weet u zeker dat u dat u de volgende reservering wilt maken?:";
    echo "<br>";
    echo "2 uur Bowlen. exclusief eten en drinken";
} else if ($_SESSION['reserveren'] == "reserveren4") {
    $reserveernr = 4;
    echo "weet u zeker dat u dat u de volgende reservering wilt maken?:";
    echo "<br>";
    echo "2 uur Bowlen. Inclusief eten en drinken";
} else if ($_SESSION['reserveren'] == "reserveren5") {
    $reserveernr = 5;
    echo "weet u zeker dat u dat u de volgende reservering wilt maken?:";
    echo "<br>";
    echo "4 uur Bowlen. Inclusief eten en drinken";
} else if ($_SESSION['reserveren'] == "reserveren6") {
    $reserveernr = 6;
    echo "weet u zeker dat u dat u de volgende reservering wilt maken?:";
    echo "<br>";
    echo "4 uur Bowlen. Inclusief eten en drinken";

    
}
?>

<form method="post">
    <input type="submit" name="confirmed4" value="Ja">
</form>

<?php
if (isset($_POST["confirmed4"])) {

    try{

    
    $sQuery = "INSERT INTO reservering (klantid, aantalpersonen, datum, tijd, productenid) VALUES(:klantid, :aantalpersonen, :datum, :tijd, :productenid)";
    $sQuery = $db->prepare($sQuery);
    $sQuery->bindValue(':aantalpersonen', $_SESSION['aantalpersonen']);
    $sQuery->bindValue(':datum', $_SESSION['datum']);
    $sQuery->bindValue(':tijd', $_SESSION['tijd']);
    $sQuery->bindValue(':klantid', $_SESSION['klantid']);
    $sQuery->bindValue(':productenid', $reserveernr);
    $sQuery->execute();
    }catch(PDOException $e) {
        die("Error!: ". $e->getMessage());
}
echo"<div class='alert alert-success'>
<strong>Gelukt!</strong> U heeft gereserveerd! <a href='web.php' class='alert-link'>klik hier</a> om terug te gaan naar de hoofdpagina.
</div>";
} else {
    if (isset($_POST['confirmed'])) {
        $_SESSION['aantalpersonen'] = $_POST['aantalpersonen'];
        $_SESSION['datum'] = $_POST['datum'];
        $_SESSION['tijd'] = $_POST['tijd']; 
    }
}

?>