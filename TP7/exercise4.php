<?php
    $scores = array ( 25, 64, 100, 87, 56, 38, 78, 57, 98, 
                    95, 81, 67, 75, 100, 74, 82, 36, 39,19, 90, 54, 43, 49, 
                    100, 69, 69, 78, 17, 91, 100);
    $j = 0;
    $n = 0;
    $m = 0;
    $sum = 0;
    foreach($scores as $item){
        $j++;
        if ($item < 60){
            $n++;
        }else{
            $m++;
        }
        $sum = $sum + $item;
    }
    $average = $sum/$j;
    echo "The number of all scores is $j<br/>";
    echo "The number of scores lower than 60 is $n<br/>";
    echo "The number of scores greater than 60 is $m<br/>";
    echo "The average is $average <br/>";

    //built-in function
    echo "The total number of scores : ".count($scores)."<br/>";
    echo "The smallest score : ".min($scores)."<br/>";
    echo "The largest score : ".max($scores)."<br/>";
    sort($scores);
    foreach($scores as $item){
        echo "$item\t";
    }
?>