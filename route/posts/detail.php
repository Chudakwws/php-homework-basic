<?php
session_start();
if ($_SESSION['auth'] !== true)
{
    header("Location: /index.php");
}
?>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/header.php'; 

$id = $_GET['id'];
$message_read = show_mes($id);
?>
<section style="display: block; margin-top: 60px;">
<a href="/route/posts/" style="display: block; color: #fff;">«Вернуться к списку сообщений»</a>
<div style="background-color: #fff; width: 500px; min-height: 10px; border-radius: 15px; padding: 10px; margin: 20px 0 10px 0;">
    <h2 style="margin: 0;">Письмо <?=$message_read['title']?></h2>
    
</div>

<div style="display: flex; flex-direction: column; background-color: #fff; width: 500px; min-height: 200px; border-radius: 15px; padding: 10px; margin: 10px 0;">
    <p>От: <?=$message_read['full_name']?>     (<?=$message_read['email']?>)</p>
    <p>Дата: <?=$message_read['creation_time']?></p>
    <p><?=$message_read['text']?></p>
</div>
</section>


<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/footer.php'; ?>