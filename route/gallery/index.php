<?php
session_start();
if ($_SESSION['auth'] !== true)
{
    header("Location: /index.php");
}
?>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/header.php'; ?>

<h1 style="margin-top: 40px;"><?=titlesPages($mainMenu)?></h1>

<?php 
    if(isset($_GET['addForm']) && $_GET['addForm']=='yes')
    {
        include_once $_SERVER['DOCUMENT_ROOT'].'/include/addForm.php';
    }
?>

<form id="removeForm" enctype="multipart/form-data"  method="POST" action="<?php $_SERVER['PHP_SELF']?>" style="margin: 40px 0">
    <div id="image" style="color: grey;"><?php showGallery($cdir);?></div>
    <input id="delete" style="cursor: pointer;" type="submit" value="Удалить" name="delete">
    <input id="deleteAll" style="cursor: pointer;" type="submit" value="Удалить всё" name="deleteAll">
</form>
<a href="?addForm=yes" style="color: #fff; display: block; cursor: pointer; margin-bottom: 20px;">Добавить изображения</a>


<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/footer.php'; ?>


