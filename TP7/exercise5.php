<?php
    if (!isset($_POST['submit'])){
        echo "<form id=\"date_form\" method=\"post\" action=\"exercise5.php\">";
        echo "<input type=\"checkbox\" id=\"service1\" name=\"services[]\" value=\"TV cable\">";
        echo "<label for=\"service1\">TV cable</label>";
        echo "<br/>";
        echo "<input type=\"checkbox\" id=\"service2\" name=\"services[]\" value=\"Mobile phone\">";
        echo "<label for=\"service2\">Mobile phone</label>";
        echo "<br/>";
        echo "<input type=\"checkbox\" id=\"service3\" name=\"services[]\" value=\"Wired phone\">";
        echo "<label for=\"service3\">Wired phone</label>";
        echo "<br/>";
        echo "<input type=\"checkbox\" id=\"service4\" name=\"services[]\" value=\"Internet\">";
        echo "<label for=\"service4\">Internet</label>";
        echo "<br/>";
        echo "<input type=\"checkbox\" id=\"service5\" name=\"services[]\" value=\"Alarm\">";
        echo "<label for=\"service5\">Alarm</label>";
        echo "<br/><br/>";
        echo "<input type=\"submit\" name=\"submit\" value=\"SUBMIT\">";
        echo "<br/>";
        echo "</form>";
    }else{
        $name = $_POST['services'];
        foreach($name as $item){
            echo "$item<br/>";
        }
    }

?>