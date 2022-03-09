<?php
session_start();
if ($_SESSION['auth'] !== true)
{
    header("Location: /index.php");
}
?>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/header.php'; ?>
<h1><?=titlesPages($mainMenu) . '  ' . $_SESSION['login']?></h1>

<div>
    <ul>
        <?php user_meta();?>
    </ul>
</div>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/footer.php'; ?>