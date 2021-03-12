<?php
   class Calculation
   {
       public $num1, $num2;
        function sum(){
            return $this->num1 + $this->num2;
        }

        function difference(){
            return $this->num1 - $this->num2;
        }

        function product(){
            return $this->num1 * $this->num2;
        }
   
   }

   $obj = new Calculation;
   $obj->num1 = 3;
   $obj->num2 = 2;
   echo "The sum of two numbers is ". $obj->sum();
   echo "<br>";
   echo "The difference of two numbers is ".$obj->difference();
   echo "<br>";
   echo "The product of two numbers is ".$obj->product();

?>