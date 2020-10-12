<?php
$number = rand(1, 6);
$number2 = rand(1, 6);

if ($number == 6 && $number2 == 6) {
    echo 'You rolled a ';
    echo $number;
    echo ' and a ';
    echo $number2;
    echo ', you win!';
}

else {
    echo 'You rolled a ';
    echo $number;
    echo ' and a ';
    echo $number2;
    echo ', you lose';
}

echo '<a href="ex1.php"> Roll again</a>';
?>