<!DOCTYPE html>
<html>
    <head>
        <title>Display Season</title>
    </head>
    <body>
        <h1>This program allows you to display the corresponding season!</h1>
        
        <?php
            function Retry($month, $day){
                echo "<h4>You entered $month $day that seems to not be a VALID DATE!</h4>";
                echo "<br>";
                echo "<h3><a href=\"exercise.php\">TRY AGAIN!</a></h3>";
            }
            if (!isset($_POST['submit'])){
                echo "<form id=\"date_form\" method=\"post\" action=\"exercise.php\">";
                echo "<label for=\"month_number\">Enter the month:</label>";
                echo "<input type=\"number\" name=\"month_number\" max=\"12\" min=\"1\" required=\"required\">";
                echo "<br/><br/>";
                echo "<label for=\"day_number\">Enter the day:</label>";
                echo "<input type=\"number\" name=\"day_number\" max=\"31\" min=\"1\" required=\"required\">";
                echo "<br/><br/>";
                echo "<input type=\"submit\" name=\"submit\" value=\"SUBMIT\">";
                echo "<br/>";
                echo "</form>";
            }else{
                $month = $_POST['month_number'];
                $day = $_POST['day_number'];
                switch ($month){
                    case 1: 
                        echo "You entered January $day that is WINTER. Enjoy the snow!";
                        break;
                    case 2: 
                        $month_name = "February";
                        if ($day <= 29){
                            echo "You entered February $day that is WINTER. Enjoy the snow!"; 
                        }else{
                            Retry($month_name, $day);
                        }
                        break;
                    case 3: 
                        if ($day <= 19){
                            echo "You entered March $day that is WINTER. Enjoy the snow!";
                        }else{
                            echo "You entered March $day that is SPRING. Enjoy the flowers!";
                        }
                        break;
                    case 4:
                        $month_name = "April";
                        if ($day == 31){
                            Retry($month_name, $day);
                        }else{
                            echo "You entered April $day that is SPRING. Enjoy the flowers!";
                        }
                        break;
                    case 5:
                        echo "You entered May $day that is SPRING. Enjoy the flowers!";
                        break;
                    case 6:
                        $month_name = "June";
                        if ($day <= 19){
                            echo "You entered June $day that is SPRING. Enjoy the flowers!"; 
                        }elseif($day <= 30){
                            echo "You entered June $day that is SUMMER. Enjoy the sun!";
                        }else{
                            Retry($month_name, $day);
                        }
                        break;
                    case 7:
                        echo "You entered July $day that is SUMMER. Enjoy the sun!";
                        break;
                    case 8:
                        echo "You entered August $day that is SUMMER. Enjoy the sun!";
                        break;
                    case 9:
                        $month_name = "September";
                        if ($day <= 21){
                            echo "You entered September $day that is SUMMER. Enjoy the sun!"; 
                        }elseif($day <= 30){
                            echo "You entered September $day that is FALL. Enjoy the wind!";
                        }else{
                            Retry($month_name, $day);
                        }
                        break;
                    case 10:
                        echo "You entered October $day that is FALL. Enjoy the wind!";
                        break;
                    case 11:
                        $month_name = "November";
                        if ($day <= 30){
                            echo "You entered November $day that is FALL. Enjoy the wind!"; 
                        }else{
                            Retry($month_name, $day);
                        }
                        break;
                    case 12:
                        if ($day <= 20){
                            echo "You entered December $day that is FALL. Enjoy the wind!";
                        }else{
                            echo "You entered December $day that is WINTER. Enjoy the snow!";
                        }
                        break;
                }
            }
        ?>
    </body>
</html>