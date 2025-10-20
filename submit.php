<?php
if($_SERVER ["REQUEST_METHOD"]== "POST"){
    $num1 = $_POST['fnumber'];
     $num2 = $_POST['second_number'] ;
       $calculator = $_POST['calculator'] ;
       if( $calculator == "addition"){
        $result = $num1 + $num2;
         echo "Result: " . $result;

       
       } 
       elseif($calculator == "subtraction") {
         $result = $num1 - $num2;
          echo "Result: " . $result;

       }
       elseif($calculator == "multiplication") {
       $result = $num1 * $num2;
         echo "Result: " . $result;

       }
       else{
        echo " please select valid option";
       }
       
       

    

}