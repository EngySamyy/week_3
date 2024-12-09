<?php

// Number => 2
for($i= 1 ; $i <= 10 ; $i++){
    echo "My I is: ($i)";
    echo"<br/>";
};

echo"<br/>";
echo"****************************************";
echo"<br/>";

// Number => 1
for($num = 10 ; $num <= 50 ; $num = $num * 2){
    echo "my num is: ($num)";
    echo"<br/>";
};

echo"<br/>";
echo"****************************************";
echo"<br/>";

// Number => 3 => problem
$numbers = array(2 , 10, 3, 50, 9);
foreach($numbers as $N){
    if ($N == 50) {
        echo"$N";
    }
} 

echo"<br/>";
echo"****************************************";
echo"<br/>";

// Number => 4 =>Don't know
// $primeNumbers = array(2, 4, 3, 5, 11, 13, 10, 19, 23, 29, 31);
// $i = 2;
// foreach($primeNumbers as $prime){
//     if($prime / $i >= $prime){
//         echo "$prime <br>";
//     };
// }

echo"<br/>";
echo"****************************************";
echo"<br/>";

// Number => 5 =>Don't know
// $R = 12121 ;
// $reversed = 12121; 
// do{
//     if($R == $reversed);

// }while ()

// Number => 6 =>Don't know
$nums = array(2, 4, 6, 8, 10, 11);
$div = 2;
foreach ($nums as $num){
    while ($i = $num / $div);
    echo "$i";
    $i == 10;
}