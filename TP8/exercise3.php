<?php
    echo "This program will calculate the factorial of the number entered !!!"."<br /><br />";
	echo "<form id=\"form1\" method=\"post\" action=\"exercise3.php\" >"; 
		echo "<label for=\"givevalue\">Enter a NUMBER</label><br />"; 
		echo "<input id=\"inputtext1\" type=\"number\" name=\"uservalue\" placeholder=\"\" required=\"required\"><br />"; 
		echo "<br />";
		echo "<input id=\"inputsubmit1\" type=\"submit\" name=\"submit\" value=\"SUBMIT\" />"; 
	echo "</form>"; 
	echo "<br />";

    function factorial($num){
        if($num <= 1){
            return 1;
        }
        return $num * factorial($num-1);
    }

    if(isset($_POST['submit'])){
        $inputvalue = $_POST['uservalue'];
        if($inputvalue < 0){
            echo "Your number cannot be lower than 0. Try again!";
        }elseif($inputvalue == 0 || $inputvalue == 1){
            echo "The factorial is 1";
        }else{
            echo "The factorial is ". factorial($inputvalue);            
        }
    }
?>