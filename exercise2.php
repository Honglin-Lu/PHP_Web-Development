<?php
    echo "Price Calculator"."<br /><br />";
    echo "<form id = \"form1\" method = \"post\" action=\"exercise2.php\" >";
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

    $TPS = 0.05;
    $TVQ = 0.09975;

    function subtotal_price($price, $amount)
    {
        $subtotal = $price * $amount;
        return $subtotal;
    }
    
    function TPS_tax($subtotal){
        global $TPS;
        $tax_TPS = $subtotal * $TPS;
        return $tax_TPS;
    }
    
    function TVQ_tax($subtotal){
        global $TVQ;
        $tax_TVQ = $subtotal * $TVQ;
        return $tax_TVQ;
    }

    function total_price($subtotal){
        global $TPS;
        global $TVQ;
        $total = $subtotal * (1 + $TPS + $TVQ);
        return $total;
    }

    if (isset($_POST['submit'])){
        $input_unitprice = $_POST["unitprice"];
        $input_amount = $_POST["amount"];
        $subtotal = subtotal_price($input_unitprice,$input_amount);
        $tax_TPS = TPS_tax($subtotal);
        $tax_TVQ = TVQ_tax($subtotal);
        $total = total_price($subtotal);
        echo "You bought $input_amount articles that cost $subtotal CA\$ each"; 
        echo "<br />";
        echo "The SUB-TOTAL due for your purchase is $subtotal CA\$";
        echo "<br />";
        echo "The TPS TAXES(".$TPS * 100 ."%) due for your purchase is $tax_TPS CA\$"; 
        echo "<br />";
        echo "The TVQ TAXES(".$TVQ * 100 ."%) due for your purchase is $tax_TVQ CA\$"; 
        echo "<br />";
        echo "The TOTAL due for your purchase is $total CA\$"; 
        echo "<br />";
    }
?>

