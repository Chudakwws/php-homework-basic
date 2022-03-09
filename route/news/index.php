<?php
session_start();
if ($_SESSION['auth'] !== true)
{
    header("Location: /index.php");
}
?>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/header.php'; ?>
<h1><?=titlesPages($mainMenu)?></h1>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/footer.php'; ?>