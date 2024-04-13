<?php
class  Person  {
  
  public static function calculateCurrentAge($date){        
     $fecha = new DateTime($date);
     $today = new DateTime();
     return ($today->diff($fecha))->y;
     
 }
}  
    ?>