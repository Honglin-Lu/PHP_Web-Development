<?php
    echo "<h2>Price Calculator</h2>"."<br />";
    echo "<form id = \"form1\" method = \"post\" action=\"Exercise1HonglinLu.php\" >";
        echo "<label for=\"itemname\" >Item name:</label><br />";
        echo "<input id=\"item_name\" type=\"text\" name=\"itemname\" placeholder=\"\" required=\"required\"><br />"; 
        echo "<br />";
        echo "<label for=\"unitprice\" >Unit price (\$CA):</label><br />";
        echo "<input id=\"input_price\" type=\"number\" name=\"unitprice\" placeholder=\"\" required=\"required\"><br />"; 
        echo "<br />";
        echo "<label for=\"amount\" >Quantity bought:</label><br />";
        echo "<input id=\"input_amount\" type=\"number\" name=\"amount\" placeholder=\"\" required=\"required\"><br />"; 
        echo "<br />";
        echo "<label for=\"discount\" >Discount before taxes (\$CA):</label><br />";
        echo "<input id=\"discount\" type=\"number\" name=\"discount\" min=\"0\" placeholder=\"\" required=\"required\"><br />"; 
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
        $item_name = $_POST["itemname"];
        $input_unitprice = $_POST["unitprice"];
        $input_amount = $_POST["amount"];
        $discount = $_POST["discount"];
        $subtotal = subtotal_price($input_unitprice,$input_amount);
        $subtotal_2 = $subtotal - $discount;
        $tax_TPS = TPS_tax($subtotal_2);
        $tax_TVQ = TVQ_tax($subtotal_2);
        $total = total_price($subtotal_2);
        if($input_unitprice > 0 && $input_amount > 0){
            echo "You bought $input_amount $item_name that cost $input_unitprice CA\$ each."; 
            echo "<br />";
            echo "The SUB-TOTAL without discount is $subtotal CA\$.";
            echo "<br />";
            echo "The SUB-TOTAL with discount is $subtotal_2 CA\$.";
            echo "<br />";
            echo "The TPS TAXES(".$TPS * 100 ."%) due is $tax_TPS CA\$."; 
            echo "<br />";
            echo "The TVQ TAXES(".$TVQ * 100 ."%) due is $tax_TVQ CA\$."; 
            echo "<br />";
            echo "The TOTAL due is $total CA\$."; 
            echo "<br />";
        }else{
            echo "Both unit price and quantity of items should be greater than 0 !!!";
        }
    }


?>