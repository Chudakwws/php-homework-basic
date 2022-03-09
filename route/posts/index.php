<?php
session_start();
if ($_SESSION['auth'] !== true)
{
    header("Location: /index.php");
}
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/header.php';

$query = 'SELECT name FROM users 
    left join user_groups on users.id = user_id 
    left join `groups` on group_id = `groups`.id  
    WHERE full_name ="' . $_SESSION['login'] . '"';
    $result = mysqli_query(connect(), $query);
    $user_meta = mysqli_fetch_assoc($result);
    $user_group = $user_meta['name'];
?>

<h1><?=titlesPages($mainMenu)?></h1>

<?php 



if ($user_group == 'Читатель') : ?>
    <section>
        <p>Непрочтенные</p>
        <ul>
            <?php incoming_mes(0);?>
        </ul>   
    
        <p>Прочитанные</p>
        <ul>
            <?php incoming_mes(1);?>
        </ul> 
    </section>
    <h2>Вы сможете отправлять сообщения после прохождения модерации</h2>
<?php elseif ($user_group == 'Писатель') : ?>
    <section>
        <p>Непрочтенные</p>
        <ul>
            <?php incoming_mes(0);?>
        </ul>   
    
        <p>Прочитанные</p>
        <ul>
            <?php incoming_mes(1);?>
        </ul> 
    </section>
    <section>
        <a style='color: #fff; display: block; margin-bottom: 10px;' href="../posts/add/">Написать сообщение</a>
    </section>
<?php endif ?>
 

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/footer.php'; ?>