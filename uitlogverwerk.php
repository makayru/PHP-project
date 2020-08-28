<?php
include 'head.html';
require('database.php');
session_start();
session_unset();
header('refresh: 1; url=inlog.php');
echo "<div class='alert alert-dark' role='alert'>
    Bezig met uitloggen.
  </div>";
?>