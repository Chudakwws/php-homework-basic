<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

include_once $_SERVER['DOCUMENT_ROOT'].'/src/core.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="/styles.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <title>Project - ведение списков</title>
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
</head>

<body>
    
    <?php
    if (isset($_SESSION['auth']) and $_SESSION['auth'] == true)
    {
        include $_SERVER['DOCUMENT_ROOT'].'/include/authorization_bar.php';
    }
    ?>

    

    <div class="header">
    	<div class="logo"><img src="/i/logo.png" alt="Project"></div>
    	<div class="author">Автор: <span class="author__name">Stepanenko Vladimir Vladimirovich</span></div>
    </div>

    <div class="clear">
        <?php showMenu($mainMenu) ?>
    </div>
    
   