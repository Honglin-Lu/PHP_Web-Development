<?php
    echo "<h2>This program checks whether input number is a multiple of 2 or 3.</h2>";
    echo "<form id=\"form1\" method=\"post\" action=\"exercise1.php\" >";
        echo "<label for=\"number\">Enter a Positive Number :</label><br>";
        echo "<input id=\"input_number\" type=\"number\" name=\"user_number\" placeholder=\"\" required=\"required\"><br />"; 
        echo "<br>";
        echo "<input id=\"inputsubmit\" type=\"submit\" name=\"submit\" value=\"SUBMIT\" />"; 
    echo "</form>";
    echo "<br>";

    if (isset($_POST['submit'])){
        $input_number = $_POST['user_number'];
        if ($input_number % 2 == 0 && $input_number % 3 == 0){
            echo "$input_number is a multiple of 2 and 3.";
        }elseif($input_number % 2 == 0){
            echo "$input_number is a multiple of 2.";
        }elseif($input_number % 3 == 0){
            echo "$input_number is a multiple of 3";
        }else{
            echo "$input_number is neither multiple of 2 nor multiple of 3.";
        }

    }

?>
