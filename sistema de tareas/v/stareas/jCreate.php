<?php 
    
    $n = $d;
   
   switch ($n) {
   
       case '1':
        
           require_once 'jCreate1.php';
           break;
   
       case '2':
       
           require_once 'jCreate2.php';
           break;
   
       case '3':
       
           require_once 'jCreate3.php';
           break;
   
   
       default:
           require_once 'jCreate4.php';
           break;
   }
       