<?php

function user_meta()
{
    $query = 'SELECT phone, email, name FROM users left join user_groups on users.id = user_id left join `groups` on group_id = `groups`.id  WHERE full_name ="' . $_SESSION['login'] . '"';
    $result = mysqli_query(connect(), $query);
    $user_meta = mysqli_fetch_assoc($result);
    foreach ($user_meta as $value)
    {
        include $_SERVER['DOCUMENT_ROOT'].'/include/user_meta_list.php';
    }
};