<?php
    echo "This will display a table for you"."<br /><br />";
    echo "<form id = \"form1\" method = \"post\" action=\"exercise4.php\" >";
        echo "<label for=\"row\" >Enter the number of rows:</label><br />";
        echo "<input id=\"row\" type=\"number\" name=\"row\" placeholder=\"\" required=\"required\"><br />"; 
        echo "<br />";
        echo "<label for=\"column\" >Enter the number of columns:</label><br />";
        echo "<input id=\"column\" type=\"number\" name=\"column\" placeholder=\"\" required=\"required\"><br />"; 
        echo "<br />";
        echo "<input id=\"inputsubmit\" type=\"submit\" name=\"submit\" value=\"SUBMIT\" />"; 
    echo "</form>";
    echo "<br />";

    if (isset($_POST['submit'])){
        $row = $_POST["row"];
        $column = $_POST["column"];
        echo "<table style='border: 1px solid black'>";
            for ($i=1; $i<=$row; $i++){
                echo "<tr style='border: 1px solid black'>";
                for($j=1; $j<=$column; $j++){
                    echo "<td style='border: 1px solid black'>$i.$j</td>";
                }
                echo "</tr>";
            }
        echo "</table>";
    }
?>