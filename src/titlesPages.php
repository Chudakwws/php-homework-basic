<?php

function titlesPages ($array) 
{
    foreach ($array as $value){
        if(strtok($_SERVER["REQUEST_URI"], '?') == $value['path']) {
            $title = $value['title'];
        }
    }
    return $title;
    
}

