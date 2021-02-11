<?php
$fruits = array("apple","banana","orange","pear","raisin");
echo "This is for loop! <br>";
for ($i = 0; $i < 5; $i++){
    echo "$fruits[$i]<br>";
}

echo "This is foreach loop! <br>";
foreach($fruits as $item){
    echo "$item<br>";
}
?>