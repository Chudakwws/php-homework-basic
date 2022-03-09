<?php
function cutString($line, $length = 12, $appends = '...'): string {
    if (mb_strlen($line) <= $length)  
    {
        return $line;
    } 

    return mb_substr($line, 0, $length) . $appends;
    
};