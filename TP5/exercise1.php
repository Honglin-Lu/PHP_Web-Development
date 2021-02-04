<?php
    echo "<h2>This program displays a number's multiplication table from 1 to 10.</h2>";
    echo "<form id=\"form1\" method=\"post\" action=\"exercise1.php\" >";
        echo "<label for=\"number\">Enter a Positive Number :</label><br>";
        echo "<input id=\"input_number\" type=\"number\" name=\"user_number\" placeholder=\"\" required=\"required\"><br />"; 
        echo "<br>";
        echo "<input id=\"inputsubmit\" type=\"submit\" name=\"submit\" value=\"SUBMIT\" />"; 
    echo "</form>";
    echo "<br>";

    if (isset($_POST['submit'])){
        $input_number = $_POST['user_number'];
        for ($i=1; $i<=10; $i++){
            $result = $input_number * $i;
            echo "$input_number × $i = ".$result;
            echo "<br>";
        }
    }

?>
