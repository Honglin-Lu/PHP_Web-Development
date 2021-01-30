<?php
    echo "Price Calculator"."<br /><br />";
    echo "<form id = \"form1\" method = \"post\" action=\"exercise1.php\" >";
        // Form field to input unit price
        echo "<label for=\"unitprice\" >Enter article's unit price</label><br />";
        echo "<input id=\"input_price\" type=\"number\" name=\"unitprice\" placeholder=\"\" required=\"required\"><br />"; 
        echo "<br />";
        // Form field to input article amount
        echo "<label for=\"amount\" >Enter article's amount</label><br />";
        echo "<input id=\"input_amount\" type=\"number\" name=\"amount\" placeholder=\"\" required=\"required\"><br />"; 
        echo "<br />";
        // Submit button to send form
        echo "<input id=\"inputsubmit\" type=\"submit\" name=\"submit\" value=\"SUBMIT\" />"; 

    echo "</form>";
    echo "<br />";

    if (isset($_POST['submit'])){
        $input_unitprice = $_POST["unitprice"];
        $input_amount = $_POST["amount"];
        $subtotal = $input_unitprice * $input_amount;
        $tax_TPS = $subtotal * 0.05;
        $tax_TVQ = $subtotal * 0.09975;
        $total = $subtotal + $tax_TPS + $tax_TVQ;
        echo "The price of purchase without taxes (sub-total) : ".$subtotal; 
        echo "<br />";
        echo "The price for TPS  : ".$tax_TPS; 
        echo "<br />";
        echo "The price for TVQ  : ".$tax_TVQ; 
        echo "<br />";
        echo "The price of purchase including taxes  : ".$total; 
        echo "<br />";
    }
?>

