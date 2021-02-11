<?php
    $fruits['a'] = "apple";
    $fruits['b'] = "banana";
    $fruits['o'] = "orange";
    $fruits['p'] = "pear";
    $fruits['r'] = "raisin";
    echo $fruits['b'];
    echo "<br>";
    foreach ($fruits as $item){
        echo "$item<br>";
    }
?>