<?php
    echo "<h2>This program will display 3 different numbers in ascending order!</h2>";
    echo "<form id=\"form1\" method=\"post\" action=\"exercise2.php\" >";
        echo "<label for=\"number1\">Enter the first number :</label><br>";
        echo "<input id=\"input_number1\" type=\"number\" name=\"number1\" placeholder=\"\" required=\"required\"><br />"; 
        echo "<br>";
        echo "<label for=\"number2\">Enter the second number :</label><br>";
        echo "<input id=\"input_number2\" type=\"number\" name=\"number2\" placeholder=\"\" required=\"required\"><br />"; 
        echo "<br>";
        echo "<label for=\"number3\">Enter the third number :</label><br>";
        echo "<input id=\"input_number3\" type=\"number\" name=\"number3\" placeholder=\"\" required=\"required\"><br />"; 
        echo "<br>";
        echo "<input id=\"inputsubmit\" type=\"submit\" name=\"submit\" value=\"SUBMIT\" />"; 
    echo "</form>";
    echo "<br>";

    if (isset($_POST['submit'])){
        $num1 = $_POST['number1'];
        $num2 = $_POST['number2'];
        $num3 = $_POST['number3'];
        echo "The input numbers are : $num1, $num2, $num3";
        echo "<br>";

        if ($num1 == $num2 || $num1 == $num3 || $num2 == $num3){
            echo "<h3>Please enter three different numbers !</h3>";
        } 
        if ($num1 < $num2 && $num2 < $num3){
            echo "The ascending order of 3 numbers : $num1, $num2, $num3";
        }
        if ($num1 < $num3 && $num3 < $num2){
            echo "The ascending order of 3 numbers : $num1, $num3, $num2";
        }
        if ($num3 < $num1 && $num1 < $num2){
            echo "The ascending order of 3 numbers : $num3, $num1, $num2";
        }
        if ($num2 < $num1 && $num1 < $num3){
            echo "The ascending order of 3 numbers : $num2, $num1, $num3";
        }
        if ($num2 < $num3 && $num3 < $num1){
            echo "The ascending order of 3 numbers : $num2, $num3, $num1";
        }
        if ($num3 < $num2 && $num2 < $num1){
            echo "The ascending order of 3 numbers : $num3, $num2, $num1";
        }

    }
?>