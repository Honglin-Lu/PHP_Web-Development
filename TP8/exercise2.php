<?php
    function abiNum(){
        $arguments = func_get_args();
        $number_arguments = func_num_args();
        if($number_arguments > 1){
            $sum_arguments = array_sum($arguments);
            $average = $sum_arguments / $number_arguments;
            return "The average is ". $average;
        }else{
             return "You must return more than one.";
        }
        
    }
    echo abiNum(2, 3, 5, 8, 9);
?>

