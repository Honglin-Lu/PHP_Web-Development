<?php
    echo "<h2>A web game for children!</h2>";
    echo "<form id=\"form1\" method=\"post\" action=\"Exercise2HonglinLu.php\" >";
        echo "<label for=\"number\">Submit a number between 1-20 :</label><br>";
        echo "<input id=\"input_number\" type=\"number\" name=\"number\" min=\"1\" max=\"20\" placeholder=\"\" required=\"required\"><br />"; 
        echo "<br>";
        echo "<input id=\"inputsubmit\" type=\"submit\" name=\"submit\" value=\"SUBMIT\" />"; 
    echo "</form>";
    echo "<br>";

    if (isset($_POST['submit'])){
        $num = $_POST['number'];
        $random_num = rand(1, 20);
        if ($num > $random_num){
            echo "Fail - You entered $num but it is greater than the number we generated that is $random_num .";
        }elseif($num < $random_num){
            echo "Fail - You entered $num but it is lower than the number we generated that is $random_num .";
        }else{
            echo "Success - You entered $num and it is exactly the number we generated";
        }   
    }
?>