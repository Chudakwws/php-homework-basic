<?php

function incoming_mes ($read) 
{   
    $message_query = 'select messages.id as id, title, `name`, `read` from messages 
    left join users on recipient_id = users.id 
    left join message_sections on section_id = message_sections.id 
    WHERE full_name ="' . $_SESSION['login'] . '"';
    
    $result_messages = mysqli_query(connect(), $message_query);
    while($row = mysqli_fetch_array($result_messages))
    {
        $messages[] = $row;
    }   

    foreach ($messages as $value)
    {
        if($value['read'] == $read)
        {
            include $_SERVER['DOCUMENT_ROOT'] . '/include/message_card.php';
        }
    }
}
    
