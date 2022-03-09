<?php
include $_SERVER['DOCUMENT_ROOT'] . '/src/showGallery.php';

function fileNameCheck($failName) : string
{
    $correctFileName = preg_replace('/[^\s\w-]\.[a-zA-Z]$/', '_', $failName);
    return $correctFileName;
};


if (isset($_POST['send'])) 
{
    $numberOfFiles = count($_FILES['file']['name']);
    $allowedTypes = ['image/png', 'image/jpg', 'image/jpeg'];
    $maxUserFileSize = 2097152;
    $maxNumberOfUserFiles = 5;
        
    for ($key = 0; $key < $numberOfFiles; $key++ )
    {
        if(!empty($_FILES['file']['error'][$key]))
        {
            echo('Произошла ошибка');
            break; 
            showGallery($cdir);
        }
        elseif($numberOfFiles > $maxNumberOfUserFiles)
        {
            echo('Можно загрузить не более ' . $maxNumberOfUserFiles . ' файлов за раз!');
            break; 
            showGallery($cdir);
        }
        elseif(!in_array($_FILES['file']['type'][$key], $allowedTypes))
        {
            echo('Можно загрузить только изображения, это же ГАЛЕРЕЯ!!');
            break;  
            showGallery($cdir);
        }
        elseif($_FILES['file']['size'][$key] > $maxUserFileSize)
        {
            echo('Максимальный размер загружаемого изображения не должен превышать 2Мб'); 
            break; 
            showGallery($cdir);
        }
        else
        { 
            move_uploaded_file($_FILES['file']['tmp_name'][$key], $uploadPath . '/' . fileNameCheck($_FILES['file']['name'][$key]));
            include_once $_SERVER['DOCUMENT_ROOT'] . '/include/success.php';
            $cdir =  array_diff (scandir($uploadPath), array('..', '.'));
        }
    }

    showGallery($cdir);
}