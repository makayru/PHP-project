<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $vo=filter_input(INPUT_POST,'voornaam', FILTER_SANITIZE_STRING);
        $tu=filter_input(INPUT_POST,'tussenvoegsel', FILTER_SANITIZE_STRING);
        $ac=filter_input(INPUT_POST,'achternaam', FILTER_SANITIZE_STRING);
        $em=filter_input(INPUT_POST,'email', FILTER_SANITIZE_STRING);
        $te=filter_input(INPUT_POST,'telefoon', FILTER_SANITIZE_STRING);
        $gb=filter_input(INPUT_POST,'geboortedatum', FILTER_SANITIZE_STRING);

    ?>
    <?php
include 'head.html';
ob_start(); 
?>

<?php

if(isset($_POST['voornaam'], $_POST['tussenvoegsel'] , 
$_POST['achternaam'])){
$gb = $_POST['voornaam'];
$ts = $_POST['tussenvoegsel'];
$an = $_POST['achternaam'];
}

include "nav.html";
require "database.php";

if(!isset($_POST["registreer"])){
    header("refresh: 5; URL = registratie.php");
    echo "u moet u eerst aanmelden!
    <br>
    u wordt automatisch terug gestuurd :).";
}

else if($_POST['wachtwoord1']!=$_POST['wachtwoord2']){
    echo "Wachtwoorden komen niet overeen";
}

else if($_POST['wachtwoord1']==$_POST['wachtwoord2'])
{
    try {
        $sQuery = "SELECT * FROM klant WHERE email = :email";
        $oStmt = $db ->prepare($sQuery);
        $oStmt->bindValue(':email',$_POST['email']);
        $oStmt->execute();
        if($oStmt->rowCount()==1){
            header('refresh: 3; url=inlog.php');
            echo"dit email is al gekoppeld aan een account!";
        }
        else{
            $query = $db->prepare("INSERT INTO klant (voornaam, tussenvoegsel, achternaam, email, telefoon, geboortedatum, wachtwoord, beheer) VALUES (:voornaam, :tussenvoegsel, :achternaam, :email, :telefoon, :geboortedatum, :wachtwoord, 'nee')"); 
            $query->bindValue(':voornaam', $vo); 
            $query->bindValue(':tussenvoegsel', $tu); 
            $query->bindValue(':achternaam', $ac); 
            $query->bindValue(':email', $em); 
            $query->bindValue(':telefoon', $te); 
            $query->bindValue(':geboortedatum', $ge); 
            $query->bindValue(':wachtwoord', $ww=password_hash($_POST['wachtwoord1'], PASSWORD_DEFAULT));

            $query -> execute();
            echo "hallo $gb $ts $an";
        }
    
    } catch(PDOException $e) {
        die("Error!: ". $e->getMessage());
    }

    
}




?>
</body>
</html>