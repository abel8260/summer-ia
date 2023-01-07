<?php

session_start();
$tech0 = htmlspecialchars($_GET['tech0']);
$_SESSION['tag_search']= $tech0;
header('location: search.php'); 
?>