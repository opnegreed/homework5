<?php
function cube($a){
    $a = pow($a, 3);
    echo $a;
}
$b = 2;
cube($b);

function sum($a, $b){
    $sum = $a + $b;
    echo "<br/>$sum";
}

sum(2, 3);



function day($a){
    $day = array('понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье');
    echo "</br>";
    echo $day[$a - 1];
}

day(3);
echo "</br>";
function positive($a){
    if ($a > 0){
        echo "true";
    }
    elseif ($a < 0){
        echo "false";
    }
    else {
        echo "ноль";
    }
}

positive(0);

echo "</br>";

/*function getDigitSum($a)
{
    $num = array_map("intval", str_split($a));
    for ($i = 0; $i < count($num); $i++) {
        $sum += $num[$i];
    }
*/

// function getDigitSum($a)
{
    $num = array_map("intval", str_split($a));
    for ($i = 0; $i < count($num); $i++) {
        $sum += $num[$i];
    }
    if($sum == 13){
        echo $a;
        echo "</br>";
    }
}

/* for ($a = 0; $a < 2021; $a++){
    getDigitSum($a);
}
*/
function isEven($a){
    if(($a % 2) == 0){
        echo "true";
    }
    else {
        echo "false";
    }
}

isEven(2);

