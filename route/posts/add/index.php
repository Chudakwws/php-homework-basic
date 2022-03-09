<?php
session_start();
if ($_SESSION['auth'] !== true)
{
    header("Location: /index.php");
}
?>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/header.php'; 

    $users_query = 'SELECT * FROM users WHERE full_name != "' . $_SESSION['login'] . '";';
    $users_result = mysqli_query(connect(), $users_query);
    while($row = mysqli_fetch_array($users_result))
    {
        $users[] = $row;
    }   

    $section_query = 'SELECT * FROM message_sections;';
    $section_result = mysqli_query(connect(), $section_query);
    while($row = mysqli_fetch_array($section_result))
    {
        $sections[] = $row;
    } 

    if (isset($_POST['send_message']) and $_POST['send_message'] === 'Отправить') 
    {
		adding_message();
	}

?>
<h1>Новое письмо</h1>



<form style="display: flex; flex-direction: column; margin: 0 auto; width: 40%;" action="" method="post">
    <label for="title" style="padding: 5px 0;">Тема</label>
    <input type="text" name="title" id="title" required>

    <label for="message_text" style="padding: 5px 0;">Сообщение</label>
    <textarea name="message_text" id="message_text" cols="30" rows="10" required></textarea>

    <label for="recipient" style="padding: 5px 0;">Кому</label>
    <select name="recipient" id="recipient" required>
        <option selected disabled hidden >-- Пожалуйста выберите Получателя --</option>
        <?php foreach ($users as $value) {
            $values = $value["full_name"];
            $values_id = $value['id'];
            include $_SERVER['DOCUMENT_ROOT'] . '/include/new_message_options.php';
        } ?>
    </select>


    <label for="section" style="padding: 5px 0;">Раздел</label>
    <select name="section" id="section" required>
        <option selected disabled >-- Пожалуйста выберите Раздел --</option>
        <?php foreach ($sections as $value) {
            $values = $value['name'];
            $values_id = $value['id'];
            include $_SERVER['DOCUMENT_ROOT'] . '/include/new_message_options.php';
        } ?>
    </select>

    <input type="submit" style="margin: 10px 0;" value="Отправить" name="send_message" id="send_message">

</form> 

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/footer.php'; ?>