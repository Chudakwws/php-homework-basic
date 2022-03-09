<?php
session_start();
if ($_SESSION['auth'] !== true)
{
    header("Location: http://task.manager/index.php");
}
?>