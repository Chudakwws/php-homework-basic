<?php
session_start();
if ($_SESSION['auth'] !== true)
{
    header("Location: /index.php");
}
?>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/header.php'; ?>
<h1>Ошибка ! страница не существует</h1>
<p><a href="/" style= "color: #fff;"></a>вернутьна на главную</p>


<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/footer.php'; ?>