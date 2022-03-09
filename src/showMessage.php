<?php

function show_mes ($id) 
{
    $read_query = 'UPDATE messages SET `read` = 1 WHERE id ="' . $id . '"';
    $read_result = mysqli_query(connect(), $read_query);
    
    $query = 'select title, text, `read`, creation_time, full_name , recipient_id, email from messages 
    left join users on sender_id = users.id  
    WHERE messages.id ="' . $id . '"';
    $message_result = mysqli_query(connect(), $query);
    $message = mysqli_fetch_assoc($message_result);
    return $message;
}