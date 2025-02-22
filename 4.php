<?php
function calculateSum($numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

$numbers = [10, 20, 30, 40, 50];
$sum = calculateSum($numbers);

echo "The sum of the numbers is: $sum";
?>
