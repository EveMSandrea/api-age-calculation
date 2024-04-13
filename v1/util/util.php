<?php


function validateDate($date) { 
    print_r($date);
    $format = 'd-m-Y';
    $d = DateTime::createFromFormat($format, $date); 
    return $d && $d->format($format) === $date; 
} 
?>