<?php
    echo "<h2>This will display each letter of your name on a new line.</h2>";
    echo "<form id=\"form1\" method=\"post\" action=\"exercise3.php\" >";
        echo "<label for=\"user_name\">Write your name below :</label><br>";
        echo "<input id=\"input_name\" type=\"text\" name=\"user_name\" placeholder=\"\" required=\"required\"><br />"; 
        echo "<br>";
        echo "<input id=\"inputsubmit\" type=\"submit\" name=\"submit\" value=\"SUBMIT\" />"; 
    echo "</form>";
    echo "<br>";

    if (isset($_POST['submit'])){
        $input_name = strtoupper($_POST['user_name']);
        $name_length = strlen($input_name);
        echo "<ul>";
        $index = 0;
        for($i=0; $i<$name_length; $i++){
            if ($input_name[$i] != " "){
                $index = $index + 1;
                echo "<li>Letter $index : $input_name[$i]</li>";
            }
        }
        echo "</ul>";
    }

?>
