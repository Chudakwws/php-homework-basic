<?php
    if (isset($_GET['loginOut']) && $_GET['loginOut']=='yes')
    {
        $dataBase = "mydb";
        $host = "localhost";
        $login = "root";
        $password = "11091982";
        $connection = mysqli_connect($host, $login, $password, $dataBase);           
        $activity_query = 'UPDATE users SET activity = 0 WHERE full_name ="' . $_SESSION['login'] . '"';
        $result = mysqli_query($connection, $activity_query);
        session_destroy();
        setcookie('login', $user['full_name'], time()-60*60*24*30,  'task.manager' );
        setcookie('password', $user['password'], time()-60*60*24*30, 'task.manager');
        setcookie('email', $user['email'], time()-60*60*24*30,  'task.manager' );
        setcookie('phone', $user['phone'], time()-60*60*24*30, 'task.manager');
        setcookie('group', $user['name'], time()-60*60*24*30, 'task.manager');
        setcookie('id', $user['id'], time()-60*60*24*30, 'task.manager');
        header("Location: http://task.manager/");
    }
    ?>