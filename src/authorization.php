<?php

function authorization()
{
    
    if ($_POST['send'] === 'Войти') 
    {
        // Проверяем на пустоту отправленную форм $userPassword
        if (!empty($_POST['login']) && !empty($_POST['password'])) 
        {  

            $userLogin = $_POST['login'];
            $userPassword = $_POST['password'];
            $query = 'SELECT full_name, id, password FROM users WHERE full_name ="' . $userLogin . '"';
            $result = mysqli_query(connect(), $query);
            $user = mysqli_fetch_assoc($result);
            if (!empty($user)) 
            {
                if (password_verify($userPassword, $user['password'])) 
                {
                $activity_query = 'UPDATE users SET activity = 1 WHERE full_name ="' . $userLogin . '"';
                $result = mysqli_query(connect(), $activity_query);
                include $_SERVER['DOCUMENT_ROOT'].'/include/success_message.php';
                    
                $_GET['login'] = 'no';
                    
                setcookie('login', $user['full_name'], time()+60*60*24*30,  'task.manager' );
                setcookie('id', $user['id'], time()+60*60*24*30,  'task.manager' );

                $_SESSION['login'] =  $user['full_name'];
                $_SESSION['id'] =  $user['id'];
                $_SESSION['auth'] = true;

                }
                else {
                    echo 'Введен неверный логин или пароль';
                }
            }
        }
        else 
        {
            include $_SERVER['DOCUMENT_ROOT'].'/include/error_message.php';
        }
    }       
    else 
    {
        include $_SERVER['DOCUMENT_ROOT'].'/include/error_message.php';
    }
}
        
