<?php
if(!isset($_SESSION['blogin']) || $_SESSION['blogin'] == false){
header('location: inlog.php');
exit();
}
?>