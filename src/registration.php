<?php 

function registration(){
    if ($_POST['send'] === 'Регистрация')
    {
        // Проверяем на пустоту отправленную форм $userPassword
        if (!empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['email']) && !empty($_POST['phone'])) 
        {  

            $userLogin = $_POST['login'];
            $userPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $userPhone = $_POST['phone'];
            $userEmail = $_POST['email'];

            $query = 'SELECT * FROM users WHERE email ="' . $userEmail . '"' . ' OR full_name ="' . $userLogin . '"';
            $result = mysqli_query(connect(), $query);
            $user = mysqli_fetch_assoc($result);
            if (empty($user))
            {
                $newQuery = 'INSERT users (full_name, email, phone, password) VALUE ("' . $userLogin . '", "' . $userEmail . '", "' . $userPhone . '", "' . $userPassword . '" )';
                var_dump($newQuery);
                $regResult = mysqli_query(connect(), $newQuery);

            }
        }

    }
}