<?php
    echo "This program will validate the date !!!"."<br /><br />";
	echo "<form id=\"form1\" method=\"post\" action=\"exercise1.php\" >"; 
		echo "<label for=\"month\">Enter month : </label>"; 
		echo "<input id=\"month\" type=\"number\" name=\"month\" placeholder=\"\" required=\"required\"><br />"; 
		echo "<br />";
        echo "<label for=\"day\">Enter day : </label>"; 
		echo "<input id=\"day\" type=\"number\" name=\"day\" placeholder=\"\" required=\"required\"><br />"; 
		echo "<br />";
        echo "<label for=\"year\">Enter year : </label>"; 
		echo "<input id=\"year\" type=\"number\" name=\"year\" placeholder=\"\" required=\"required\"><br />"; 
		echo "<br />";
		echo "<input id=\"datesubmit\" type=\"submit\" name=\"submit\" value=\"SUBMIT\" />"; 
	echo "</form>"; 
	echo "<br />";

    if (isset($_POST['submit'])){
        $month = $_POST["month"];
        $day = $_POST['day'];
        $year = $_POST['year'];

        $entered_date = strtotime("$day-$month-$year");
        $today_date = strtotime(date('d F Y'));
        $diff = ($today_date - $entered_date) / 60 / 60 / 24;

        if (checkdate($month, $day, $year)){
            echo "The date entered is valid.";
            echo "<br />";
            echo "The date entered is ".date('F d Y', mktime(0,0,0,$month,$day,$year));
            echo "<br />";
            echo "Today is ".date('F d Y');
            echo "<br />";
            echo "The difference is ". $diff ." days";

        }else{
            echo "The date entered is invalid.<br/>";
            echo "Try again!";
        }
    }

?>