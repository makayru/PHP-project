<?php
require('database.php');
session_start();
    if(isset($_POST ['inlog'])){
        try{
            $sQuery = "SELECT * FROM klant WHERE email = :email";
            $oStmt = $db ->prepare($sQuery);
            $oStmt->bindValue(':email',$_POST['email']);
            $oStmt->execute();
            if($oStmt->rowCount()==1){
                

                $rij = $oStmt->fetch(PDO:: FETCH_ASSOC);

                $em=filter_input(INPUT_POST,'email', FILTER_SANITIZE_STRING);
                $wa=filter_input(INPUT_POST,'wachtwoord', FILTER_SANITIZE_STRING);

                if(password_verify($_POST['wachtwoord1'], $rij['wachtwoord'])){
                    $_SESSION['klantid'] = $rij['klantid'];
                    $_SESSION['voornaam'] = $rij['voornaam'];
                    $_SESSION['tussenvoegsel'] = $rij['tussenvoegsel'];
                    $_SESSION['achternaam'] = $rij['achternaam'];
                    $_SESSION['email'] = $rij['email'];
                    $_SESSION['telefoon'] = $rij['telefoon'];
                    $_SESSION['geboortedatum'] = $rij['geboortedatum'];
                    $_SESSION['wachtwoord'] = $rij['wachtwoord'];
                    
                    
                    if($rij['beheer'] == "ja"){
                        $_SESSION['blogin'] = true;
                        header("Location: beheerpagina.php");
                        exit(); 
                    }
                    else{
                        $_SESSION['klogin']= true;
                        header("Location: web.php");
                        exit(); 
                    }   
                }else{
                    header('refresh: 3; url=inlog.php');
                    echo "Inloggen mislukt. controleer uw email en/of wachtwoord.";
                }
    
            }
        } catch(PDOException $e) {
            die("Error!: ". $e->getMessage());
        }
    }
