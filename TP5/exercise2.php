<?php
    echo "<h2>This program displays a number's factorial.</h2>";
    echo "<form id=\"form1\" method=\"post\" action=\"exercise2.php\" >";
        echo "<label for=\"number\">Enter a Positive Number :</label><br>";
        echo "<input id=\"input_number\" type=\"number\" name=\"user_number\" placeholder=\"\" required=\"required\"><br />"; 
        echo "<br>";
        echo "<input id=\"inputsubmit\" type=\"submit\" name=\"submit\" value=\"SUBMIT\" />"; 
    echo "</form>";
    echo "<br>";
    if (isset($_POST['submit'])){
        $input_number = $_POST['user_number'];
        if ($input_number == 0){
            $result = 1;
            echo "Factorial $input_number = ".$result;
        }elseif($input_number < 0){
            echo "Please Enter a number greater than 0.";
        }else{
            $result = 1;
            for ($i=$input_number; $i>=1; $i--){
                $result = $result * $i;
            }
            echo "Factorial $input_number = ".$result;
            echo "<br>";
        }
    }
?>
