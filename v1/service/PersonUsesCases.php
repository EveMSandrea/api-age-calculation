<?php
 require_once '../util/util.php';
 require_once '../model/person.class.php';

function processAgeCalculation($date) { 
    
    $isValidate = validateDate($date);
    return $isValidate ? Person::calculateCurrentAge($date) : 0; 
   
} 
?>
