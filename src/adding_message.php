<?php
    
    function adding_message()
    {

        if ($_POST['send_message'] === 'Отправить') 
        { 
            $new_title = $_POST['title'];
            $new_message_text = $_POST['message_text'];
            $new_recipient = $_POST['recipient'];
            $new_section = $_POST['section'];
            $new_date = date("Y-m-d H:i:s");
            $new_senderId = $_SESSION['id'];
            
            $new_message_query = 'insert messages(title, `text`, creation_time, recipient_id, sender_id, `read`, section_id) 
            value ("' . $new_title . '", "' . $new_message_text . '", "' . $new_date . '", ' . $new_recipient . ', ' . $new_senderId . ', 0, ' . $new_section . ' )';

            $result = mysqli_query(connect(), $new_message_query);
        }

    }
